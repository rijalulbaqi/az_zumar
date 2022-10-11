      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      
          {{-- header hero --}}
      <div class="container-fluid img-profil-yayasan">
        <div class="row">
            <div class="col px-0" align="center">
                <img width="75%" src="{{ url('dashboard/img/foto/'.$read->foto) }}" class="img-fluid mb-2" alt="...">
            </div>
        </div>
      </div>

      {{-- Profil Yayasan --}}

      <div class="container card-profil-yayasan mt-5">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Baca Kegiatan</h2>
                <p>{{ $read->created_at }}</p>
              </div>
              <div class="card-body my-4">
                <h5>{{ $read->judul }}</h5>
                <hr style="width:90px;">
                <p class="card-text">
                  {!! $read->deskripsi !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
     
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    