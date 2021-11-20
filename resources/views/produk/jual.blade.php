@extends('layouts.main')

@section('container')
<div class="text-center">
  <h2 class="title">Daftar Produk</h2>
</div>    
@endsection

@section('contrast')
<div class="container">
<div class="row">
  <div class="mt">
  <div class="card" style="width: 18rem;">
    <img src="images.jpeg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Pengganti botol plastik</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos officia quibusdam, quos facilis consequatur magni aperiam perferendis tempora consectetur, reiciendis fugiat id atque nam placeat odio inventore rem quisquam quidem?      
      </p>
      <div class="text-center">
        <a href="/detail" class="btn btn-primary">detail</a>
    </div>
  </div>
  </div>
</div>
</div>
</div>


@endsection