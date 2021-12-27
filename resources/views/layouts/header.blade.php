<!-- Header start -->
<div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-12"> <a href="/" class="logo"><img src="{{ asset('images/logosekolahpedia.png') }}" alt="" /></a>
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-md-10 col-sm-12 col-xs-12">  
          <div class="searchform">
            <form action="/list" method="get">
              <div class="row">
                <div class="col-md-4">
                  <div class="searchprop">
                    <input type="text" class="form-control" placeholder="Kota" id="SearchProp" autocomplete="off" value="" />
                    <div class="searchpropcontent">
                      <div class="searchprophead">
                        <div class="searchkota">
                          @if($kanal ?? '')
                          <input type="hidden" name="jenis" value=""> 
                          @endif
                          <input type="hidden" name="KodeKota" id="KodeKota" value="">
                          <input type="text" placeholder="Kota (type min 3 words)" class="form-control" id="chooseguru" value="" autocomplete="off" />
                        </div>
                        <button type="button" id="CloseSearchProp">&times;</button>
                      </div>
                      <div class="searchpropbody" id="ChoosePropinsi">
                        <ul class="listprop">
                          @foreach($data_prov as $p)
                          <li data-id="">{{ $p }}</li>
                          @endforeach
                        </ul>
                      </div>
                      <div class="searchpropbody" id="ChooseKota" style="display: none;">
                        <ul class="listkota">
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Cari sekolah {{ $sekolah->jenjang }} disini..." name="search" value="search"/>
                </div>
                <div class="col-md-2">
                  <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- row end --> 
    </div>
    <!-- Header container end --> 
  </div>
  <!-- Header end --> 