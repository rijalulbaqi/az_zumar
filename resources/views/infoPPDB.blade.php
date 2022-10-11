      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
  

      {{-- Donasi Keuangan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Informasi Pendaftaran Peserta Didik Baru</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body card-b-ppdb my-4">
                
              @if($syarat->status=="Open")  
                <div>
                  <p> <b> Syarat Pendaftaran Peserta Didik Baru </b></p>
                  {!! $syarat->syarat !!}
                </div>

                <ul class="nav nav-pills mt-3 mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-tk" type="button" role="tab" aria-controls="pills-home" aria-selected="true">TK</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-sd" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">SD</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-smp" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">SMP</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-sma" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">SMA</button>
                  </li>
                </ul>

                <div class="card card-ppdb">
                  <div class="card-body">
                    <div class="tab-content text-start" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-tk" role="tabpanel" aria-labelledby="pills-TK-tab">
                    

                      <div class="row">
                        <div class="col d-flex justify-content-center">
                          <p style="font-size: 35px;"><b>Formulir Pendaftaran</b></p>
                        </div>
                      </div>

                      <div class="text-center row d-flext justify-content-center">
                          <hr style="width:90%;">
                      </div>

                      <form action="{{ url('ppdbtk') }}" method="post">
                        @csrf
                        <div class=" row mb-3">
                          <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-10">
                            <input type="text" name="namalengkap" required required class="form-control" id="nama" placeholder="Nama Lengkap">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="namapanggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                          <div class="col-sm-10">
                            <input type="text" name="namapanggilan" required class="form-control" id="nama" placeholder="Nama Panggilan">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahir" required class="form-control" id="nama" placeholder="Tempat Lahir">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahir" required class="form-control" id="nama" placeholder="Tanggal Lahir">
                          </div>
                        </div>


                        <fieldset class="row mb-3">
                          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminlk" value="laki-laki">
                              <label class="form-check-label" for="jeniskelaminlk">
                                Laki-laki
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminpr" value="perempuan">
                              <label class="form-check-label" for="jeniskelaminpr">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </fieldset>
                        
                        <div class="row mb-3">
                          <label for="agama" class="col-sm-2 col-form-label">Agama :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agama" required class="form-control" id="nama" placeholder="Agama">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="anakke" class="col-sm-2 col-form-label">Anak ke :</label>
                          <div class="col-sm-10">
                            <input type="text" name="anakke" required class="form-control" id="nama" placeholder="Anak ke">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="jumlahsaudara" class="col-sm-2 col-form-label">Jumlah Saudara :</label>
                          <div class="col-sm-10">
                            <input type="text" name="jumlahsaudara" required class="form-control" id="nama" placeholder="Jumlah Saudara">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="alamat" class="col-sm-2 col-form-label">Alamat :</label>
                          <div class="col-sm-10">
                            <textarea required class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="nomortelepon" class="col-sm-2 col-form-label">Nomor Telepon :</label>
                          <div class="col-sm-10">
                            <input type="number" name="nomortelepon" required class="form-control" id="nama" placeholder="Nomor Telepon">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaayah" required class="form-control" id="nama" placeholder="Nama Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahirayah" class="col-sm-2 col-form-label">Tempat Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahirayah" required class="form-control" id="nama" placeholder="Tempat Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahirayah" class="col-sm-2 col-form-label">Tanggal Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahirayah" required class="form-control" id="nama" placeholder="Tanggal Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaayah" class="col-sm-2 col-form-label">Agama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaayah" required class="form-control" id="nama" placeholder="Agama Ayah">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanayah" required class="form-control" id="nama" placeholder="Pekerjaan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanayah" class="col-sm-2 col-form-label">Pendidikan Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanayah" required class="form-control" id="nama" placeholder="Pendidikan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaibu" class="col-sm-2 col-form-label">Nama ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaibu" required class="form-control" id="nama" placeholder="Nama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahiribu" class="col-sm-2 col-form-label">Tempat Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahiribu" required class="form-control" id="nama" placeholder="Tempat Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahiribu" class="col-sm-2 col-form-label">Tanggal Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahiribu" required class="form-control" id="nama" placeholder="Tanggal Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaibu" class="col-sm-2 col-form-label">Agama Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaibu" required class="form-control" id="nama" placeholder="Agama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanibu" required class="form-control" id="nama" placeholder="Pekerjaan Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanibu" class="col-sm-2 col-form-label">Pendidikan Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanibu" required class="form-control" id="nama" placeholder="Pendidikan Ibu">
                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col d-flex justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-formulir-pendaftaran">Daftar Sekarang</button> 
                          </div>
                        </div>
                        
                        </form>

                      </div>

                  <div class="tab-pane fade" id="pills-sd" role="tabpanel" aria-labelledby="pills-sd-tab">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                          <p style="font-size: 35px;"><b>Formulir Pendaftaran</b></p>
                        </div>
                      </div>

                      <div class="text-center row d-flext justify-content-center">
                          <hr style="width:90%;">
                      </div>
                  
                    <form action="{{ url('ppdbsd') }}" method="post">
                      @csrf
                        <div class=" row mb-3">
                          <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-10">
                            <input type="text" name="namalengkap" required class="form-control" id="nama" placeholder="Nama Lengkap">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="namapanggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                          <div class="col-sm-10">
                            <input type="text" name="namapanggilan" required class="form-control" id="nama" placeholder="Nama Panggilan">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahir" required class="form-control" id="nama" placeholder="Tempat Lahir">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahir" required class="form-control" id="nama" placeholder="Tanggal Lahir">
                          </div>
                        </div>


                        <fieldset class="row mb-3">
                          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminlk" value="laki-laki">
                              <label class="form-check-label" for="jeniskelaminlk">
                                Laki-laki
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminpr" value="perempuan">
                              <label class="form-check-label" for="jeniskelaminpr">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </fieldset>
                        
                        <div class="row mb-3">
                          <label for="agama" class="col-sm-2 col-form-label">Agama :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agama" required class="form-control" id="nama" placeholder="Agama">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="anakke" class="col-sm-2 col-form-label">Anak ke :</label>
                          <div class="col-sm-10">
                            <input type="text" name="anakke" required class="form-control" id="nama" placeholder="Anak ke">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="jumlahsaudara" class="col-sm-2 col-form-label">Jumlah Saudara :</label>
                          <div class="col-sm-10">
                            <input type="text" name="jumlahsaudara" required class="form-control" id="nama" placeholder="Jumlah Saudara">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="alamat" class="col-sm-2 col-form-label">Alamat :</label>
                          <div class="col-sm-10">
                            <textarea required class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="nomortelepon" class="col-sm-2 col-form-label">Nomor Telepon :</label>
                          <div class="col-sm-10">
                            <input type="number" name="nomortelepon" required class="form-control" id="nama" placeholder="Nomor Telepon">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaayah" required class="form-control" id="nama" placeholder="Nama Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahirayah" class="col-sm-2 col-form-label">Tempat Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahirayah" required class="form-control" id="nama" placeholder="Tempat Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahirayah" class="col-sm-2 col-form-label">Tanggal Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahirayah" required class="form-control" id="nama" placeholder="Tanggal Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaayah" class="col-sm-2 col-form-label">Agama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaayah" required class="form-control" id="nama" placeholder="Agama Ayah">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanayah" required class="form-control" id="nama" placeholder="Pekerjaan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanayah" class="col-sm-2 col-form-label">Pendidikan Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanayah" required class="form-control" id="nama" placeholder="Pendidikan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaibu" class="col-sm-2 col-form-label">Nama ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaibu" required class="form-control" id="nama" placeholder="Nama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahiribu" class="col-sm-2 col-form-label">Tempat Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahiribu" required class="form-control" id="nama" placeholder="Tempat Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahiribu" class="col-sm-2 col-form-label">Tanggal Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahiribu" required class="form-control" id="nama" placeholder="Tanggal Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaibu" class="col-sm-2 col-form-label">Agama Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaibu" required class="form-control" id="nama" placeholder="Agama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanibu" required class="form-control" id="nama" placeholder="Pekerjaan Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanibu" class="col-sm-2 col-form-label">Pendidikan Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanibu" required class="form-control" id="nama" placeholder="Pendidikan Ibu">
                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col d-flex justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-formulir-pendaftaran">Daftar Sekarang</button> 
                          </div>
                        </div>
                        
                        </form>

                  </div>

                  <div class="tab-pane fade" id="pills-smp" role="tabpanel" aria-labelledby="pills-smp-tab">
                  
                    
                      <div class="row">
                        <div class="col d-flex justify-content-center">
                          <p style="font-size: 35px;"><b>Formulir Pendaftaran</b></p>
                        </div>
                      </div>

                      <div class="text-center row d-flext justify-content-center">
                          <hr style="width:90%;">
                      </div>


                    <form action="{{ url('ppdbsmp') }}" method="post">
                      @csrf
                        <div class=" row mb-3">
                          <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-10">
                            <input type="text" name="namalengkap" required class="form-control" id="nama" placeholder="Nama Lengkap">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="namapanggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                          <div class="col-sm-10">
                            <input type="text" name="namapanggilan" required class="form-control" id="nama" placeholder="Nama Panggilan">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                          <div class="col-sm-10">
                            <input type="text" name="nisn" required class="form-control" id="nisn" placeholder="nisn">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahir" required class="form-control" id="nama" placeholder="Tempat Lahir">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahir" required class="form-control" id="nama" placeholder="Tanggal Lahir">
                          </div>
                        </div>


                        <fieldset class="row mb-3">
                          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminlk" value="laki-laki">
                              <label class="form-check-label" for="jeniskelaminlk">
                                Laki-laki
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminpr" value="perempuan">
                              <label class="form-check-label" for="jeniskelaminpr">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </fieldset>
                        
                        <div class="row mb-3">
                          <label for="agama" class="col-sm-2 col-form-label">Agama :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agama" required class="form-control" id="nama" placeholder="Agama">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="anakke" class="col-sm-2 col-form-label">Anak ke :</label>
                          <div class="col-sm-10">
                            <input type="text" name="anakke" required class="form-control" id="nama" placeholder="Anak ke">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="jumlahsaudara" class="col-sm-2 col-form-label">Jumlah Saudara :</label>
                          <div class="col-sm-10">
                            <input type="text" name="jumlahsaudara" required class="form-control" id="nama" placeholder="Jumlah Saudara">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="alamat" class="col-sm-2 col-form-label">Alamat :</label>
                          <div class="col-sm-10">
                            <textarea required class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="nomortelepon" class="col-sm-2 col-form-label">Nomor Telepon :</label>
                          <div class="col-sm-10">
                            <input type="number" name="nomortelepon" required class="form-control" id="nama" placeholder="Nomor Telepon">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaayah" required class="form-control" id="nama" placeholder="Nama Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahirayah" class="col-sm-2 col-form-label">Tempat Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahirayah" required class="form-control" id="nama" placeholder="Tempat Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahirayah" class="col-sm-2 col-form-label">Tanggal Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahirayah" required class="form-control" id="nama" placeholder="Tanggal Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaayah" class="col-sm-2 col-form-label">Agama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaayah" required class="form-control" id="nama" placeholder="Agama Ayah">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanayah" required class="form-control" id="nama" placeholder="Pekerjaan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanayah" class="col-sm-2 col-form-label">Pendidikan Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanayah" required class="form-control" id="nama" placeholder="Pendidikan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaibu" class="col-sm-2 col-form-label">Nama ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaibu" required class="form-control" id="nama" placeholder="Nama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahiribu" class="col-sm-2 col-form-label">Tempat Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahiribu" required class="form-control" id="nama" placeholder="Tempat Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahiribu" class="col-sm-2 col-form-label">Tanggal Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahiribu" required class="form-control" id="nama" placeholder="Tanggal Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaibu" class="col-sm-2 col-form-label">Agama Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaibu" required class="form-control" id="nama" placeholder="Agama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanibu" required class="form-control" id="nama" placeholder="Pekerjaan Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanibu" class="col-sm-2 col-form-label">Pendidikan Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanibu" required class="form-control" id="nama" placeholder="Pendidikan Ibu">
                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col d-flex justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-formulir-pendaftaran">Daftar Sekarang</button> 
                          </div>
                        </div>
                        
                        </form>
                  </div>

                  <div class="tab-pane fade" id="pills-sma" role="tabpanel" aria-labelledby="pills-sma-tab">
                    
                    
                      <div class="row">
                        <div class="col d-flex justify-content-center">
                          <p style="font-size: 35px;"><b>Formulir Pendaftaran</b></p>
                        </div>
                      </div>

                      <div class="text-center row d-flext justify-content-center">
                          <hr style="width:90%;">
                      </div>


                    <form action="{{ url('ppdbsma') }}" method="post">
                      @csrf
                        <div class=" row mb-3">
                          <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                          <div class="col-sm-10">
                            <input type="text" name="namalengkap" required class="form-control" id="nama" placeholder="Nama Lengkap">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="namapanggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                          <div class="col-sm-10">
                            <input type="text" name="namapanggilan" required class="form-control" id="nama" placeholder="Nama Panggilan">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                          <div class="col-sm-10">
                            <input type="text" name="nisn" required class="form-control" id="nisn" placeholder="nisn">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahir" required class="form-control" id="nama" placeholder="Tempat Lahir">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahir" required class="form-control" id="nama" placeholder="Tanggal Lahir">
                          </div>
                        </div>


                        <fieldset class="row mb-3">
                          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminlk" value="laki-laki">
                              <label class="form-check-label" for="jeniskelaminlk">
                                Laki-laki
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelaminpr" value="perempuan">
                              <label class="form-check-label" for="jeniskelaminpr">
                                Perempuan
                              </label>
                            </div>
                          </div>
                        </fieldset>
                        
                        <div class="row mb-3">
                          <label for="agama" class="col-sm-2 col-form-label">Agama :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agama" required class="form-control" id="nama" placeholder="Agama">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="anakke" class="col-sm-2 col-form-label">Anak ke :</label>
                          <div class="col-sm-10">
                            <input type="text" name="anakke" required class="form-control" id="nama" placeholder="Anak ke">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="jumlahsaudara" class="col-sm-2 col-form-label">Jumlah Saudara :</label>
                          <div class="col-sm-10">
                            <input type="text" name="jumlahsaudara" required class="form-control" id="nama" placeholder="Jumlah Saudara">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="alamat" class="col-sm-2 col-form-label">Alamat :</label>
                          <div class="col-sm-10">
                            <textarea required class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="nomortelepon" class="col-sm-2 col-form-label">Nomor Telepon :</label>
                          <div class="col-sm-10">
                            <input type="number" name="nomortelepon" required class="form-control" id="nama" placeholder="Nomor Telepon">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaayah" class="col-sm-2 col-form-label">Nama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaayah" required class="form-control" id="nama" placeholder="Nama Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahirayah" class="col-sm-2 col-form-label">Tempat Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahirayah" required class="form-control" id="nama" placeholder="Tempat Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahirayah" class="col-sm-2 col-form-label">Tanggal Lahir Ayah :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahirayah" required class="form-control" id="nama" placeholder="Tanggal Lahir Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaayah" class="col-sm-2 col-form-label">Agama Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaayah" required class="form-control" id="nama" placeholder="Agama Ayah">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanayah" class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanayah" required class="form-control" id="nama" placeholder="Pekerjaan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanayah" class="col-sm-2 col-form-label">Pendidikan Ayah :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanayah" required class="form-control" id="nama" placeholder="Pendidikan Ayah">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="namaibu" class="col-sm-2 col-form-label">Nama ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="namaibu" required class="form-control" id="nama" placeholder="Nama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tempatlahiribu" class="col-sm-2 col-form-label">Tempat Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="tempatlahiribu" required class="form-control" id="nama" placeholder="Tempat Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="tanggallahiribu" class="col-sm-2 col-form-label">Tanggal Lahir Ibu :</label>
                          <div class="col-sm-10">
                            <input type="date" name="tanggallahiribu" required class="form-control" id="nama" placeholder="Tanggal Lahir Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="agamaibu" class="col-sm-2 col-form-label">Agama Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="agamaibu" required class="form-control" id="nama" placeholder="Agama Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pekerjaanibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                          <div class="col-sm-10">
                            <input type="text" name="pekerjaanibu" required class="form-control" id="nama" placeholder="Pekerjaan Ibu">
                            
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="pendidikanibu" class="col-sm-2 col-form-label">Pendidikan Ibu :</label>
                          <div class="col-sm-10">
                            <input type="text" name="pendidikanibu" required class="form-control" id="nama" placeholder="Pendidikan Ibu">
                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col d-flex justify-content-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-formulir-pendaftaran">Daftar Sekarang</button> 
                          </div>
                        </div>
                        
                        </form>
                    </div>
                  </div>
                </div>

                @else
                <div class="row">
                      <div class="col">
                        <p class="text-center">Mohon maaf untuk saat ini masih belum di buka pendaftaran peserta didik baru.</p>
                      </div>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>


      
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    