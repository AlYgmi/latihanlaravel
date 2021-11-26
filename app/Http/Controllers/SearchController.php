<?php

namespace App\Http\Controllers;

use Session;
use App\view;
use App\Sekolah;
use App\TestModel;
use App\Http\Requests;
use Validator, Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

class SearchController extends Controller
{
  public function find()
  {	
    return view('cari');			
  }		
  public function findSearch()
  {			
    $search = Input::get ( "cari" );		
    $test = TestModel::where ( 'nama', 'LIKE', '%' . $search . '%' )->orWhere ( 'email', 'LIKE', '%' . $search . '%' )->get ();
    if (count ( $test ) > 0)
      return view ( 'cari' )->withDetails ( $test )->withQuery ( $search );
    else
      return view ( 'cari' )->withMessage ( 'No Details found. Try to search again !' );		
  }
  public function index()
  {
    $sekolah = Sekolah::table('sekolah') -> paginate(10);
    return view('index',['sekolah' => $sekolah]);
  }
  public function cari(Request $request)
  {
    $cari = $request->cari;
    $sekolah = Sekolah::table('sekolah')
    ->where('nama','Like',"%".$cari."%")
    ->paginate();
    return view('cari',['nama' => $nama]);
  }
}
