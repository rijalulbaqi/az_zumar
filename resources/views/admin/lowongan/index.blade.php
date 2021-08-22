@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">Lowongan Kerja
              <a style="color: black;" href="{{ url('editlowongan') }}" class="btn btn-sm btn-white btn-round float-right"><i class="material-icons">edit</i> Edit</a></h4>
            </div>
            <div class="card-body mt-3">
              <form>
                <div class="form-group row">
                  <label for="membutuhkan" class="col-sm-2 col-form-label">Membutuhkan</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" value="{{ $show->membutuhkan }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                  <div class="col-sm-10"><b>
                    {!! $show->kriteria !!}
                  </b></div>
                </div>
                <div class="form-group row">
                  <label for="nomor" class="col-sm-2 col-form-label">Nomor yang dapat dihubungi</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" value="{{ $show->nomor }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="status" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" value="{{ $show->status }}">
                  </div>
                </div>
              </form>
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