<?php

use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;


Route::view( '/', 'web.welcome' );

Route::prefix( 'login' )->group( function () {
	Route::get( '/', [ SocialAuthController::class, 'index' ] )->name( 'login' );
	Route::get( '{provider}', [ SocialAuthController::class, 'redirectToProvider' ] )->name( 'auth-social.provider-to-redirect' );
	Route::get( '{provider}/callback', [ SocialAuthController::class, 'handleProviderCallback' ] )->name( 'auth-social.handle-provider-callback' );
} );
Route::post( 'logout', [ SocialAuthController::class, 'logout' ] )->name( 'logout' );
