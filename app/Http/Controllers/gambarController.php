<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use App\Sekolah;

class gambarController extends Controller
{
    public function index(){
     $gambar = Gambar::All();
     

    return view('gambar',compact('gambar'));
    }

    public function getSekolah($npsn){
        $sekolah = Sekolah::find($npsn);

        return view('sekolah',compact('sekolah'));
    }
}
