      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
    

      {{-- Laporan Keuangan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Laporan Keuangan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4 table-responsive">

                  <table id="table_id" class="table  display table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Uraian</th>
                              <th>Pemasukan</th>
                              <th>Pengeluaran</th>
                          </tr>
                      </thead>
                      <tbody>
  
                        @php
                          $no = 1;    
                        @endphp
                        @foreach ($laporanKeuangan as $item)
                          <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->tanggal }}</td>
                              <td>{{ $item->uraian }}</td>
                              <td>{{ $item->pemasukan }}</td>
                              <td>{{ $item->saldo }}</td>
                              
                          </tr>
                        @endforeach
  
                          
  
  
  
                      </tbody>
                  </table>
           


              </div>
            </div>
          </div>
        </div>
      </div>


      
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    