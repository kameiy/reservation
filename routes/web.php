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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('stores', 'StoreController', ['only' => ['index', 'show', 'create', 'edit', 'store', 'update', 'destroy']]);

Route::get('stores/{store_id}/seats/create', 'SeatController@create');
Route::post('stores/{store_id}/seats', 'SeatController@store');
Route::delete('stores/{store_id}/seats/{seat}', 'SeatController@destroy');

Route::resource('reservations', 'ReservationController', ['only' => ['index', 'create', 'store', 'destroy']]);
// Route::get('reservations', 'ReservationController@index');
// Route::get('reservations/create', 'ReservationController@create');
// Route::post('reservations', 'ReservationController@store');
// Route::delete('reservations', 'ReservationController@destory');
