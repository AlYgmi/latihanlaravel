<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $gambar = Sekolah::toBase()->get();
        return view('gambar', compact('gambar'));
    }
}
