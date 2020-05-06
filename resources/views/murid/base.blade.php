<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard | Murid</title>
  <link rel="shortcut icon" href="/tema/images/inofaLogo.png" type="image/x-icon"/>
  <!-- DataTable -->  
  <link rel="stylesheet" href="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Clockpicker and minified CSS -->
        <link rel="stylesheet" href="{{asset('/assets/css/toastr.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/lte/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.css') }}">
    

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- HEADER -->
@include('murid/header')

<!-- Main Sidebar Container -->
@include('murid/sidebar')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        @yield('content')        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<!-- Main Footer -->
@include('murid/footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('/lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!--- Time Picker -->
<script src="{{ asset('/lte/plugins/clockpicker-gh-pages/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/lte/plugins/clockpicker-gh-pages/assets/js/highlight.min.js') }}"></script>
<script src="{{ asset('/lte/plugins/clockpicker-gh-pages/dist/jquery-clockpicker.min.js') }}"></script>

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>
<link href="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet"/>
<script src="{{asset('/assets/js/toastr.min.js')}}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>

@yield('sweet')
</body>
</html>
