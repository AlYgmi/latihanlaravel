<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class SearchController extends Controller
{
    public function index(Request $request) {
        $query = $request->get('search');
        $produk = Produk::where('nama', 'LIKE', "%$query%")->get();
        return dd($produk);
      }  
      
}
