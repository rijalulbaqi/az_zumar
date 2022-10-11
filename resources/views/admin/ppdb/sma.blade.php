@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">PPDB SMA
                    <button class="btn btn-sm btn-white btn-round float-right" data-toggle="modal" data-target="#tambah"><i class="material-icons">add</i> Tambah</button>
                    <a href="{{ url('sma/exportsma') }}" target="_blank" class="btn btn-sm btn-white btn-round float-right" style="color: grey;"><i class="material-icons">print</i> Cetak</a>
                  </h4>
                </div>
                <div class="card-body mt-3">
                  <table id="table_id" class="display table w-100">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Pendaftaran SMA</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card card-nav-tabs card-plain">
                      <div class="card-header card-header-success">
                          <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                          <div class="nav-tabs-navigation">
                              <div class="nav-tabs-wrapper">
                                  <ul class="nav nav-tabs" data-tabs="tabs">
                                      <li class="nav-item">
                                          <a class="nav-link active" href="#home" data-toggle="tab">Data Siswa</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#updates" data-toggle="tab">Data Orang Tua</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="card-body ">
                        <form method="post" class="form-data" id="form-sma">
                          <div class="tab-content text-center">
                              <div class="tab-pane active" id="home">
                                  <div class="form-group">
                                    <label for="namalengkap" class="control-label">Nama Lengkap</label>
                                    <input name="namalengkap" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="namapanggilan" class="control-label">Nama Panggilan</label>
                                    <input name="namapanggilan" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="nisn" class="control-label">NISN</label>
                                    <input name="nisn" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tempatlahir" class="control-label">Tempat Lahir</label>
                                    <input name="tempatlahir" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tanggallahir" class="control-label">Tanggal Lahir</label>
                                    <input name="tanggallahir" type="date" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="jeniskelamin" class="control-label float-left">Jenis Kelamin</label>
                                    <select class="form-control" name="jeniskelamin" data-style="btn btn-link" id="jeniskelamin">
                                      <option>Laki-Laki</option>
                                      <option>Perempuan</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="agama" class="control-label">Agama</label>
                                    <input name="agama" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="anakke" class="control-label">Anak Ke</label>
                                    <input name="anakke" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="jumlahsaudara" class="control-label">Jumlah Saudara</label>
                                    <input name="jumlahsaudara" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="alamat" class="control-label">Alamat</label>
                                    <input name="alamat" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="nomortelepon" class="control-label">Nomor Telepon</label>
                                    <input name="nomortelepon" type="text" class="form-control" required>
                                  </div>
                              </div>
                              <div class="tab-pane" id="updates">
                                  <div class="form-group">
                                    <label for="namaayah" class="control-label">Nama Ayah</label>
                                    <input name="namaayah" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tempatlahirayah" class="control-label">Tempat Lahir</label>
                                    <input name="tempatlahirayah" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tanggallahirayah" class="control-label">Tanggal Lahir</label>
                                    <input name="tanggallahirayah" type="date" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="agamaayah" class="control-label">Agama</label>
                                    <input name="agamaayah" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="pekerjaanayah" class="control-label">Pekerjaan</label>
                                    <input name="pekerjaanayah" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="pendidikanayah" class="control-label">Pendidikan Terakhir</label>
                                    <input name="pendidikanayah" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="namaibu" class="control-label">Nama Ibu</label>
                                    <input name="namaibu" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tempatlahiribu" class="control-label">Tempat Lahir</label>
                                    <input name="tempatlahiribu" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="tanggallahiribu" class="control-label">Tanggal Lahir</label>
                                    <input name="tanggallahiribu" type="date" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="agamaibu" class="control-label">Agama</label>
                                    <input name="agamaibu" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="pekerjaanibu" class="control-label">Pekerjaan</label>
                                    <input name="pekerjaanibu" type="text" class="form-control" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="pendidikanibu" class="control-label">Pendidikan Terakhir</label>
                                    <input name="pendidikanibu" type="text" class="form-control" required>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input name="simpan" type="submit" class="btn btn-success" value="Simpan">
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
      @push('script')
      <script type="text/javascript">
        getdata();
        $('input[name="simpan"]').click(function(event) {
          event.preventDefault();
          var data=$('#form-sma').serialize();
          $.ajax({
            url: '{{ url("tambahsma") }}',
            type: 'POST',
            dataType: 'json',
            data: data,
          })
          .done(function(data) {
            if(data==1){
              $('#table_id').DataTable().destroy();
              getdata();
              $('#tambah').modal('hide');
              Swal.fire(
                'Data Berhasil Ditambah!',
                'Kamu telah menambah data!',
                'success'
              )
            }
            if(data==2){
              $('#tambah').modal('hide');
              Swal.fire({
                icon: 'error',
                title: 'Mohon Maaf!',
                text: 'Data atas nama tersebut sudah terdaftar!'
              })
            }
            if(data==0){
              $('#tambah').modal('hide');
              Swal.fire({
                icon: 'error',
                title: 'Mohon Maaf!',
                text: 'Anda gagal menginput data!'
              })
            }
          });
        });

        $(document).on('click', '.delete', function(event) {
          event.preventDefault();
          var url=$(this).attr('href');
          Swal.fire({
            title: 'Yakin ingin menghapus data?',
            text: "Kamu tidak akan bisa mengembalikan data yang telah dihapus",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
          }).then((result) => {

            if (result.isConfirmed) {
              
              $.ajax({
                url: url,
                type: 'post',
                dataType: 'json',
              })
              .done(function(data) {
                Swal.fire(
                  'Data Berhasil disimpan!',
                  'Kamu telah memilih menghapus!',
                  'success'
                )
              }) 
              $('#table_id').DataTable().destroy();
              getdata();             
            }
          })
        });

        function getdata() {  
          $('#table_id').DataTable({
            processing: true,
            serverSide: true,
            
            ajax: {
                url: '{{ url("datasma") }}',
            },
             rowReorder: {
                selector: 'td:nth-child(2)'
            },

            responsive: true,
            columns: [
                    {
                            "data": 'DT_RowIndex',
                            orderable: false, 
                            searchable: false
                        },
                    {data: 'namalengkap', name: 'namalengkap'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    
                ],
                
        });

        }
      </script>
      @endpush
@include('admin.footer')
@endsection