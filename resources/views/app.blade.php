<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('dashboard/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('dashboard/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/libraries/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/styles/main.css') }}">
    <link rel="stylesheet" href="{{ url('assets/styles/responsive.css') }}">

    {{-- data tables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Yayasan Pendidikan Tahfidz Az-Zumar</title>

    {{-- ICon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  </head>
  <body>


    @yield('content')



    <script src="{{ url('assets/libraries/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/libraries/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/libraries/jquery/jquery-3.6.0.min.js') }}"></script>

    {{-- data tables --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
      $('#table_id').DataTable();
    } );
  </script>
  <script>
    $(document).ready( function () {
      $('#modal').modal('show');
    } );
  </script>
  </body>

 
</html>