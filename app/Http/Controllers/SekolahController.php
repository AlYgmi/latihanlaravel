<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;

class SekolahController extends Controller
{
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
        return view('sekolah', $data);
    }
}
