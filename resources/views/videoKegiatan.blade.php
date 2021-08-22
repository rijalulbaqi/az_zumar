      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      


      {{-- header hero --}}
      <div class="container-fluid img-profil-yayasan">
        
          <img src="{{ url('assets/images/profilYayasan.png') }}" class="img-fluid" alt="...">
        
      </div>

      {{-- Profil Yayasan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3">
              <div class="card-header text-center">
                <h2>Video Kegiatan</h2>
                <p>Yayasan Pendidikan Tahfidz Az-Zumar</p>
              </div>
              <div class="card-body my-4">
                <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-center">
                  <div class="col-lg-3">
                    <div class="card h-100">
                      <img src="{{ url('assets/images/3.png') }}" class="card-img-top img-fluid" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="card h-100">
                      <img src="{{ url('assets/images/3.png') }}" class="card-img-top img-fluid" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="card h-100">
                      <img src="{{ url('assets/images/3.png') }}" class="card-img-top img-fluid" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="card h-100">
                      <img src="{{ url('assets/images/3.png') }}" class="card-img-top img-fluid" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="card h-100">
                      <img src="{{ url('assets/images/3.png') }}" class="card-img-top img-fluid" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="card-footer">
                        <div class="d-flex bd-highlight">
                          <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                          <small class="text-muted p-2 bd-highlight">22, Agustus 2021</small>
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
 
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    