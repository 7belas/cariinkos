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

Route::get('/172410101106', 'AdminController@index')->name('home');

Route::get('/kirimemail','KosEmailController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profil', 'HomeController@profil')->name('profil');
Route::get('/isisaldo', 'HomeController@isisaldo')->name('isisaldo');

Route::post('/isisaldo/transfer','PaymentController@store');


Route::get('/pesanan', function () {
    return view('pesanan');
});
