@extends('templates.main')

@section('container')
  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="background-image: url('images/gedung.jpg'); background-size: cover;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
    
            <div class="container">
              <div class="carousel-caption text-start my-auto">
                <h1 class="fs-bolder" style="color: #198754">INFO TERKINI</h1>
                <h1>Example headline.</h1>
                <p>Some representative placeholder content for the first slide of the carousel.</p>
                <p><a class="btn btn-lg btn-success" href="#">Lihat Info</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
    
            <div class="container">
              <div class="carousel-caption my-auto">
                <h1 class="fs-bolder" style="color: #198754">INFO TERKINI</h1>
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-success" href="#">Lihat Info</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
    
            <div class="container">
              <div class="carousel-caption text-end my-auto">
                <h1 class="fs-bolder" style="color: #198754">INFO TERKINI</h1>
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-success" href="#">Lihat Info</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
    
      <div class="container marketing">
        <!-- START THE FEATURETTES -->
    
        <hr class="featurette-divider">

        <h3 class="pb-4 mb-4 fst-italic text-center text-success">
          Berita Terpopuler
        </h3>

        <div class="row">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">#KEMENAGRI</strong>
                <h4 class="card-text mb-0">Dharma Wanita Persatuan Kemenag Tubaba Gelar Rakor dan Pembentukan Pengurus Baru</h4>
                <div class="mb-1 text-muted">November 12</div>
                <a href="#" class="stretched-link">Lanjut Baca</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="images/momi.png" width="200" height="250">
      
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">#KEMENAGTUBABA</strong>
                <h4 class="card-text mb-0">Penyuluh Agama Hindu Kab. Tubaba Sampaikan Pengantar Dharma Wacana</h4>
                <div class="mb-1 text-muted">November 11</div>
                <a href="#" class="stretched-link">Lanjut Baca</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="images/hindu.png" width="200" height="250">
              </div>
            </div>
          </div>
        </div>

        <hr class="featurette-divider my-5 mx-0">
    
        <div class="row featurette">
          <div class="col-md-7">
            <p class="h3 fw-bolder text-success">BERITA UTAMA</p>
            <p class="featurette-heading">Rakerwil Tahun 2022 <span class="text-muted fs-3">Kankemenag Tubaba Raih Terbaik II Satker Pengelola Ortala Tk. Prov. Lampung.</span></p>
            <p><a class="btn btn-lg btn-success" href="#">Lihat Info</a></p>
          </div>
          <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto rounded" src="images/Berita-Maret-4.png" height="500">
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
    </div><!-- /.container -->
    
    
  </main>
@endsection
