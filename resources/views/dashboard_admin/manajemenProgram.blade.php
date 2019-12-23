@extends('dashboard_admin/base')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manajemen Program</h1>
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
              <table class="table table-bordered table-striped table-responsive-sm" id="program"> 
              <thead class="thead-dark"> 
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                  <th>No.</th>
                  <th>Nama Program</th>
                  <th>Fasilitas</th>
                  <th>Durasi</th>
                  <th>Jumlah Pertemuan</th>
                  <th>Harga</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
               </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Gold</td>
                  <td>Fasilitas</td>
                  <td>Durasi</td>
                  <td>Jumlah Pertemuan</td>
                  <td>Harga</td>
                  <td>Keterangan</td>
                  <td>
                    <a href="/editProgram" class=" btn btn-sm btn-success">
                      <span class="fa fa-edit"></span>
                    </a>
                    <button class="btn btn-sm btn-danger" type="submit">
                      <span class="fa fa-trash"></span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Premium</td>
                  <td>Fasilitas</td>
                  <td>Durasi</td>
                  <td>Jumlah Pertemuan</td>
                  <td>Harga</td>
                  <td>Keterangan</td>
                  <td>
                    <a href="/editProgram" class=" btn btn-sm btn-success">
                      <span class="fa fa-edit"></span>
                    </a>
                    <button class="btn btn-sm btn-danger" type="submit">
                      <span class="fa fa-trash"></span>
                    </button>
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
  @endsection
  @section('sweet')
  <script>
         $(document).ready( function () {
           $('#program').DataTable();
           });
      </script>
  @endsection