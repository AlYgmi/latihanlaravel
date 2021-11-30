<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://sekolahpedia.id/template/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Situs Pencarian Sekolah Terbaik di Indonesia | Sekolahpedia </title>
</head>
<body>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- --}}
                <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <div class="container-fluid">
                        <a href="/gambar">
                            <img src="logosekolahpedia.png" width="225px" height="65px">
                        </a> 
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/gambar">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " href="/produk">Produk</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Instansi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/daftar">SD/MI</a></li>
                              <li><a class="dropdown-item" href="/daftar">SMP/MTs</a></li>
                              <li><a class="dropdown-item" href="/daftar">SMA/MA</a></li>
                              <li><a class="dropdown-item" href="/daftar">SMK/MAK</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#"></a></li>
                            </ul>
                          </li>
                        
                        </ul>
                        <form action="/sekolah/cari" method="GET">
                          <input type="text" name="cari" placeholder="Cari Sekolah .." value="{{ old('cari') }}">
                          {{-- <input type="submit" value="CARI"> --}}
                          <button class="btn btn-outline-success" type="submit">search</button>
                         </form>
                      </div>
                    </div>
                  </nav>
                  <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <div class="mt">
                                    <h1>
                                        Berita Utama
                                    </h1>
                                </div>
                            </div> 
                            <div class="border border-3">
                              <div class="row">
                                <div class="col">
                                  <img src="" alt="">
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div> 
</body>
</html>