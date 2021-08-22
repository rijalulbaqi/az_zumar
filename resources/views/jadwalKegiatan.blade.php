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
                <h2>Jadwal Kegiatan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">


                <table id="table_id" class="display table table-striped table-bordered data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>22-8-2021</td>
                            <td>Baksos</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>22-8-2021</td>
                            <td>Baksos</td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>22-8-2021</td>
                            <td>Baksos</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>22-8-2021</td>
                            <td>Baksos</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>22-8-2021</td>
                            <td>Baksos</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>22-8-2021</td>
                            <td>Baksos</td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>22-8-2021</td>
                            <td>Baksos</td>
                        </tr>

                       

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

    