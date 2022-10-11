      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      
          {{-- header hero --}}
      <div class="container-fluid img-profil-yayasan heroProfilYayasan">
        <div class="row">
            <div class="col px-0">
                <img src="{{ url('dashboard/img/profil/'.$visimisi->foto_sekolah) }}" class="img-fluid mb-2" alt="...">
            </div>
        </div>
      </div>

      {{-- Profil Yayasan --}}

      <div class="container card-profil-yayasan mt-5">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Visi dan Misi</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">

                <div class="row">
                  <div class="col d-flex justify-content-center">
                    <p style="margin-bottom: 0px;"> <b>Visi</b></p>
                  </div>
                </div>

                <div class="row">
                  <div class="col d-flex justify-content-center">
                    <hr style="width: 5%" class="hrVisiMisi">
                  </div>
                </div>

                <div class="row">
                  <div class="col mt-4">
                    {!! $visimisi->visi !!}
                  </div>
                </div>

                {{-- Misi --}}
                <div class="row">
                  <div class="col d-flex justify-content-center">
                    <p style="margin-bottom: 0px;"> <b>Misi</b></p>
                  </div>
                </div>

                <div class="row">
                  <div class="col d-flex justify-content-center">
                    <hr style="width: 5%" class="hrVisiMisi">
                  </div>
                </div>

                <div class="row">
                  <div class="col mt-4">
                    {!! $visimisi->misi !!}
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

    