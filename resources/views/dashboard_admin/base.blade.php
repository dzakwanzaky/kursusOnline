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

  <title>Dashboard | Admin</title>
  <link rel="shortcut icon" href="/tema/images/inofaLogo.png" type="image/x-icon"/>

  <!-- DataTable -->  
  <link rel="stylesheet" href="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.min.css') }}">
  <!-- Icons-->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- HEADER -->
@include('dashboard_admin/header')

<!-- Main Sidebar Container -->
@include('dashboard_admin/sidebar')
 
  <!-- Content Wrapper. Contains page content -->
  @yield('content') 
    <!-- /.content -->
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
@include('dashboard_admin/footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte/dist/js/adminlte.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('/lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('/lte/plugins/datatables/dataTables.bootstrap4.js') }}"></script>

@yield('sweet')
</body>
</html>
