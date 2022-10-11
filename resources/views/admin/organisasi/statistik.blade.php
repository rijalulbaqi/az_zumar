@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Statistik</h4>
                </div>
                <div class="card-body mt-3">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#editstatistik"><i class="material-icons">edit</i> Edit</button>
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Jumlah Murid</label>
                                  <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{ $statistik->murid }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Jumlah Guru</label>
                                  <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{ $statistik->guru }}">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Jumlah Esktrakurikuler</label>
                                  <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="{{ $statistik->ekstra }}">
                                  </div>
                                </div>
                            <!-- modalvisimisi -->
                            <div class="modal fade" id="editstatistik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Statistik</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahstatistik') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="murid" class="control-label">Jumlah Murid</label>
                                        <input name="murid" type="text" class="form-control" required value="{{ $statistik->murid }}">
                                        </div>
                                        <div>
                                        <label for="guru" class="control-label">Jumlah Guru</label>
                                        <input name="guru" type="text" class="form-control" required value="{{ $statistik->guru }}">
                                        </div>
                                        <div>
                                        <label for="ekstra" class="control-label">Jumlah Ekstrakurikuler</label>
                                        <input name="ekstra" type="text" class="form-control" required value="{{ $statistik->ekstra }}">
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