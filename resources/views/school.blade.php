<!DOCTYPE html>
<html lang="en">
  @include('layouts.head')

  <body>
    @include('layouts.header')

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlQWpNpKPZT0Nbo8VoQE6py5eO8VZeFYg"></script>
    <div id="maps"></div>
    <!-- End Map /#maps -->

    <div class="section-count">
      <div class="container">
        <div class="main-heading">
          Total SMK Terdaftar
          <span class="count">1.456</span> Sekolah
        </div>
        <div class="whatText">
          Berikut adalah daftar jumlah sekolah berdasarkan provinsi
        </div>
        <div class="owl-box owl-carousel owl-theme">
          @foreach($data_count_prop as $p)
          <div class="box-item-count">
            <div class="count">
              <span class="num">{{ $p->jumlah }}</span>
              <span class="text">Sekolah</span>
            </div>
            <div class="title">{{ $p->nama }}</div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="listpgWraper listhome">
      <div class="container">
        <div class="titleTop">
          <h3>Berita <span>Terbaru</span></h3>
        </div>
        <!-- Blog List start -->
        <div class="blogWraper">
          <ul class="blogList">
            @foreach($data_berita as $b)
            <li>
              <div class="row">
                <div class="col-md-5">
                  <div class="postimg">
                    <img src="" alt="" />
                    <div class="date">{{ $b->tgl }} {{ $b->bln }}</div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="post-header">
                    <h4>
                      <a href="/berita/detail"
                        >{{ $b->judul }}</a
                      >
                    </h4>
                    <div class="postmeta">
                      Author : <span>{{ $b->author }}</span> Dari :
                      <span>{{ $b->nama }}</span>
                    </div>
                  </div>
                  <p>{{ $b->isi }}...</p>
                  <a
                    href="/berita/detail"
                    class="readmore"
                    >Selengkapnya</a
                  >
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="text-center">
          <a href="/berita" class="btn btn-lg btn-primary"
            >Lihat Semua Berita</a
          >
        </div>
      </div>
    </div>

    @include('layouts.footer') 
    @include('layouts.limbs')
    <script src="{{ asset('js/jquery.goMap.min.js') }}"></script>
    <script src="{{ asset('js/markerclusterer.js') }}"></script>
    <script type="text/javascript">
      $('#maps').load('/maps');
    </script>
  </body>
</html>
