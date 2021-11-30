<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SekolahController extends Controller
{
    function index() {
        $data = Sekolah::all();
        return view('index', ['gambar' => $data]);
      }
    function daftar() {
        $data = Sekolah::toBase()->get('npsn');
        $anu = 'aaa';
        $data->each(function ($item) use (&$anu) {
            $anu .= "\n$item->npsn";
        });
        return $anu;
    }
    function npsn($npsn) {
        $data = Sekolah::find($npsn);
        return view('index', $data);
    }
    function produk($id) {
        $data = Sekolah::find($id);
        return view('produk', $data);
      }
}
