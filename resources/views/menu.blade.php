
      {{-- Garis Warna Atas --}}
      <div class="container-fluid">
        <div class="row">
          <div class="garisWarnaAtas"></div>
          <br>
        </div>
      </div>


      {{-- Logo yayasan --}}
      <div class="container">
        <div class="row">
          <div class="logoYayasan col-lg-8 d-flex align-items-center pb-4 pt-3">
            <img width="137px" src="{{ url('assets/images/logoYayasan.png') }}" alt="Logo_Yayasan_Pendidikan_Tahfidz_Az-Zumar">
            <div class="garisLogoYayasan"></div>
            <div class="label-logo">
              <p class="namaYayasanAtas mb-0 p-0">YAYASAN PENDIDIKAN</p>
              <p class="namaYayasanBawah mb-0 mt-0 p-0">TAHFIDZ AZ-ZUMAR</p>
            </div>
          </div>

           

          <div class="logoYayasanMedsos col-lg-4 d-flex align-items-center justify-content-end">

            <div class="row">
              <div class="col">
                <img width="33px" src="{{ url('assets/images/iconFB.png') }}" alt="">
                <img width="33px" src="{{ url('assets/images/iconIG.png') }}" alt="">
                <img width="33px" src="{{ url('assets/images/iconTW.png') }}" alt="">
                <img width="33px"src="{{ url('assets/images/iconYT.png') }}" alt="">
              </div>
            </div>

          </div>
          
        </div>
      </div>

      {{-- GARIS ATAS NAVBAR --}}
      <div class="garisAtasNavbar position-relative"></div>
      
      {{-- Navbar --}}
      <nav class="navbar navbar-expand-lg navbar-dark text-light sticky-top">
        <div class="container">
          <!-- <a class="navbar-brand" href="#">Navbar</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item mx-3">
                <a class="nav-link <?php echo ($active == 1) ? "active" : ""; ?>" aria-current="page" href="{{ url('/') }}">BERANDA</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link <?php echo ($active == 2) ? "active" : ""; ?> " href="{{ url('/profilYayasan') }}">PROFIL YAYASAN</a>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link <?php echo ($active == 3) ? "active" : ""; ?>  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  LEMBAGA
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/profilTK') }}">TK</a></li>
                  <li><a class="dropdown-item" href="{{ url('/profilSD') }}">SD</a></li>
                  <li><a class="dropdown-item" href="{{ url('/profilSMP') }}">SMP</a></li>
                  <li><a class="dropdown-item" href="{{ url('/profilSMA') }}">SMA</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown  mx-3">
                <a class="nav-link <?php echo ($active == 4) ? "active" : ""; ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  GALERI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/fotoKegiatan') }}">Foto</a></li>
                  <li><a class="dropdown-item" href="{{ url('/videoKegiatan') }}">Video</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link <?php echo ($active == 5) ? "active" : ""; ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  KEUANGAN
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/laporanKeuangan') }}">LAPORAN KEUANGAN</a></li>
                  <li><a class="dropdown-item" href="{{ url('/donasi') }}">DONASI</a></li>
                </ul>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link <?php echo ($active == 6) ? "active" : ""; ?> " href="{{ url('/infoPPDB') }}">INFO PPDB</a>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link <?php echo ($active == 7) ? "active" : ""; ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  LAINNYA
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/jadwalKegiatan') }}">JADWAL KEGIATAN</a></li>
                  <li><a class="dropdown-item" href="{{ url('/lowonganPekerjaan') }}">LOWONGAN PEKERJAAN</a></li>
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>