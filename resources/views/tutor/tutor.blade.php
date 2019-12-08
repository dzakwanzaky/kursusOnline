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
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Manajemen Siswa</h1><br>
            <p class="m-0 text-dark">Berikut data pengajuan dari siswa yang mendaftar les pada Anda. 
            Di kolom Konfirmasi, silahkan pilih <b>Setuju</b>, jika jadwal mengajar Anda sesuai dengan 
            jadwal yang diajukan. Pilih  <b>Tolak</b>, jika jadwal mengajar Anda tidak sesuai/tabrakan 
            dengan jadwal yang diajukan</p>
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
                        <th>Program</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Hari</th>
                        <th>Hari</th>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->program }}</td>
                        <td>{{ $d->kelas }}</td>
                        <td>{{ $d->mata_pelajaran }}</td>
                        <td>{{ $d->hari1 }}</td>
                        <td>{{ $d->hari2 }}</td>
                        <td>{{ $d->hari3 }}</td>
                        <td>{{ $d->waktu }}</td>
              <form action="{{ route('pendaftaranSiswa.update', $d->id) }}" method="post" enctype="multipart/form-data">
		      	  {{ csrf_field() }}
			        {{ method_field('PUT') }}
             
						<input style="display:none" type="text" class="form-control" id="tutor_id" name="tutor_id" value="{{ Auth::user()->id }}">
            <input style="display:none" type="text" class="form-control" id="nama_tutor" name="nama_tutor" value="{{ Auth::user()->name }}">

                        <td>
                        <!-- <input id="tutor_id" style="display:none" type="text" class="form-control" name="tutor_id"
                            required autofocus
                            value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                       <input id="nama_tutor" style="display:none" type="text" class="form-control" name="nama_tutor"
                            required autofocus
                            value="{{ Auth::user()->nama }}" style="text-transform: capitalize"> -->
                            
                        <button value="Diajukan Tutor" id="status" name="status" type="submit" class=" btn btn-sm btn-primary">{{ $d->status }}</button>
                        </td>
                        </form>
                    </tr>
                    @endforeach
                  
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
