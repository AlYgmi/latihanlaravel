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
    <div class="home-text">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/gambar">sekolahpedia</a>
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
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <section class = "home-section">
        <div class="container-fluid">
        <div class="logo">
            <div class="mt">
            <img src="{{ asset('logosekolahpedia.png') }}" class="img-fluid">
          </div>
        </div>
        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.737779444483!2d107.57569391428724!3d-6.921917994998683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7fd19822a15%3A0xb4bce65879746fc!2sRumah%20Abu%20Nana%20Rohana!5e0!3m2!1sid!2sid!4v1637224368653!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div>
            @yield('container')
        </div>
        </div>
        <div class="texter">
          @yield('contrast')

      </div>
    

      </section>
      <footer class="footer mt-auto py-3 bg-dark">
      <div  class="text-center" >
        
          <span class="text-muted">
            Copyright © 2021 Apdit(Arphi Adit). All Rights Reserved.
          </span>
        </div>
      </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>