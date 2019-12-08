<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'auth',
    'namespace' => 'Api'
], function () {
    Route::post('login', 'Auth\AuthController@login')->name('login');
    Route::post('register', 'Auth\AuthController@register');
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'Auth\AuthController@logout');
        Route::get('user', 'Auth\AuthController@user');
        Route::post('google2fa/activate', 'Auth\GoogleAuthenticatorController@activate');
        Route::post('google2fa/deactivate', 'Auth\GoogleAuthenticatorController@deactivate');
    });
});

Route::group([
  'prefix' => 'digital-win',
  'namespace' => 'Api',
], function() {
    Route::post('wallet', 'DigitalWinController@wallet');
});
