<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ProdukController extends Controller
{
    public function produk() {
        // $produk = Produk::find($id);
        return view('produk.jual');
      } 
    public function create()
{
    return view('blog.create');

}
    public function show() {
        return view('produk.detail');
    }

/**
* store
*
* @param  mixed $request
* @return void
*/

}
