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
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
          <img src="images.jpeg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="botolkaca.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-50" alt="...">
        </div>

      </div>
          </div>
      </div>
      </div>
    </div>
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
    <h3>Hubungi nomor dibawah </h3>
    <div class="border border-5 mt-3 pb-3 pt-3 aa">
      <div class="row">
        <div class="col">
          <div class="container">
            <h3>via Whatsapp</h3>
            +62923847923740
          </div>
          </div>
          <div class="col mt-3">
            <a href="web.whatsapp.com">hubungi sekarang!</a>
          </div>
          </div>
        </div>
    </div>
      </div>
        </div>
        <div class="text-center mt">
        <a href="/produk">kembali ke produk</a>
    </div>
  </div>
</div>  
@endsection