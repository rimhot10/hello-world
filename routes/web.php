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
Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'HomeController@myCaptchapost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refresh_captcha')->name('refresh_captcha');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');


Auth::routes();
Route::get('/pengumuman','PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create','PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman','PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','PengumumanController@show')->name('pengumuman.show');


Auth::routes();
Route::get('/kategori_pengumuman','KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');


Auth::routes();
Route::get('/artikel','ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create','ArtikelController@create')->name('artikel.create');
Route::post('/artikel','ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}','ArtikelController@show')->name('artikel.show');

Auth::routes();
Route::get('/kategori_galeri','KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');


Auth::routes();
Route::get('/kategori_berita','KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita','KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');


Auth::routes();
Route::get('/galeri','GaleriController@index')->name('galeri.index');
Route::get('/galeri/create','GaleriController@create')->name('galeri.create');
Route::post('/galeri','GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}','GaleriController@show')->name('galeri.show');

Auth::routes();
Route::get('/berita','BeritaController@index')->name('berita.index');
Route::get('/berita/create','BeritaController@create')->name('berita.create');
Route::post('/berita','BeritaController@store')->name('berita.store');
Route::get('/berita/{id}','BeritaController@show')->name('berita.show');



