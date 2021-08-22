@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success rounded py-3">
                  <h4 class="card-title">Admin Yayasan Al-Zumar</h4>
                </div>
                <div class="card-body">
                  <div class="text-center">
                      <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="dashboard/img/undraw_posting_photo.svg" alt="...">
                    <h3>Selamat Datang ! Admin.</h3>    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@include('admin.footer')
@endsection
