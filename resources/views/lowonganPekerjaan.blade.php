      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      

      {{-- Laporan Keuangan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Lowongan Pekerjaan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body">

                @if( $lowonganPekerjaan->status == "Aktif" )
                    <div class="mb-3 row">
                    <label for="membutuhkan" class="col-sm-2 col-form-label">Membutuhkan</label>
                    <div class="col-sm-10">
                      <label for="membutuhkan" class="col-sm-2 col-form-label">: {{ $lowonganPekerjaan->membutuhkan }}</label>
                    </div>
                  
                    <label for="Kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                    <div class="col-sm-10">
                      <label for="Kriteria" class="col col-form-label">: {!! $lowonganPekerjaan->kriteria !!}</label>
                    </div>
                    
                    <label for="Kriteria" class="col-sm-2 col-form-label">Lebih lanjut</label>
                    <div class="col-sm-10">
                      
                      <label  for="Kriteria" class="col col-form-label">: <a href="https://wa.me/{{ $lowonganPekerjaan->nomor }}" target="_blank"><button type="button" class="btn btn-success"> <img src="{{ url('assets/images/wa.png') }}" alt="" style="width: 20px; height:20px;">Hubungi Via WhatsApp</button></a> </label>
                    </div>
                  </div>
                @else
                    <div class="row">
                      <div class="col">
                        <p class="text-center">Mohon maaf untuk saat ini masih belum di buka lowongan pekerjaan.</p>
                      </div>
                    </div>
                @endif
                
                  

              </div>

            </div>
          </div>
        </div>
      </div>


      
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    