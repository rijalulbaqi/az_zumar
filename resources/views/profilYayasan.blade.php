      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      


      {{-- header hero --}}
      <div class="container-fluid img-profil-yayasan">
        
          <img src="{{ url('assets/images/profilYayasan.png') }}" class="img-fluid" alt="...">
        
      </div>

      {{-- Profil Yayasan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Profil Yayasan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">
                <p class="card-text">Yayasan Pendidikan Tahfidz Az-Zumar adalah yayasan yang menaungi lembaga pendidikan mulai Tk, Sd, Smp dan Sma. Dalam pendidikan yayasan ini menekankan untuk siswa dan siswinya minimal dapat menghafal surat pendek dalam Al-Qur’an. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      {{-- Struktur Yayasan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Struktur Yayasan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4 d-flex justify-content-center">
                <img src="{{ url('assets/images/strukturYayasan.png') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    