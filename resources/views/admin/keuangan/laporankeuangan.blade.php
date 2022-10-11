@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title">Laporan Keuangan
              @if(($keuangan->count())>0) 
              <a href="{{ url('resetkeuangan') }}" class="btn btn-sm btn-white btn-round float-right reset" style="color: grey;"><i class="material-icons">close</i>Reset</a>
              <a href="{{ url('cetakkeuangan') }}" class="btn btn-sm btn-white btn-round float-right" style="color: grey;"><i class="material-icons">print</i> Cetak</a>
              <button class="btn btn-sm btn-white btn-round float-right" data-toggle="modal" data-target="#tambahpemasukan"><i class="material-icons">add</i>Pemasukkan</button> <button class="btn btn-sm btn-white btn-round float-right" data-toggle="modal" data-target="#tambahpengeluaran"><i class="material-icons">add</i>Pengeluaran</button>
              @elseif(($keuangan->count())<1)
              <a href="{{ url('resetkeuangan') }}" class="btn btn-sm btn-white btn-round float-right reset" style="color: grey;"><i class="material-icons">close</i>Reset</a>
              <a href="{{ url('cetakkeuangan') }}" class="btn btn-sm btn-white btn-round float-right reset" style="color: grey;"><i class="material-icons">print</i> Cetak</a>
              <button class="btn btn-sm btn-white btn-round float-right" data-toggle="modal" data-target="#tambahpemasukan"><i class="material-icons">add</i>Pemasukkan</button> <button disabled  class="btn btn-sm btn-white btn-round float-right" data-toggle="modal" data-target="#tambahpengeluaran"><i class="material-icons">add</i>Pengeluaran</button>
              @endif
            </h4>
            </div>
            <div class="card-body mt-3">
              <table id="table_id" class="display table w-100">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th>Pemasukkan</th>
                    <th>Pengeluaran</th>
                    <th>Saldo</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal fade" id="tambahpemasukan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Pemasukan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" class="form-data" id="form-pemasukan">
                    <div class="form-group">
                      <label for="tanggal" class="control-label">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="uraian" class="control-label">Deskripsi Pemasukan</label>
                      <input name="uraian" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="pemasukan" class="control-label">Jumlah</label>
                      <input name="pemasukan" type="text" class="form-control" required placeholder="masukkan hanya angka, contoh:100000">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input name="simpanpemasukan" type="submit" class="btn btn-success" value="Simpan">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal fade" id="tambahpengeluaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" class="form-data" id="form-pengeluaran">
                    <div class="form-group">
                      <label for="tanggal" class="control-label">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="uraian" class="control-label">Deskripsi Pengeluaran</label>
                      <input name="uraian" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="pengeluaran" class="control-label">Jumlah</label>
                      <input name="pengeluaran" type="text" class="form-control" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input name="simpanpengeluaran" type="submit" class="btn btn-success" value="Simpan">
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
    $('input[name="simpanpemasukan"]').click(function(event) {
      event.preventDefault();
      var data=$('#form-pemasukan').serialize();
      $.ajax({
        url: '{{ url("tambahpemasukan") }}',
        type: 'POST',
        dataType: 'json',
        data: data,
      })
      .done(function(data) {
        if(data==1){
          $('#table_id').DataTable().destroy();
          getdata();
          $('#tambahpemasukan').modal('hide');
          Swal.fire(
            'Data Berhasil Ditambah!',
            'Kamu telah menambah data!',
            'success'
            )
        }
      });
    });
    $('input[name="simpanpengeluaran"]').click(function(event) {
      event.preventDefault();
      var data=$('#form-pengeluaran').serialize();
      $.ajax({
        url: '{{ url("tambahpengeluaran") }}',
        type: 'POST',
        dataType: 'json',
        data: data,
      })
      .done(function(data) {
        if(data==1){
          $('#table_id').DataTable().destroy();
          getdata();
          $('#tambahpengeluaran').modal('hide');
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

    $(document).on('click', '.reset', function(event) {
      event.preventDefault();
      var url=$(this).attr('href');
      Swal.fire({
        title: 'Yakin ingin menghapus semua data?',
        text: "Apakah sudah kamu cetak?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {

        if (result.isConfirmed) {
          
          $.ajax({
            url: url,
            type: 'get',
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
          url: '{{ url("datakeuangan") }}',
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
        {data: 'uraian', name: 'uraian'},
        {data: 'pemasukan', render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' ), name: 'pemasukan'},
        {data: 'pengeluaran',render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' ), name: 'pengeluaran'},
        {data: 'saldo', render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' ), name: 'saldo'},
        {data: 'action', name: 'action', orderable: false, searchable: false},
        
        ],
        
      });

    }
  </script>
  @endpush
  @include('admin.footer')
  @endsection