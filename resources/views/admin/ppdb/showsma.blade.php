@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Lihat Data
                    <a class="btn btn-sm btn-white btn-round float-right" style="color:black;" href="{{ url('sma') }}"><i class="material-icons">arrow_back</i> Kembali</a></h4>
                </div>
                <div class="card-body mt-3">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->namalengkap }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Panggilan</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->namapanggilan }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NISN</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->nisn }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->tempatlahir }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->tanggallahir }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->jeniskelamin }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->agama }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Anak Ke</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->anakke }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jumlah Saudara</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->jumlahsaudara }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->alamat }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nomor Telepon</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->nomortelepon }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Ayah</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->namaayah }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->tempatlahirayah }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->tanggallahirayah }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->agamaayah }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->pekerjaanayah }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->pendidikanayah }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Ibu</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->namaibu }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->tempatlahiribu }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->tanggallahiribu }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->agamaibu }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->pekerjaanibu }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $siswa->pendidikanibu }}">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @push('script')
      <script type="text/javascript">
        getdata();
        $('input[name="simpan"]').click(function(event) {
          event.preventDefault();
          var data=$('#form-tk').serialize();
          $.ajax({
            url: '{{ url("tambahtk") }}',
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
                url: '{{ url("datatk") }}',
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