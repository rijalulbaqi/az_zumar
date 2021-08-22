@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Ubah Password</h4>
                </div>
                <div class="card-body">
                  <x-app-layout>
                    <div>
                        <div class="max-w-7xl mx-auto sm:px-12 lg:px-12">
                            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                <div class="mt-0 sm:mt-0">
                                    @livewire('profile.update-password-form')
                                </div>
                            @endif
                        </div>
                    </div>
                </x-app-layout>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@include('admin.footer')
@endsection