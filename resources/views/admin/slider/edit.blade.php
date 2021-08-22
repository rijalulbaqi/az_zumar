@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Edit Slider {{ $slider->slide }}</h4>
                </div>
                <div class="card-body mt-3">
                  <form action="{{ url('editslider/' . $slider->id . '/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="foto" class="control-label">Foto Lama</label>
                        <img width="100%" src="{{ url('dashboard/img/slider/'.$slider->foto) }}">
                        </div>
                        <div>
                        <label for="foto" class="control-label">Foto Baru</label>
                        <input name="foto" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
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