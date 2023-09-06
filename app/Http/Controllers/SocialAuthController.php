<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Log;
use Socialite;
use Splade;
use Throwable;

class SocialAuthController
{
    public function index(Request $request)
    {
        return view('web.auth.login', [
            'status'    => $request->has('error'),
            'error'     => $request->get('error_description'),
        ]);
    }

    /**
     * Redirect the user to the provider authentication page.
     *
     * @param  string  $provider
     *
     * @return Response
     */
    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from the provider.
     *
     * @param  string  $provider
     *
     * @return RedirectResponse
     */
    public function handleProviderCallback(string $provider)
    {
        try {
            $providerUser = Socialite::driver($provider)->user();
        } catch (Throwable $throwable) {
            Log::error($throwable->getMessage());
        }

        $user = User::updateOrCreate([
            'provider'    => $provider,
            'provider_id' => $providerUser->id,
        ], [
            'name'          => $providerUser->name,
            'email'         => $providerUser->email,
            'avatar'        => $providerUser->avatar,
            'token'         => $providerUser->token,
            'refresh_token' => $providerUser->refreshToken,
        ]);

        Auth::login($user);

        Splade::share('banner', ['message' => __('Welcome Back, ').auth()->user()->name]);

        return to_route('dashboard');

    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
