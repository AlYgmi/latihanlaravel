<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'SekolahController@npsn')->where('npsn', '[0-9]+')->name('sekolah');


Route::get('/','SekolahController@index');

Route::get('/sekolah/{npsn}', 'SekolahController@npsn')->where('npsn', '[0-9]+')->name('sekolah');
Route::get('/sekolah/daftar', 'SekolahController@daftar');

Route::get('/gambar','HomeController@index');


// Route::get('/produk/{id}', 'ProdukController@produk')->where('id', '[0-9]+');
Route::get('/produk','ProdukController@produk');
Route::get('/detail','ProdukController@show');

Route::get('/daftar', 'DaftarController@detil');

Route::get('/sekolah','SearchController@index');
Route::get('/sekolah/cari','SearchController@cari');

Route::get('/news','BeritaController@index');

Route::get('/sekolah','SekolahController@detail');
