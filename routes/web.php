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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function () {

    Route::get('/moneyexchange','ResourceController@index')->name('resources.home');
    Route::get('/moneyexchange/buy','ResourceController@buy')->name('resources.buy');
    Route::post('/moneyexchange/buy/store','BuyController@store')->name('buy.store');
    Route::get('/moneyexchange/sell','ResourceController@sell')->name('resources.sell');
    Route::post('/moneyexchange/buy/store','SellController@store')->name('sell.store');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
