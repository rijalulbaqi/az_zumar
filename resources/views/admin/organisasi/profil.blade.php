@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Profil</h4>
                </div>
                <div class="card-body mt-3">
                      <ul class="nav nav-pills nav-pills-icons " role="tablist">
    <!--
        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
    -->
                          <li class="nav-item nav-pills-success">
                              <a class="nav-link active" href="#yayasan" role="tab" data-toggle="tab">
                                  <i class="material-icons">donut_large</i>
                                  Yayasan
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#tk" role="tab" data-toggle="tab">
                                  <i class="material-icons">donut_large</i>
                                  TK
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#sd" role="tab" data-toggle="tab">
                                  <i class="material-icons">donut_large</i>
                                  SD
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#smp" role="tab" data-toggle="tab">
                                  <i class="material-icons">donut_large</i>
                                  SMP
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#sma" role="tab" data-toggle="tab">
                                  <i class="material-icons">donut_large</i>
                                  SMA
                              </a>
                          </li>
                      </ul>
                      <div class="tab-content tab-space">
                          <div class="tab-pane active" id="yayasan">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#edityayasan"><i class="material-icons">edit</i> Edit</button>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Nama Lembaga</label>
                              <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" value="{{ $yayasan->lembaga }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto Profil</label>
                              <div class="col-sm-10">
                                <img class="w-50" src="{{ url('dashboard/img/profil/'.$yayasan->foto_profil) }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Isi Profil</label>
                              <div class="col-sm-10">
                                <b>{!! $yayasan->isi_profil !!}</b>
                              </div>
                            </div>
                            <!-- modalyayasan -->
                            <div class="modal fade" id="edityayasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit Yayasan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahprofilyayasan') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="lembaga" class="control-label">Nama Lembaga</label>
                                        <input name="lembaga" type="text" class="form-control" required value="{{ $yayasan->lembaga }}">
                                        </div>
                                        <div>
                                        <label for="foto_profil" class="control-label">Ganti Foto(Ukuran 2880x1148 Pixel)</label>
                                        <input name="foto_profil" type="file" class="form-control">
                                        </div>
                                        <div>
                                        <label for="isi_profil" class="control-label">Isi Profil</label>
                                        <textarea name="isi_profil" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $yayasan->isi_profil }}
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
                          <div class="tab-pane" id="tk">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#edittk"><i class="material-icons">edit</i> Edit</button>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Nama Lembaga</label>
                              <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" value="{{ $tk->lembaga }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto Profil</label>
                              <div class="col-sm-10">
                                <img class="w-50" src="{{ url('dashboard/img/profil/'.$tk->foto_profil) }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Isi Profil</label>
                              <div class="col-sm-10">
                                <b>{!! $tk->isi_profil !!}</b>
                              </div>
                            </div>
                            <!-- modaltk -->
                            <div class="modal fade" id="edittk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit TK</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahprofiltk') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="lembaga" class="control-label">Nama Lembaga</label>
                                        <input name="lembaga" type="text" class="form-control" required value="{{ $tk->lembaga }}">
                                        </div>
                                        <div>
                                        <label for="foto_profil" class="control-label">Ganti Foto(Ukuran 2880x1148 Pixel)</label>
                                        <input name="foto_profil" type="file" class="form-control">
                                        </div>
                                        <div>
                                        <label for="isi_profil" class="control-label">Isi Profil</label>
                                        <textarea name="isi_profil" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $tk->isi_profil }}
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
                          </div>
                          <div class="tab-pane" id="sd">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#editsd"><i class="material-icons">edit</i> Edit</button>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Nama Lembaga</label>
                              <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" value="{{ $sd->lembaga }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto Profil</label>
                              <div class="col-sm-10">
                                <img class="w-50" src="{{ url('dashboard/img/profil/'.$sd->foto_profil) }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Isi Profil</label>
                              <div class="col-sm-10">
                                <b>{!! $sd->isi_profil !!}</b>
                              </div>
                            </div>
                            <!-- modalsd -->
                            <div class="modal fade" id="editsd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit SD</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahprofilsd') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="lembaga" class="control-label">Nama Lembaga</label>
                                        <input name="lembaga" type="text" class="form-control" required value="{{ $sd->lembaga }}">
                                        </div>
                                        <div>
                                        <label for="foto_profil" class="control-label">Ganti Foto(Ukuran 2880x1148 Pixel)</label>
                                        <input name="foto_profil" type="file" class="form-control">
                                        </div>
                                        <div>
                                        <label for="isi_profil" class="control-label">Isi Profil</label>
                                        <textarea name="isi_profil" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $sd->isi_profil }}
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
                          </div>
                          <div class="tab-pane" id="smp">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#editsmp"><i class="material-icons">edit</i> Edit</button>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Nama Lembaga</label>
                              <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" value="{{ $smp->lembaga }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto Profil</label>
                              <div class="col-sm-10">
                                <img class="w-50" src="{{ url('dashboard/img/profil/'.$smp->foto_profil) }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Isi Profil</label>
                              <div class="col-sm-10">
                                <b>{!! $smp->isi_profil !!}</b>
                              </div>
                            </div>
                            <!-- modalsmp -->
                            <div class="modal fade" id="editsmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit SMP</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahprofilsmp') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="lembaga" class="control-label">Nama Lembaga</label>
                                        <input name="lembaga" type="text" class="form-control" required value="{{ $smp->lembaga }}">
                                        </div>
                                        <div>
                                        <label for="foto_profil" class="control-label">Ganti Foto(Ukuran 2880x1148 Pixel)</label>
                                        <input name="foto_profil" type="file" class="form-control">
                                        </div>
                                        <div>
                                        <label for="isi_profil" class="control-label">Isi Profil</label>
                                        <textarea name="isi_profil" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $smp->isi_profil }}
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
                          </div>
                          <div class="tab-pane" id="sma">
                            <button class="btn btn-sm btn-success btn-round float-right" data-toggle="modal" data-target="#editsma"><i class="material-icons">edit</i> Edit</button>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Nama Lembaga</label>
                              <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" value="{{ $sma->lembaga }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Foto Profil</label>
                              <div class="col-sm-10">
                                <img class="w-50" src="{{ url('dashboard/img/profil/'.$sma->foto_profil) }}">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Isi Profil</label>
                              <div class="col-sm-10">
                                <b>{!! $sma->isi_profil !!}</b>
                              </div>
                            </div>
                            <!-- modalsma -->
                            <div class="modal fade" id="editsma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit SMA</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('ubahprofilsma') }}" class="form-data" id="form-jadwal" enctype="multipart/form-data">
                                          @csrf
                                        <div>
                                        <label for="lembaga" class="control-label">Nama Lembaga</label>
                                        <input name="lembaga" type="text" class="form-control" required value="{{ $sma->lembaga }}">
                                        </div>
                                        <div>
                                        <label for="foto_profil" class="control-label">Ganti Foto(Ukuran 2880x1148 Pixel)</label>
                                        <input name="foto_profil" type="file" class="form-control">
                                        </div>
                                        <div>
                                        <label for="isi_profil" class="control-label">Isi Profil</label>
                                        <textarea name="isi_profil" class="ckeditor form-control" id="ckeditor" required>
                                        {{ $sma->isi_profil }}
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