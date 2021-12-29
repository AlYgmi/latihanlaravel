<?php

namespace App\Http\Controllers;

use App\Data;
use App\Sekolah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JenjangController extends Controller
{
    function index() 
    {
        $data_count_prop = Data::find($data_count_prop);
        $data_berita = Data::find($data_news);
        $sekolah = Sekolah::all();
        return view("school", ["sekolah"=>$sekolah, "data_count_prop"=>$data_count_prop, "data_berita"=>$data_berita]);
    }
}
