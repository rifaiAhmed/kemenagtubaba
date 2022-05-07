
    {{-- nav --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <img src="{{ asset('images/logo-kemenag.png') }}" alt="logo" height="100">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="font-size: 12px;">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" aria-current="page" href="/">HOME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ ($title === "PROFIL" || $title === "SEJARAH" || $title === "VISI MISI" || $title === "STRUKTUR ORGANISASI") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PROFIL
                </a>
                <ul class="dropdown-menu" style="font-size: 12px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                  <li><a class="dropdown-item" href="visi-misi">Visi Misi</a></li>
                  <li><a class="dropdown-item" href="/struktur">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="/profil">Profil</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">SEKJEND</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PENDIDIKAN ISLAM
                </a>
                <ul class="dropdown-menu" style="font-size: 12px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">EMIS</a></li>
                  <li><a class="dropdown-item" href="#">SIMPATIKA</a></li>
                  <li><a class="dropdown-item" href="#">BEASISWA</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  BIMAS ISLAM
                </a>
                <ul class="dropdown-menu" style="font-size: 12px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Informasi Waqaf</a></li>
                  <li><a class="dropdown-item" href="#">Konsultasi Syariah</a></li>
                  <li><a class="dropdown-item" href="#">E-MTQ</a></li>
                  <li><a class="dropdown-item" href="#">Kepenghuluan</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PENY HAJI DAN UMROH
                </a>
                <ul class="dropdown-menu" style="font-size: 12px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Informasi Haji</a></li>
                  <li><a class="dropdown-item" href="#">Cek Keberangkatan Haji</a></li>
                  <li><a class="dropdown-item" href="#">SISKO PATUH</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">BIMAS KATOLIK</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  LAYANAN
                </a>
                <ul class="dropdown-menu" style="font-size: 12px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">PTSP KEMENAG TBB</a></li>
                  <li><a class="dropdown-item" href="#">Aplikasi SEDAP</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PPID
                </a>
                <ul class="dropdown-menu" style="font-size: 12px;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Struktur PPID</a></li>
                  <li><a class="dropdown-item" href="#">Maklumat PPID</a></li>
                  <li><a class="dropdown-item" href="#">Pengaduan</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">INFO PENTING</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>