<x-layout>
    <div
        class="relative flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-gray-800 to-gray-900 selection:bg-indigo-500 selection:text-white">
        <div class="absolute left-1/2 top-0 ml-[-50%] h-[50vh] w-full">
            <div
                class="absolute inset-0 bg-gradient-to-r from-indigo-300 to-purple-400 opacity-70 [mask-image:radial-gradient(farthest-side_at_top,white,transparent)]">
            </div>
        </div>

        <div class="z-10 flex flex-col items-center justify-center flex-grow p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex flex-col justify-center">
                <x-application-logo class="w-full h-24 sm:h-32 sm:w-auto fill-white" />

                <p
                    class="max-w-3xl mt-12 text-2xl font-medium leading-relaxed text-center text-white sm:text-3xl sm:leading-relaxed">
                    The open-source admin template for PHP Artisan.
                </p>
            </div>

            <div class="flex justify-center mt-12 space-x-4">
                @auth
                    <x-splade-button class="w-fit" type="link" primary href="{{ route('home') }}"
                        class="px-4 py-2 font-bold text-white bg-indigo-500 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:border-indigo-300 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        Dashboard
                    </x-splade-button>
                @endauth

                @guest
                    <div class="flex flex-wrap gap-4">
                        @foreach (['facebook' => __('Facebook'), 'google' => __('Google'), 'github' => __('Github')] as $provider => $label)
                            @if (config('services.' . $provider . '.client_id'))
                                <x-splade-button class="w-fit" type="link" primary
                                    href="{{ route('auth-social.provider-to-redirect', ['provider' => $provider]) }}">Login
                                    with
                                    {{ $label }}</x-splade-button>
                            @endif
                        @endforeach
                    </div>
                @endguest
            </div>
        </div>

    </div>
</x-layout>
