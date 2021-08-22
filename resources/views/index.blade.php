      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      


      {{-- Slider hero --}}
      <section class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ url('assets/images/sliderHero.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ url('assets/images/drumband.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ url('assets/images/sliderHero.png') }}" class="d-block w-100" alt="...">
            </div>
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
                  <p class="card-text">TK Az-Zumar adalah pendidikan tingkat anak usia dini serta dalam pendidikan ini
                    mengedepankan ceria, kreatif, aktif. Dalam ... </p>
                  <a href="#" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
                </div>
              </div>

              <div class="card jenjang-sd">
                <div class="card-body">
                  <h5 class="card-title"><b>SD</b></h5>
                  <p class="card-text">SD Az-Zumar adalah pendidikan tingkat anak usia dini serta dalam pendidikan ini
                    mengedepankan ceria, kreatif, aktif. Dalam ... </p>
                  <a href="#" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
                </div>
              </div>

              <div class="card jenjang-smp">
                <div class="card-body">
                  <h5 class="card-title"><b>SMP</b></h5>
                  <p class="card-text">SMP Az-Zumar adalah pendidikan tingkat anak usia dini serta dalam pendidikan ini
                    mengedepankan ceria, kreatif, aktif. Dalam ... </p>
                  <a href="#" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
                </div>
              </div>

              <div class="card jenjang-sma">
                <div class="card-body">
                  <h5 class="card-title"><b>SMA</b></h5>
                  <p class="card-text">SMA Az-Zumar adalah pendidikan tingkat anak usia dini serta dalam pendidikan ini
                    mengedepankan ceria, kreatif, aktif. Dalam ... </p>
                  <a href="#" class="btn btn-outline-light"><b>Baca Selengkapnya..</b></a>
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

          <div class="row mt-3 justify-content-center">
            <div class="card-group">
              <div class="card mx-1">
                <img src="{{ url('assets/images/1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Kegiatan rutin membaca surat al-waqiah bersama-sama setiap pagi</p>
                </div>
                <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
                        </div>
                      </div>
              </div>
              <div class="card mx-1">
                <img src="{{ url('assets/images/2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Do’a bersama dalam rangka meminta kemubersama dalam rangka meminta kemubersama dalam rangka meminta kemubersama dalam rangka meminta kemudahan UASBN kedepan</p>
                </div>
                <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
                        </div>
                      </div>
              </div>
              <div class="card mx-2">
                <img src="{{ url('assets/images/3.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Bakti sosial kepada warga sekitar oleh Siswa SMP Kelas 8 Az-Zumar</p>
                </div>
                <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
                        </div>
                      </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-lg-12 mt-5 text-center beritaSelengkapnya">
              <a href="" class="btn btn-primary btnBeritaSelengkapnya"><b>Berita Selengkapnya</b></a>
            </div>
          </div>
        </div>

        </div>
      </section>


      {{-- Info statistik --}}
      <div class="container-fluid bgInfoData" style="background-image: url('assets/images/bgInfoStatistik.png');">
        <div class="container">
          <div class="row text-center py-5">

            <div class="col-lg-4 align-items-center">
              <img src="{{ url('assets/images/iconSiswa.png') }}" alt="">
              <p class="infoDataSiswaJumlah">756</p>
              <p class="infoDataSiswaKeterangan">Siswa - Siswi</p>
            </div>


            <div class="col-lg-4 align-items-center">
              <img src="{{ url('assets/images/iconGuru.png') }}" alt="">
              <p class="infoDataSiswaJumlah">120</p>
              <p class="infoDataSiswaKeterangan">Guru & Tenaga Pendidik</p>
            </div>

            <div class="col-lg-4 align-items-center">
              <img src="{{ url('assets/images/iconEkstra.png') }}" alt="">
              <p class="infoDataSiswaJumlah">12</p>
              <p class="infoDataSiswaKeterangan">Ekstrakulikuler</p>
            </div>

          </div>
        </div>
      </div>

      {{-- Foto kegiatan --}}
      <div class="container-fluid">
        <div class="row">
          <div class="card-group d-flex justify-content-center" style="padding: 0px">
            <div class="col-lg-3">
              <div class="card card-foto-kegiatan">
                <img src="{{ url('assets/images/drumband.png') }}" class="img-fluid" alt="...">
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card card-foto-kegiatan" >
                <img src="{{ url('assets/images/meet.png') }}" class="img-fluid" alt="...">
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card card-foto-kegiatan" >
                <img src="{{ url('assets/images/makan.png') }}" class="img-fluid" alt="...">
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card card-foto-kegiatan" >
                <img src="{{ url('assets/images/nyanyi.png') }}" class="img-fluid" alt="...">
              </div>
            </div>

          </div>
          
        </div>
      </div>

      <div class="mt-5"></div>


      @include('footer')
      @endsection

 
