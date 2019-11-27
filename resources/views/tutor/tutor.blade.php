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

  <title>Dashboard | Tutor</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/lte/plugins/fontawesome-free/css/all.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- HEADER -->
@include('tutor/header')

<!-- Main Sidebar Container -->
@include('tutor/sidebar')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
<<<<<<< HEAD
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manajemen Siswa</h1>
=======
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Manajemen Siswa</h1><br>
            <p class="m-0 text-dark">Berikut data pengajuan dari siswa yang mendaftar les pada Anda. 
            Di kolom Konfirmasi, silahkan pilih <b>Setuju</b>, jika jadwal mengajar Anda sesuai dengan 
            jadwal yang diajukan. Pilih  <b>Tolak</b>, jika jadwal mengajar Anda tidak sesuai/tabrakan 
            dengan jadwal yang diajukan</p>
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Konfirmasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
<<<<<<< HEAD
                        <td>Daru</td>
=======
                        <td>Dewandaru</td>
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
                        <td>6 SD</td>
                        <td>Matematika</td>
                        <td>Selasa, Rabu, Kamis</td>
                        <td>Ruang HY - U202</td>
                        <td>
<<<<<<< HEAD
                            <a class=" btn btn-sm btn-success" style="color:white;">
                              <span>Terima</span>
                            </a>
                            <a class=" btn btn-sm btn-danger" style="color:white;">
                              <span>Tolak</span>
=======
                            <a class=" btn btn-sm btn-success" style="color:white; cursor:pointer;">
                                <span>Setuju</span>
                            </a>
                            <a class=" btn btn-sm btn-danger" style="color:white; cursor:pointer">
                                <span>Tolak</span>
>>>>>>> 9066250bfd05fd696dcb57e927667e360c54b1f8
                            </a>
                        </td>
                    </tr>
                </tbody>
                </table>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> 
    <script>
      $(document).ready( function () {
      $('#tutor').DataTable();
      });
    </script>

<!-- Main Footer -->
@include('tutor/footer')

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
