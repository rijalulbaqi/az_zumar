      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      

      {{-- Informasi Pendaftaran Peserta Didik Baru --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Informasi Pendaftaran Peserta Didik Baru</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body text-center">

                <h1>Selamat, Anda Berhasil mendaftar.</h1>
                <h2>Tunggu Info Selanjutnya ya:)</h2>
                  <a href="{{ url('infoPPDB') }}" class="btn btn-primary">Kembali</a>
              </div>

            </div>
          </div>
        </div>
      </div>


      
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    