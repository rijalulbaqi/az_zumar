@extends('admin.app')
@section('content')
@include('admin.menu',array('active'=>$active))
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Slide Foto</h4>
                </div>
                <div class="card-body mt-3">
                  <table id="table_id" class="display table w-100">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Slide</th>
                              <th>Foto</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @push('script')
      <script type="text/javascript">
        getdata();

        function getdata() {  
          $('#table_id').DataTable({
            processing: true,
            serverSide: true,
            
            ajax: {
                url: '{{ url("dataslider") }}',
            },
             rowReorder: {
                selector: 'td:nth-child(2)'
            },

            responsive: true,
            columns: [
                    {
                            "data": 'DT_RowIndex',
                            orderable: false, 
                            searchable: false
                        },
                    {data: 'slide', name: 'slide'},
                    {data: 'foto', name: 'foto'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    
                ],
                
        });

        }
      </script>
      @endpush
@include('admin.footer')
@endsection