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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Clan
Route::get('/clan', 'ClanController@clans')->name('clan');
Route::post('/clan', 'ClanController@createClan')->name('clan');

// Shop

Route::get('/shop', 'ShopController@index')->name('shop');
Route::post('/shop', 'ShopController@buy')->name('shop');
Route::get('/shop/drones', 'ShopController@drones')->name('drones');
Route::post('/shop/drones', 'ShopController@buy')->name('drones');
