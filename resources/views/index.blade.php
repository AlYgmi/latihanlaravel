@extends('layouts.main')

@section('container')
    

    

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <h2 class="title">Daftar Sekolah Seluruh Indonesia</h2>
            <p>
                 <span class="font-weight-bold font-weight-bolder">
                    <h1 class="pager">34</h1>
                    Provinsi
                </span>
            <span class="font-weight-bold font-weight-bolder">
                <span class="text-page">513</span>
            Kota
            </span>
           <span>
               <span class="kec">6675</span>
               Kecamatan
           </span>
        </p> 

        

        @endsection    

@section('contrast')
        <div class="text-center">
            <h1>
                PPDB Online
            </h1>
        </div>  
        <div class="container">
          <ul class="list-unstyled list-sekolah">
              <li>
                  <a href="#">
                      <img src="https://sekolahpedia.id/template/images/logodefault.jpg">
                  </a>
              </li>