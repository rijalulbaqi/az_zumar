      @extends('app')
      @section('content')
      @include('menu', array('active' => $active))
          
      



      {{-- Profil Yayasan --}}
      <div class="container card-profil-yayasan">
        <div class="row ">
          <div class="col-12">
            <div class="card mt-3 card-galeri-foto">

              <div class="card-body my-4">

                      <div class="row">
                        <div class="col d-flex justify-content-center">
                          <p style="font-size: 35px;"><b>Galeri Foto</b></p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="text-center row d-flext justify-content-center">
                          <hr style="width:90%;">
                        </div>
                        </div>
                      </div>
                      

                      <div class="row">
                        <div class="col-lg-10 mb-4">
                            <form class="form-inline my-2 my-lg-0" action="{{ url()->current() }}" method="GET">
                              <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
                              <button class="btn btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
                              </form>
                        </div>

                        <div class="col-lg-2">
                          {{ $galeri_list->links() }}
                        </div>
                        
                      </div>

                      <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($galeri_list as $item)
                        <div class="col-lg-4">
                          <div class="card h-100 card-item-foto">
                            <img src="{{ url('dashboard/img/foto/'.$item->foto) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title"> <a href="{{ url('fotoKegiatan/read/'.$item->id) }}" style="text-decoration: none; color: black; ">{{ $item->judul }}</a> </h5>
                              <p class="card-text">{!! Str::limit($item->deskripsi, 40) !!}</p>
                            </div>
                           

                            <div class="card-footer card-footer-foto">

                              <div class="d-flex bd-highlight">
                                <small class="text-muted me-auto p-2 bd-highlight">oleh Admin</small>
                                <small class="text-muted p-2 bd-highlight">{{ $item->created_at }}</small>
                              </div>
                            </div>
                          </div>
                        </div>
                         @endforeach
                      </div>

              </div>
            </div>
          </div>
        </div>
      </div>
 
     

      <div class="mt-5"></div>


      @include('footer')
      @endsection

    