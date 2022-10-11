@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Visi dan Misi</h4>
                </div>
                <div class="card-body mt-3">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#editvisimisi"><i class="material-icons">edit</i> Edit</button>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto Sekolah</label>
                              <div class="col-sm-10">
                                <img class="w-50" src="{{ url('dashboard/img/profil/'.$visimisi->foto_sekolah) }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Visi</label>
                              <div class="col-sm-10">
                                <b>{!! $visimisi->visi !!}</b>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Misi</label>
                              <div class="col-sm-10">
                                <b>{!! $visimisi->misi !!}</b>
                              </div>
                            </div>
                            <!-- modalvisimisi -->
                            <div class="modal fade" id="editvisimisi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit visimisi</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahvisimisi') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="foto_sekolah" class="control-label">Ganti Foto</label>
                                        <input name="foto_sekolah" type="file" class="form-control">
                                        </div>
                                        <div>
                                        <label for="visi" class="control-label">Visi</label>
                                        <textarea name="visi" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $visimisi->visi }}
                                        </textarea>
                                        </div>
                                        <div>
                                        <label for="misi" class="control-label">Misi</label>
                                        <textarea name="misi" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $visimisi->misi }}
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