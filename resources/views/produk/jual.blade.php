@extends('layouts.main')

@section('container')
  <h2 class="title">Daftar Produk</h2>
    
@endsection

@section('contrast')
<div class="container">
<div class="row">
  <div class="card" style="width: 18rem;">
    <img src="{{ $produk[0]->gambar }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $nama }}</h5>
      <p class="card-text">{{ $deskripsi }}      
        <a href="{{ route('produk.show',$produk->id) }}" class="btn btn-primary">detail</a>
    </div>
  </div>
</div>
</div>


@endsection