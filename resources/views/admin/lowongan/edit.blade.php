@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title">Edit Lowongan Kerja</h4>
          </div>
          <div class="card-body mt-3">
              <form action="{{ url('updatelowongan') }}" method="post"> 
                @csrf
                <label for="membutuhkan" class=" col-form-label">Membutuhkan</label>
                <div class="form-group">
                  <input type="text" class="form-control" name="membutuhkan" value="{{ $show->membutuhkan }}">
              </div>
              <label for="kriteria" class="col-form-label">Kriteria</label>
              <div class="form-group">
                <textarea name="kriteria" class="ckeditor form-control" id="ckeditor" required>
                    {{ $show->kriteria }}
                </textarea>
            </div>
            <label for="membutuhkan" class=" col-form-label">Nomor yang dapat dihubungi</label>
            <div class="form-group">
              <input type="text" class="form-control" name="nomor" value="{{ $show->nomor }}">
          </div>
          <label for="membutuhkan" class=" col-form-label">Status</label>
          @if ($show->status=="Aktif")
          <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" id="status" value="Aktif" checked>
                Aktif
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
        <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" id="status" value="Nonaktif">
                Nonaktif
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
        @elseif ($show->status=="Nonaktif")
        <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" id="status" value="Aktif">
                Aktif
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
        <div class="form-check form-check-radio">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="status" id="status" value="Nonaktif" checked>
                Nonaktif
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
        @endif
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
@include('admin.footer')
@endsection