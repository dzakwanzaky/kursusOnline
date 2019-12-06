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

  <title>Profile | Tutor</title>

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
 <!-- Navbar -->
 <nav class="navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span>Hallo, Tutor</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Welcome, Tutor</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="far fa-user"></i>Profile 
          </a>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i>Logout 
          </a>
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('tutor/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
          <div class="col-md-8 col-md-offset-6" >
            <div class="box box-primary">
              <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Profile Tutor</p>
					  </div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right" style="font-size:14px">
							<li class="breadcrumb-item">
								<a href="/setting">Pengaturan</a>
							</li>
						</ol>
					</div>			
			  	</div>			
                </div>
            </div>
			<hr>		
            <div class="form-group">
							<label for="nama">Foto :</label>
						<div> <a href="#" target="_blank">
						<img width="150px" height="150px" src="/tema/uploads/testi_02.png" style="display:block;margin-left:auto;margin-right:auto">
						</a>
					</div>

					<div class="form-group">
						<label for="">Nama :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="Dewandaru Aji Darma">
					</div>

					<div class="form-group">
						<label for="">Telepon :</label>
						<input type="text" class="form-control" id="no_telepon" name="no_telepon" value="081218099939">
					</div>

					<div class="form-group">
						<label for="">Jenis Kelamin :</label>
						<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="Pria">
					</div>

					<div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="Matematika"> 
					</div>

					<div class="form-group">
						<label for="">Provinsi :</label>
						<input type="text" class="form-control" id="provinsi" name="provinsi" value="Yogyakarta">
					</div>

          <div class="form-group">
						<label for="">Kota/Kabupaten :</label>
						<input type="text" class="form-control" id="kota" name="kota" value="Sleman">
					</div>

          <div class="form-group">
						<label for="">Kecamatan :</label>
						<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="Depok">
					</div>
                    
				</form>
            <br />
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</div>

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
