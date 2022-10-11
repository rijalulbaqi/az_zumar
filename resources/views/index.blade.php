      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          

      @if($lowonganPekerjaan->status=="Aktif")
      <!-- modal lowongan-->
      <div id="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Lowongan Pekerjaan</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3 row">
                    <label for="membutuhkan" class="col-sm-2 col-form-label">Membutuhkan</label>
                    <div class="col-sm-10">
                      <label for="membutuhkan" class="col-sm-2 col-form-label">: {{ $lowonganPekerjaan->membutuhkan }}</label>
                    </div>
                  
                    <label for="Kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                    <div class="col-sm-10">
                      <label for="Kriteria" class="col col-form-label">: {!! $lowonganPekerjaan->kriteria !!}</label>
                    </div>
                    
                    <label for="Kriteria" class="col-sm-2 col-form-label">Lebih lanjut</label>
                    <div class="col-sm-10">
                      
                      <label  for="Kriteria" class="col col-form-label">: <a href="https://wa.me/{{ $lowonganPekerjaan->nomor }}" target="_blank"><button type="button" class="btn btn-success"> <img src="{{ url('assets/images/wa.png') }}" alt="" style="width: 20px; height:20px;">Hubungi Via WhatsApp</button></a> </label>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      @else

      @endif

      {{-- Slider hero --}}
      <section class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              {{-- @foreach ($sliderHero as $item)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                  <img src="{{ url('dashboard/img/slider/'.$item->foto) }}" class="w-100" alt="...">
                </div>
              @endforeach --}}

              <?php $no = 1; ?>
              @foreach ($sliderHero as $item)
                <div class="carousel-item {{ ($no==1) ? 'active' : ''; }}" data-bs-interval="5000">
                  <img src="{{ url('dashboard/img/slider/'.$item->foto) }}" class="d-block w-100" alt="...">
                </div>
                <?php $no = 0; ?>
              @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

      </section>

      {{-- Info jenjang pendidikan --}}
      <section class="info-jenjang-pendidikan">
        <div class="container">

          <div class="row text-center">
            <div class="col d-flex justify-content-center">

              <div class="card-group mb-4">
                <div class="card jenjang-tk">
                <div class="card-body">
                  <h5 class="card-title"><b>TK</b></h5>
                    {{-- <span class="d-inline-block text-truncate">
                      {!! $profilTK->isi_profil !!} 
                    </span> --}}
                    
                    <p class="card-text">{!! Str::limit($profilTK->isi_profil, 100) !!}</p>
                  <a href="{{ url('/profilTK') }}" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
                </div>
              </div>

                <div class="card jenjang-sd">
                  <div class="card-body">
                    <h5 class="card-title"><b>SD</b></h5>

                    <p class="card-text">{!! Str::limit($profilSD->isi_profil, 100) !!}</p>
                    <a href="{{ url('/profilSD') }}" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
                  </div>
                </div>

                <div class="card jenjang-smp">
                  <div class="card-body">
                    <h5 class="card-title"><b>SMP</b></h5>
                    <p class="card-text">{!! Str::limit($profilSMP->isi_profil, 100) !!}</p>
                    <a href="{{ url('/profilSMP') }}" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
                  </div>
                </div>

                <div class="card jenjang-sma">
                  <div class="card-body">
                    <h5 class="card-title"><b>SMA</b></h5>
                    <p class="card-text">{!! Str::limit($profilSMA->isi_profil, 100) !!}</p>
                    <a href="{{ url('profilSMA') }}" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>
      </section>

      {{-- Info kegiatan --}}
      <section class="kegiatan">
        <div class="container">

          <div class="row justify-content-start">
            <div class="col-md-6">
              <h2 class="mt-5">Kegiatan</h2>
              <p>Kami akan selalu memberikan informasi-informasi terbaru terkait perkembangan kegiatan belajar mengajar,
                kegiatan sehari-hari serta dana yang masuk di Yayasan Pendidikan Tahfidz Az-Zumar.</p>
            </div>
          </div>

          <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($galeri_list as $item)
                        <div class="col-lg-4">
                          <div class="card h-100 card-item-foto">
                            <img src="{{ url('dashboard/img/foto/'.$item->foto) }}" class="card-img-top" alt="...">
                            <div class="card-body" style="background-color: #E6E6E6;">
                              <h5 class="card-title"><a href="{{ url('fotoKegiatan/read/'.$item->id) }}" style="text-decoration: none; color: black; ">{{ $item->judul }}</a></h5>
                              {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                            </div>
                            <div class="card-footer" style="background-color: #CECECE;">

                              <div class="d-flex bd-highlight">
                                <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                                <small class="text-muted p-2 bd-highlight">{{ $item->created_at }}</small>
                              </div>
                            </div>
                          </div>
                        </div>
                         @endforeach
          </div>


          <div class="row">
            <div class="col-lg-12 mt-5 text-center beritaSelengkapnya">
              <a href="{{ url('/fotoKegiatan') }}" class="btn btn-primary btnBeritaSelengkapnya"><b>Berita Selengkapnya</b></a>
            </div>
          </div>
        </div>

        </div>
      </section>


      {{-- Info statistik --}}
      <div class="container-fluid bgInfoData" style="background-image: url('assets/images/bgInfoStatistik.png');">
        <div class="container">
          <div class="row text-center py-5 justify-content-center">

            <div class="col-lg-4 align-items-center">
              <img src="{{ url('assets/images/iconSiswa.png') }}" alt="">
              
              <p class="infoDataSiswaJumlah">{{ $statistik->murid }}</p>
              <p class="infoDataSiswaKeterangan">Siswa - Siswi</p>
              <hr class="d-block d-sm-none" style="color:white;">
            </div>
            
            {{-- <div class="garisLogoStatistik align-items-center"></div> --}}

            <div class="col-lg-4 align-items-center">
              <div class="garisStat d-none d-sm-block"></div>
              <img src="{{ url('assets/images/iconGuru.png') }}" alt="">
              <p class="infoDataSiswaJumlah">{{ $statistik->guru }}</p>
              <p class="infoDataSiswaKeterangan">Guru & Tenaga Pendidik</p>
               <hr class="d-block d-sm-none" style="color:white;">
            </div>

            <div class="col-lg-4 align-items-center">
              <div class="garisStat d-none d-sm-block"></div>
              <img src="{{ url('assets/images/iconEkstra.png') }}" alt="">
              <p class="infoDataSiswaJumlah">{{ $statistik->ekstra }}</p>
              <p class="infoDataSiswaKeterangan">Ekstrakulikuler</p>
               <hr class="d-block d-sm-none" style="color:white;">
            </div>

          </div>
        </div>
      </div>

      

      <div class="indexFooter"></div>
     

      @include('footer')
      @endsection

 
