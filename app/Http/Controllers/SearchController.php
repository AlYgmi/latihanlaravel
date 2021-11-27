<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class SearchController extends Controller
{
  public function index()
  {
    $sekolah = DB::table('sekolah')->paginate(10);
    return view('cari',['sekolah' => $sekolah]);
  }
  public function cari(Request $request)
  {
    $cari = $request->cari;
    $sekolah = DB::table('sekolah')
    ->where('nama','LIKE','%'.$cari.'%')
    ->paginate();
    return view('cari',['sekolah' => $sekolah]);
  }
}
