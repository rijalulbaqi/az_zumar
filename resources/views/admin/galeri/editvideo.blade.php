@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Edit Video</h4>
                </div>
                <div class="card-body mt-3">
                  <form action="{{ url('editvideo/' . $video->id . '/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <iframe src="{{ $video->video }}"></iframe>
                        <div class="form-group">
                        <label for="video" class="control-label">Video Lama</label>
                        <input type="text" name="video" class="form-control" value="{{ $video->video }}">
                        </div>
                        <div class="form-group">
                        <label for="judul" class="control-label">Judul</label>
                        <input name="judul" type="text" class="form-control" required value="{{$video->judul}}">
                        </div>
                        <div class="form-group">
                        <label for="deskripsi" class="control-label">Deskripsi</label>
                        <input name="deskripsi" type="text" class="form-control" required value="{{$video->deskripsi}}">
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