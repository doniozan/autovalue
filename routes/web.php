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

Route::get('/','CarController@showIndex');

Route::get('/sell', function () {
    return view('sell');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/login','LoginController@login');
Route::post('/register','PelangganController@insert');
Route::get('/buy', 'CarController@show');
Route::get('/buy/detail/{id}', 'CarController@showWhereId');