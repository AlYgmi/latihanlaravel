<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
@include('layouts.header')


<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Blog start -->
    <div class="row">
      <div class="col-md-12"> 
        <div class="searchform rpp">
          <form action="#" method="get">
            <input type="hidden" name="school" value="{$school}">
            <div class="row">
              <div class="col-md-9 col-sm-9">
                <input type="text" name="searchberita" class="form-control" placeholder="Nama Berita" value="{$namasearchberita}">
              </div>
              <div class="col-md-3 col-sm-3">
                <button class="btn btn-block" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
          </form>
        </div>
        <!-- Blog List start -->
        <div class="blogWraper">
          <ul class="blogList">
            @foreach($data_list as $b)
            <li>
              <div class="row">
                <div class="col-md-5">
                  <div class="postimg"><img src="" alt="">
                    <div class="date"> {$b.tgl} {$b.bln}</div>
                  </div>
                </div> 
                <div class="col-md-7">
                  <div class="post-header">
                    <h4><a href="/berita/detail/">{$b.judul}</a></h4>
                    <div class="postmeta">Author : <span>{{ $author }}</span> Dari : <span>{{ $sekolah }}</span></div>
                  </div>  
                  <p>{$b.isis}...</p>
                  <a href="/berita/detail/" class="readmore">Selengkapnya</a> 
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="pagiWrap">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <ul class="pagination">
                @foreach($stringpage as $s)
                <li class="{$s.class}"><a href="{$s.link}">{$s.nama}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@include('layouts.libs')
</body>
</html>