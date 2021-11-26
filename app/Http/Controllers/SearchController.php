<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TestModel;
use App\view;
use Illuminate\Support\Facades\Route;
use Validator, Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Input;

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
}
