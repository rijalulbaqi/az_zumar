@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Syarat Pendaftaran</h4>
                </div>
                <div class="card-body mt-3">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#editsyarat"><i class="material-icons">edit</i> Edit</button>
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Syarat Pendaftaran</label>
                                  <div class="col-sm-10">
                                    <b>{!! $syarat->syarat !!}</b>
                                  </div>
                                  <label class="col-sm-2 col-form-label">Status</label>
                                  <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{ $syarat->status }}">
                                  </div>
                                </div>
                            <!-- modalvisimisi -->
                            <div class="modal fade" id="editsyarat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Syarat</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahsyarat') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="syarat" class="control-label">Syarat Pendaftaran</label>
                                        <textarea name="syarat" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $syarat->syarat }}
                                        </textarea>
                                        </div>
                                        <label for="membutuhkan" class=" col-form-label">Status</label>
                                          @if ($syarat->status=="Open")
                                          <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" id="status" value="Open" checked>
                                                Open
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" id="status" value="Close">
                                                Close
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        @elseif ($syarat->status=="Close")
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" id="status" value="Open">
                                                Open
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="form-check form-check-radio">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="status" id="status" value="Close" checked>
                                                Close
                                                <span class="circle">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        @endif
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