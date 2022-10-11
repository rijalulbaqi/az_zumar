
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
          {{-- <div class="logoYayasan col-sm-12 col-lg-2 d-flex justify-content-center pb-4 pt-3">
            <img width="137px" src="{{ url('assets/images/logoYayasan.png') }}" alt="Logo_Yayasan_Pendidikan_Tahfidz_Az-Zumar">
            <div class="garisLogoYayasan d-none d-sm-block"></div>
          </div>
          
          <div class="col-sm-12 col-lg-6 label-logo logoYayasan d-flex align-items-center ">
            <div class="row">
              <div class="col d-flex align-items-center">
                <p class="namaYayasanAtas mb-0 p-0 ">YAYASAN PENDIDIKAN</p>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex align-items-center">
                <p class="namaYayasanBawah mb-0 mt-0 p-0">TAHFIDZ AZ-ZUMAR</p>
              </div>
            </div>
          </div>

            <div class="logoYayasanMedsos col-lg-4 d-flex align-items-center justify-content-end">

              <div class="row">
                <div class="col d-none d-sm-block">
                  <img width="33px" src="{{ url('assets/images/iconFB.png') }}" alt="">
                  <img width="33px" src="{{ url('assets/images/iconIG.png') }}" alt="">
                  <img width="33px" src="{{ url('assets/images/iconTW.png') }}" alt="">
                  <img width="33px"src="{{ url('assets/images/iconYT.png') }}" alt="">
                </div>
              </div>

            </div> --}}


            {{-- anyar --}}

            {{-- visible only on lg --}}
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-lg-2 d-flex justify-content-center align-items-center py-4 logoYayasan">
                  <img width="137px;" src="{{ url('assets/images/logoYayasan.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-lg-5 d-flex align-items-center justify-content-center p-0 logoYayasan">
                  <div class="garisLogo d-none d-sm-block"></div>
                  <div class="label-logo ">
                    <p class="namaAtas mb-0">YAYASAN PENDIDIKAN</p>
                    <p class="namaBawah mb-0">TAHFIDZ AZ-ZUMAR</p>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-5 d-flex align-items-center p-0 logoYayasan">
                  <div class="col d-none d-sm-block">
                    <table align="right">
                      <tr height="70">
                        <td colspan="2"></td>
                        <td colspan="2">
                            <img width="33px" src="{{ url('assets/images/iconFB.png') }}" alt="">
                            <img width="33px" src="{{ url('assets/images/iconIG.png') }}" alt="">
                            <img width="33px" src="{{ url('assets/images/iconTW.png') }}" alt="">
                            <img width="33px"src="{{ url('assets/images/iconYT.png') }}" alt="">
                        </td>  
                      </tr> 
                      <tr>
                        <td rowspan="2"><img src="{{ url('assets/images/emailHeader.png') }}" width="50" alt=""></td>
                        <td class="emailHeader">Email Us : </td>
                        <td rowspan="2" class="telpHeader"><img src="{{ url('assets/images/telpHeader.png') }}" width="50" alt=""></td>
                        <td class="telpHeaderAtas">Call Us : </td>
                      </tr>
                      <tr>
                        <td class="emailHeaderBawah">Ketika@gmail.com &nbsp;</td>
                        <td class="telpHeaderBawah">Telepon Saya</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            {{-- mobile --}}
            {{-- visible only on sm --}}
            {{-- <div class="container">
              <div class="row">
                <div class="col-sm-12 col-lg-7 d-flex align-items-center p-4 logoYayasan">

                  <img width="137px;" src="{{ url('assets/images/logoYayasan.png') }}" alt="" class="img-fluid">

                  <div class="garisLogo d-sm-none d-md-block"></div>

                  <div class="col-sm-12 label-logo">
                    <p class="namaAtas mb-0">YAYASAN a</p>
                    <p class="namaBawah mb-0">TAHFIDZ AZ-ZUMAR</p>
                  </div>
                </div>
              </div>
            </div> --}}
          
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
              <li class="nav-item dropdown mx-3">
                <a class="nav-link <?php echo ($active == 2) ? "active" : ""; ?>  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  PROFIL YAYASAN
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ url('/sejarahSingkat') }}">SEJARAH SINGKAT</a></li>
                  <li><a class="dropdown-item" href="{{ url('/sambutanKepala') }}">SAMBUTAN KEPALA</a></li>
                  <li><a class="dropdown-item" href="{{ url('/visiDanMisi') }}">VISI dan MISI</a></li>
                </ul>
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




   