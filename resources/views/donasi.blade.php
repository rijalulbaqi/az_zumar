      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      

      {{-- Donasi Keuangan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Donasi</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">

                <div class="row">
                  <div class="col d-flex justify-content-center mb-4">
                    <p style="text-align: center;"> <b>Mari Donasikan Sebagian Harta Anda untuk Sama-sama Membangun Yayasan Pendidikan Tahfidz Az-Zumar Ini Semakin Baik dan Maju.</b> </p>
                  </div>
                </div>

                <div class="row">
                   <div class="col">
                    {!! $donasi->deskripsi !!}
                  </div>
                </div>

                <div class="row">
                  <div class="col mt-4 d-flex justify-content-center text-center">
                    <p><b>Informasi Lebih Lanjut Mengenai Donasi Hubungi</b></p>
                  </div>
                </div>

                <div class="row">
                  <div class="col text-center">
                   <a href="https://wa.me/{{ $donasi->nomor_whatsapp }}" target="_blank"><button type="button" class="btn btn-success"> <img src="{{ url('assets/images/wa.png') }}" alt="" style="width: 20px; height:20px;"> Hubungi Via Whatsapp</button></a>
                  </div>
                </div>
                

              </div>
            </div>
          </div>
        </div>
      </div>


      
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    