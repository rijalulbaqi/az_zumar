      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      


      {{-- Laporan Keuangan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Jadwal Kegiatan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4 table-responsive">


                <table id="table_id" class="display table table-striped table-bordered data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kegiatan</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    @php $no=1; @endphp
                    <tbody>
                      @foreach($jadwal_list as $item)
                        <tr>
                            <td>{{ $no++; }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->kegiatan }}</td>
                            <td>{{ $item->deskripsi }}</td>
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

    