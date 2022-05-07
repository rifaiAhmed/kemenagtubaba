<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    {{-- css --}}
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>KEMENAG TUBABA | {{ $title }}</title>
  </head>
  <body style="padding-top: 0px !important; padding-bottom: 0px !important">
    @include('partials.navbar')
    @yield('container')    
      <!-- FOOTER -->
    <div class="container-fluid" style="background-color: #d7e202">
        <style>
          footer {
            display: flex;
          }

          @media only screen and (max-width: 600px) {
            footer {
              flex-direction: column;
            }
            .center, 
            ul.center li a {
              display: flex;
              justify-content: center;
            }
          }
        </style>
        <footer class="row py-5">
          <div class="col-lg">
            <a href="/login" class="d-flex justify-content-center align-items-center mb-3 link-dark text-decoration-none">
              <img src="images/logo.png" height="80" alt="">
            </a>
            <p class="text-muted text-center fst-italic">Jalan Jendral Sudirman No.30 Kecamatan Tumijajar, Kabupaten Tulang Bawang Barat, Lampung.</p>
          </div>
      
          <div class="col-lg">
      
          </div>
      
          <div class="col-lg">
            <h5 class="center">Media Sosial</h5>
            <ul class="nav flex-column center">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram <i class="bi bi-instagram"></i></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Youtube <i class="bi bi-youtube"></i></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twitter <i class="bi bi-twitter"></i></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook <i class="bi bi-facebook"></i></a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Whatsapp <i class="bi bi-whatsapp"></i></a></li>
            </ul>
          </div>
      
          <div class="col">
            <h5 class="center">Pintas Menu</h5>
            <ul class="nav flex-column center">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Visi Misi</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Profil</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aplikasi SEDAP</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E-MTQ</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">SEKJEND</a></li>
            </ul>
          </div>
      
          <div class="col-lg">
            <h5 class="center">Info Penting</h5>
            <ul class="nav flex-column center">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Berita Terbaru</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bimbingan Masyarakat</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Informasi Haji</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cek Keberangkatan Haji</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Informasi Waqaf</a></li>
            </ul>
          </div>
        </footer>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- <script src="js/script.js"></script> --}}
  </body>
</html>
