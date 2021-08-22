@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Jadwal Kegiatan 
                    <button class="btn btn-sm btn-white btn-round float-right" data-toggle="modal" data-target="#tambah"><i class="material-icons">add</i> Tambah</button></h4>
                </div>
                <div class="card-body mt-3">
                  <table id="table_id" class="display table w-100">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Tanggal</th>
                              <th>Kegiatan</th>
                              <th>Deskripsi</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                </div>
              </div>
              <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" class="form-data" id="form-jadwal">
                        <div class="form-group">
                        <label for="tanggal" class="control-label">Tanggal</label>
                        <input name="tanggal" type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="kegiatan" class="control-label">Kegiatan</label>
                        <input name="kegiatan" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="deskripsi" class="control-label">Deskripsi</label>
                        <input name="deskripsi" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input name="simpan" type="submit" class="btn btn-success" value="Simpan">
                    </div>
                    </form>
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
          var data=$('#form-jadwal').serialize();
          $.ajax({
            url: '{{ url("tambahjadwal") }}',
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
                url: '{{ url("datajadwal") }}',
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
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'kegiatan', name: 'kegiatan'},
                    {data: 'deskripsi', name: 'deskripsi'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    
                ],
                
        });

        }
      </script>
      @endpush
@include('admin.footer')
@endsection