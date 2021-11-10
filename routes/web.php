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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sekolah/20227447','gambarController@getSekolah');

Route::get('/gambar','gambarController@index');


Route::get('/produk', function ($id) {
    return view('jual', [
        "image" => "logosekolahpedia.png",
        "title" => "jual"
    ]);
});
