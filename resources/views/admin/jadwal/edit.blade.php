@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Edit Kegiatan</h4>
                </div>
                <div class="card-body mt-3">
                  <form action="{{ url('editjadwal/' . $jadwal->id . '/update') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="tanggal" class="control-label">Tanggal</label>
                        <input name="tanggal" type="text" class="form-control" required value="{{$jadwal->tanggal}}">
                        </div>
                        <div class="form-group">
                        <label for="kegiatan" class="control-label">Kegiatan</label>
                        <input name="kegiatan" type="text" class="form-control" required value="{{$jadwal->kegiatan}}">
                        </div>
                        <div class="form-group">
                        <label for="deskripsi" class="control-label">Deskripsi</label>
                        <input name="deskripsi" type="text" class="form-control" required value="{{$jadwal->deskripsi}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                        </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@include('admin.footer')
@endsection