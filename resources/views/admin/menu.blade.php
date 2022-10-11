<div class="sidebar" data-color="green" data-background-color="white" data-image="dashboard/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="{{ url('/home') }}" class="simple-text logo-normal">
          <img src="{{ url('dashboard/img/favicon.png') }}" width="60"><br>
          <font style="color: black;">Yayasan Az-Zumar</font>
        </a></div>

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php echo ($active == 1) ? "active" : ""; ?>">
            <a class="nav-link" href="{{ url('/home') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item custom-dropdown <?php echo ($active == 2) ? "active" : ""; ?>">
            <a class="nav-link" href="#">
              <i class="material-icons">corporate_fare</i>Organisasi <div class="float-right icon"><i class="fa fa-chevron-right"></i></div>
            </a>
            <ul class="drop-content">
              <li><a class="dropdown-item" href="{{ url('/profil_organisasi') }}">Profil</a></li>
              <li><a class="dropdown-item" href="{{ url('/struktur_organisasi') }}">Struktur</a></li>
              <li><a class="dropdown-item" href="{{ url('/sambutan') }}">Sambutan Kepala</a></li>
              <li><a class="dropdown-item" href="{{ url('/visimisi') }}">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="{{ url('/statistik') }}">Statistik</a></li>
            </ul>
          </li>
          <li class="nav-item <?php echo ($active == 3) ? "active" : ""; ?>">
            <a class="nav-link" href="{{ url('/jadwal_kegiatan') }}">
              <i class="material-icons">schedule</i>
              <p>Jadwal Kegiatan</p>
            </a>
          </li>
          <li class="nav-item custom-dropdown <?php echo ($active == 4) ? "active" : ""; ?>">
            <a class="nav-link" href="#">
              <i class="material-icons">perm_media</i>Galeri <div class="float-right icon"><i class="fa fa-chevron-right"></i></div>
            </a>
            <ul class="drop-content">
              <li><a class="dropdown-item" href="{{ url('/foto') }}">Foto</a></li>
              <li><a class="dropdown-item" href="{{ url('/video') }}">Video</a></li>
              <li><a class="dropdown-item" href="{{ url('/slide_foto') }}">Slide Foto</a></li>
            </ul>
          </li>
          <li class="nav-item custom-dropdown <?php echo ($active == 5) ? "active" : ""; ?>">
            <a class="nav-link" href="#">
              <i class="material-icons">list_alt</i>PPDB <div class="float-right icon"><i class="fa fa-chevron-right"></i></div>
            </a>
            <ul class="drop-content">
              <li><a class="dropdown-item" href="{{ url('/syarat') }}">Syarat Pendaftaran</a></li>
              <li><a class="dropdown-item" href="{{ url('/tk') }}">TK</a></li>
              <li><a class="dropdown-item" href="{{ url('/sd') }}">SD</a></li>
              <li><a class="dropdown-item" href="{{ url('/smp') }}">SMP</a></li>
              <li><a class="dropdown-item" href="{{ url('/sma') }}">SMA</a></li>
            </ul>
          </li>
          <li class="nav-item custom-dropdown <?php echo ($active == 6) ? "active" : ""; ?>">
            <a class="nav-link" href="#">
              <i class="material-icons">paid</i>Keuangan <div class="float-right icon"><i class="fa fa-chevron-right"></i></div>
            </a>
            <ul class="drop-content">
              <li><a class="dropdown-item" href="{{ url('/laporan_keuangan') }}">Laporan</a></li>
              <li><a class="dropdown-item" href="{{ url('/ddonasi') }}">Donasi</a></li>
            </ul>
          </li> 
          <li class="nav-item <?php echo ($active == 7) ? "active" : ""; ?>">
            <a class="nav-link" href="{{ url('/lowongan_kerja') }}">
              <i class="material-icons">notifications</i>
              <p>Lowongan Kerja</p>
            </a>
          </li>
          <li class="nav-item <?php echo ($active == 8) ? "active" : ""; ?>">
            <a class="nav-link" href="{{ url('ubahpassword') }}">
              <i class="material-icons">password</i>
              <p>Ubah Password</p>
            </a>
          </li>
          <li class="nav-item ">
            <form method="POST" action="{{ route('logout') }}">
            @csrf                                                
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
              <i class="material-icons">logout</i>
              </form>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>