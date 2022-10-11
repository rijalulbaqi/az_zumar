      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
    

      {{-- header hero --}}
      <div class="container-fluid heroProfilYayasan">
        <div class="row">
          <div class="col px-0">
            <img src="{{ url('dashboard/img/profil/'.$profilSMP->foto_profil) }}" class="img-fluid mb-2 " alt="...">
          </div>
        </div>
      </div>

      {{-- Profil Yayasan --}}
      <div class="container card-profil-yayasan mt-5">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>{{ $profilSMP->lembaga }}</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">
                <p class="card-text ml">{!! $profilSMP->isi_profil !!} </p>
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
                <h2>Struktur SMP</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4 d-flex justify-content-center">
                <img src="{{ url('dashboard/img/struktur/'.$profilSMP->foto_struktur) }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    