<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'IndexController@index');

// Auth routes

// Route::get('home', 'HomeController@index'); -- removed due to set IndexController to manage the / and page to return

Route::group(['middleware' => ['auth']], function () {
    Route::get('game-page', 'GamePageController@index');
    Route::get('personal-details', 'PersonalDetailsController@index');
    Route::match(['GET', 'POST'], 'change-password', 'ChangePasswordController@index')->name('change.password');
    Route::get('preferences', 'UserPreferencesController@index');
    Route::get('kyc', 'KYCController@index');
    Route::get('currency-exchange', 'ConversionController@index');
    Route::get('currency-exchange/order-complete', 'ConversionController@complete');
    Route::get('token-swap', 'TokenSwapController@index');
    Route::get('my-wallet', 'MyWalletController@index');
    Route::get('purchase-gwx-tokens', 'PurchaseGWXController@index');
    Route::get('two-factor-authentication', 'TwoFactorController@index');
    Route::get('raffle', 'RaffleController@index');
    Route::get('history', 'HistoryController@index');
    Route::get('playing-history', 'PlayingHistoryController@index');
    Route::get('my-credit-cards', 'MyCreditCardsController@index');
    Route::get('add-credit-card', 'MyCreditCardsController@addCreditCard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
