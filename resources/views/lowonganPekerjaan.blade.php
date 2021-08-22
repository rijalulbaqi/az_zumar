      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      


      {{-- header hero --}}
      <div class="container-fluid img-profil-yayasan">
        
          <img src="{{ url('assets/images/profilYayasan.png') }}" class="img-fluid" alt="...">
        
      </div>

      {{-- Laporan Keuangan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Lowongan Pekerjaan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">
                <div class="card">
                    <div class="card-header">
                        Dibutuhkan
                    </div>
                    <div class="card-body">
                        <p class="card-text">Posisi : Guru SD </p>
                        <p class="card-text">Kriteria : Sehat </p>
                        <a href="#" class="btn btn-secondary">Ajukan Permohonan Kerja</a>
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

    