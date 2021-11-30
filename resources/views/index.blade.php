<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    <section class="home-section">
        <div class="container">
          <div class="logo">
            <img src="{{ asset('images/logosekolahpedia.png') }}"/>
          </div>
          <div class="home-text">
            <h2 class="title">Daftar Sekolah Seluruh Indonesia</h2>
            <p class="desc">
              <span class="prov"><span>34</span> Provinsi</span> 
              <span class="kota"><span>514</span> Kota</span> 
              <span class="kec"><span>6675</span> Kecamatan</span> 
            </p>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="box-count">
                <a href="/school/sd">
                  <div class="icon">
                    <img src="{{ asset('images/icon/sd.png') }}"/>
                  </div>
                  <h3 class="title">SD/MI</h3>
                </a>
                <a href="/school/sd" class="btn btn-success"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box-count">
                <a href="/school/smp">
                  <div class="icon">
                    <img src="{{ asset('images/icon/smp.png') }}"/>
                  </div>
                  <h3 class="title">SMP/MTs</h3>
                </a>
                <a href="/school/smp" class="btn btn-success"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box-count">
                <a href="/school/sma">
                  <div class="icon">
                    <img src="{{ asset('images/icon/sma.png') }}"/>
                  </div>
                  <h3 class="title">SMA/MA</h3>
                </a>
                <a href="/school/sma" class="btn btn-success"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="box-count">
                <a href="/school/smk">
                  <div class="icon">
                    <img src="{{ asset('images/icon/smk.png') }}"/>
                  </div>
                  <h3 class="title">SMK/MAK</h3>
                </a>
                <a href="/school/smk" class="btn btn-success"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="container">
          <!-- title start -->
          <div class="titleTop">
            <h3>PPDB <span>Online</span></h3>
          </div>
          <!-- title end -->
          <ul class="employerList">
            @foreach($gambar as $skl)
            <li data-toggle="tooltip" data-placement="top" title="{{ $skl->nama }}" data-original-title="SMAS PASUNDAN Garut">
              <a href="/sekolah/{{ $skl->npsn }}"><img src="{{ $skl->gambar }}" alt="{{ $skl->nama }}" /></a>
            </li>
            {{-- <li data-toggle="tooltip" data-placement="top" title="{{ $skl->nama }}" data-original-title="SMAS PASUNDAN GARUT">
                <a href="/sekolah/{{ $skl->npsn }}"><img width="30px" src="{{ $skl->gambar }}" class="img-fluid" alt="{{ $skl->nama }}"></a>
              </li> --}}
            @endforeach  
          </ul>
        </div>
      </section>
      <!-- Featured Jobs start -->
      <section class="section whitebg produkhome">
        <div class="container"> 
          <!-- title start -->
          <div class="titleTop">
            <h3>Produk <span>Terbaru</span></h3>
            <a href="/produk" class="catlink">Lihat Semua Produk</a>
          </div>
          <!-- title end --> 
          
          <!--Featured Job start-->
          <ul class="jobslist row">
            <!--Job start-->
            <li class="col-md-6">
              <div class="jobint">
                <div class="row">
                  <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/b5887.jpg" alt="Lisensi Office A1 365" /></div>
                  <div class="col-md-7 col-sm-7">
                    <h4><a href="/produk/detail/">Lisensi Office A1 365</a></h4>
                    {{-- {$p.id}/{$p.alias} --}}
                    <div class="company"><a href="/detail">SMK ANGKASA 1 MARGAHAYU</a></div>
                    <div class="jobloc"><label class="fulltime">Productivity</label></div>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <div class="price">Rp. 50.000</div>
                    <a href="/produk/detail/" class="applybtn">Detail</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-md-6">
                <div class="jobint">
                  <div class="row">
                    <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/yvwkh.png" alt="Lisensi Mikrotik Level 4" /></div>
                    <div class="col-md-7 col-sm-7">
                      <h4><a href="/produk/detail/">Lisensi Mikrotik Level 4</a></h4>
                      {{-- {$p.id}/{$p.alias} --}}
                      <div class="company"><a href="/detail">SMK ANGKASA 1 MARGAHAYU</a></div>
                      <div class="jobloc"><label class="fulltime">Software</label></div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="price">Rp. 500.000</div>
                      <a href="/produk/detail/" class="applybtn">Detail</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6">
                <div class="jobint">
                  <div class="row">
                    <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/h6yvz.png" alt="MIKROTIK RB 941-2ND Haplite" /></div>
                    <div class="col-md-7 col-sm-7">
                      <h4><a href="/produk/detail/">MIKROTIK RB 941-2ND Haplite</a></h4>
                      {{-- {$p.id}/{$p.alias} --}}
                      <div class="company"><a href="/detail">SMK ANGKASA 1 MARGAHAYU</a></div>
                      <div class="jobloc"><label class="fulltime">Routers</label></div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="price">Rp. 400.000</div>
                      <a href="/produk/detail/" class="applybtn">Detail</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6">
                <div class="jobint">
                  <div class="row">
                    <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/c4pzz.png" alt="JASA SERVICE LAPTOP/PC dan HP" /></div>
                    <div class="col-md-7 col-sm-7">
                      <h4><a href="/produk/detail/">JASA SERVICE LAPTOP/PC dan HP</a></h4>
                      {{-- {$p.id}/{$p.alias} --}}
                      <div class="company"><a href="/detail">SMK SWASTA YAPIM SIAK HULU</a></div>
                      <div class="jobloc"><label class="fulltime">Service Product</label></div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="price">Rp. 50.000</div>
                      <a href="/produk/detail/" class="applybtn">Detail</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6">
                <div class="jobint">
                  <div class="row">
                    <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/tbsp4.jpeg" alt="Ulat jerman" /></div>
                    <div class="col-md-7 col-sm-7">
                      <h4><a href="/produk/detail/">Ulat Jerman</a></h4>
                      {{-- {$p.id}/{$p.alias} --}}
                      <div class="company"><a href="/detail">SMK SWASTA YAPIM SIAK HULU</a></div>
                      <div class="jobloc"><label class="fulltime">Food</label></div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="price">Rp. 70.000</div>
                      <a href="/produk/detail/" class="applybtn">Detail</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-6">
                <div class="jobint">
                  <div class="row">
                    <div class="col-md-2 col-sm-2"><img src="https://sekolahpedia.id/medias/produk/wxfx9.jpeg" alt="Talam Ubi Lumer" /></div>
                    <div class="col-md-7 col-sm-7">
                      <h4><a href="/produk/detail/">Talam Ubi Lumer</a></h4>
                      {{-- {$p.id}/{$p.alias} --}}
                      <div class="company"><a href="/detail">SMK SWASTA YAPIM SIAK HULU</a></div>
                      <div class="jobloc"><label class="fulltime">Bakeware</label></div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                      <div class="price">Rp. 8.000</div>
                      <a href="/produk/detail/" class="applybtn">Detail</a>
                    </div>
                  </div>
                </div>
              </li>
            <!--Job end--> 
          </ul>
        </div>
      </section>
      @include('layouts.footer')
      @include('layouts.limbs')
</body>
</html>