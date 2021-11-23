@extends('layouts.main')

@section('container')
<div class="text-center">
  <h2 class="title">Detail Produk</h2>
</div> 
    
@endsection

@section('contrast')
  <div class="container">
    <div class="mt">
      <div class="row">
        
        <div class="col mt-4">
          
          <img src="images.jpeg" alt="">
        </div>
      <div class="col mt-4">
        <h3>Pengganti Botol Plastik</h3>
    <table class="table table-striped mt-4">
      <th>Harga</th>
      <td>:</td>
      <td>400.000</td>
      <tr>
       <th>Asal</th>
        <td>:</td>
        <td>SMKN 13 Bandung</td> 
      </tr>
      <tr>
        <th>Deskripsi</th>
        <td>:</td>
        <td>bosan dengan botol plastik yang tidak efisien?
          memperkenalkan botol pengganti plastik
          mengandung 100% kaca 
        </td>
      </tr>
    </table>
    <div class="border border-5 mt-5 pb-3 pt-3 aa">
          
    </div>
      </div>
        </div>
        <div class="text-center mt">
        <a href="/produk">kembali ke produk</a>
    </div>
  </div>
</div>  
@endsection