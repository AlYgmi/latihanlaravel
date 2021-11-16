<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ProdukController extends Controller
{
    public function produk($id) {
        $produk = Produk::find($id);
        return view('produk.jual',compact('produk'));
      } 
    public function create()
{
    return view('blog.create');

}
    public function show(Produk $produk) {
        return view('produk.detail',compact('produk'));
    }

/**
* store
*
* @param  mixed $request
* @return void
*/

}
