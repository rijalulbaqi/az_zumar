@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Sambutan</h4>
                </div>
                <div class="card-body mt-3">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#editsambutan"><i class="material-icons">edit</i> Edit</button>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Nama Kepala</label>
                              <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" value="{{ $sambutan->nama_kepala }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto Profil</label>
                              <div class="col-sm-10">
                                <img class="w-50" src="{{ url('dashboard/img/profil/'.$sambutan->foto_kepala) }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Sambutan</label>
                              <div class="col-sm-10">
                                <b>{!! $sambutan->sambutan !!}</b>
                              </div>
                            </div>
                            <!-- modalsambutan -->
                            <div class="modal fade" id="editsambutan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Sambutan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahsambutan') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="nama_kepala" class="control-label">Nama Kepala</label>
                                        <input name="nama_kepala" type="text" class="form-control" required value="{{ $sambutan->nama_kepala }}">
                                        </div>
                                        <div>
                                        <label for="foto_kepala" class="control-label">Ganti Foto</label>
                                        <input name="foto_kepala" type="file" class="form-control">
                                        </div>
                                        <div>
                                        <label for="sambutan" class="control-label">Sambutan</label>
                                        <textarea name="sambutan" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $sambutan->sambutan }}
                                        </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button name="submit" type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                              <!-- akhirmodalyayasan -->
                          </div>
                          
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@include('admin.footer')
@endsection