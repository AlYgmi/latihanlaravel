@extends('layouts.main')

@section('container')
    

    

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <h2 class="title">Daftar Sekolah Seluruh Indonesia</h2>
            <p>
                 <span class="font-weight-bold font-weight-bolder">
                    <span class="pager">34</span>
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
          <ul class="list-unstyled list-sekolah"                                                                 >
            @foreach($gambar as $skl)
            <div class="text-center">
            <li data-toggle="tooltip" data-placement="top" title="{{ $skl->nama }}" data-original-title="SMAS PASUNDAN GARUT">
              <a href="/sekolah/{{ $skl->npsn }}"><img width="30px" src="{{ $skl->gambar }}" class="img-fluid" alt="{{ $skl->nama }}"></a>
            </li>
            </div>
            @endforeach
          </ul>
      </div>

    
@endsection