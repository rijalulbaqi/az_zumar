@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Video
                    <button class="btn btn-sm btn-white btn-round float-right" data-toggle="modal" data-target="#tambah"><i class="material-icons">add</i> Tambah</button></h4>
                </div>
                <div class="card-body mt-3">
                  <table id="table_id" class="display table w-100">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Video</th>
                              <th>Judul</th>
                              <th>Deskripsi</th>
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
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Video</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" class="form-data" id="form-data" enctype="multipart/form-data">
                        <div>
                        <div class="msgGagal">
                        </div>
                        <div class="form-group">
                        <label for="video" class="control-label">Link Video</label>
                        <input name="video" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="judul" class="control-label">Judul</label>
                        <input name="judul" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label for="deskripsi" class="control-label">Deskripsi</label>
                        <input name="deskripsi" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <center><div id="loading"></div></center><br>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input name="simpan" type="submit" id="btn-upload" class="btn btn-success" value="Simpan">
                    </div>
                    </form>
                  </div>
                </div>
              </div>
      @push('script')
      <script type="text/javascript">
        getdata();
        $('.btn-upload').click(function(){
              
          });
        $('#form-data').submit(function(event) {
          event.preventDefault();
          $("#loading").html("<img src='{{url('dashboard/img/loading.gif')}}' height='50'>");
          var data = new FormData(this);
          $.ajax({
            url: '{{ url("tambahvideo") }}',
            type: 'POST',
            dataType: 'json',
            data: data,
            cache:false,
            contentType: false,
            processData: false,
          })
          .done(function(data) {
            if(data.status==1){
              $('#table_id').DataTable().destroy();
              getdata();
              $('#tambah').modal('hide');
              Swal.fire(
                'Data Berhasil Ditambah!',
                'Kamu telah menambah data!',
                'success'
              )
            }else{
              $('.msgGagal').html('<div class="alert alert-warning alert-dismissible fade show">'+data.msg+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>')
            }
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
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
                url: '{{ url("datavideo") }}',
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
                    {data: 'video', name: 'video'},
                    {data: 'judul', name: 'judul'},
                    {data: 'deskripsi', name: 'deskripsi'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    
                ],
                
        });

        }

        
        </script>
      @endpush
@include('admin.footer')
@endsection