      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      


      {{-- header hero --}}
      <div class="container-fluid img-profil-yayasan">
        
          <img src="{{ url('assets/images/profilYayasan.png') }}" class="img-fluid" alt="...">
        
      </div>

      {{-- Donasi Keuangan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Info Pendaftaran Peserta Didik Baru</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4 text-center">
                
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>


      
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    