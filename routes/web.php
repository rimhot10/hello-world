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

Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');











Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); 
Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'HomeController@myCaptchapost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refresh_captcha')->name('refresh_captcha');