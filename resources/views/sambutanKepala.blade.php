      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      
          {{-- header hero --}}
      <div class="container-fluid img-profil-yayasan heroProfilYayasan">
        <div class="row">
            <div class="col px-0">
                <img src="{{ url('dashboard/img/profil/'.$sambutan->foto_kepala) }}" class="img-fluid mb-2" alt="...">
            </div>
        </div>
      </div>

      {{-- Profil Yayasan --}}

      <div class="container card-profil-yayasan mt-5">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Sambutan Kepala</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">
                <h5>{{ $sambutan->nama_kepala }}</h5>
                <hr style="width:90px;">
                <p class="card-text">
                  {!! $sambutan->sambutan !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    