<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SekolahController extends Controller
{
	function index()
	{
  		$gambar = Sekolah::all();
  		return view('index', ['gambar' => $gambar]);	
	}

	function daftar()
	{
		$data = Sekolah::toBase()->get('npsn');
		$anu = 'aaa';
		$data->each(function ($item) use (&$anu) {
			$anu .= "\n$item->npsn";
		});
		return $anu;
	}
	
	function npsn($npsn) 
	{
		$sekolah = Sekolah::find($npsn);
		$data_berita = array(
			array("author"=>"Adit", "alias" => "asjdkajsd", "gambar" => "kajsdkajksdjajksd", "sekolah" => "SMKN 12"),
		);
		$data_detail = array();
		$data_prov = array(
			"jawa barat"
		);

		return view('detail',compact('sekolah', 'data_berita', 'data_prov','data_detail'));	
	}

	function produk($id) {
		$data = Sekolah::find($id);
		return view('produk', $data);
	}

}
