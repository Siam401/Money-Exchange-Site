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

Route::get('/moneyexchange','ResourceController@index')->name('resources.home');
Route::get('/moneyexchange/buy','ResourceController@buy')->name('resources.buy');
Route::get('/moneyexchange/sell','ResourceController@sell')->name('resources.sell');

