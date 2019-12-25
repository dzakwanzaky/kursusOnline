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
              <div class="alert alert-info" style="font-size:14px">
                        <strong>INFO!</strong> Jika ingin mengubah isi paket program, klik tombol<strong>EDIT</strong>
                        pada kolom aksi dan nanti akan menuju ke halaman edit untuk mengubah isi paket program.
                    </div>
              <table class="table table-bordered table-striped table-responsive-md" id="program"> 
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
              @php $no = 1; @endphp
                    @foreach($data as $d)
                    <tr>   
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->program }}</td>
                        <td>{{ $d->fasilitas }}</td>
                        <td>{{ $d->durasi }}</td>
                        <td>{{ $d->jumlah_pertemuan }}</td>
                        <td>{{ $d->harga}}</td>
                        <td>{{ $d->keterangan}}</td>
                        <td>
				<a href="{{route('program.edit',$d->id)}}" class="btn btn-md btn-success" style="float:right">Edit</a>       
			</td>
            
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
  @endsection
  @section('sweet')
  <script>
         $(document).ready( function () {
           $('#program').DataTable();
           });
      </script>
  @endsection