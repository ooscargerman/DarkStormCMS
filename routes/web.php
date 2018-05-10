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
Route::get('/shop/equipment', 'ShopController@equipment')->name('equipmentshop');
Route::post('/shop/equipment', 'ShopController@buy')->name('equipmentshop');
Route::get('/shop/ammo', 'ShopController@ammo')->name('ammo');
Route::post('/shop/ammo', 'ShopController@buy')->name('ammo');
Route::get('/shop/designs', 'ShopController@designs')->name('designs');
Route::post('/shop/designs', 'ShopController@buy')->name('designs');
Route::get('/shop/extras', 'ShopController@extras')->name('extras');
Route::post('/shop/extras', 'ShopController@buy')->name('extras');
