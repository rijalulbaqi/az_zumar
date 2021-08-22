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
                <h2>Donasi Keuangan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4 text-center">
                <p>Klik tombol di bawah ini untuk melakukan donasi</p>
                <button type="button" class="btn btn-secondary">Saya mau donasi</button>
                

              </div>
            </div>
          </div>
        </div>
      </div>


      
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    