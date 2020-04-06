@extends('dashboard_admin/base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kehadiran Tutor</h1>
            
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
            <div class="card-body table-responsive-m"  style="overflow-x:auto;" >             
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark"> 
                   <tr>
                        <th>Pertemuan Ke</th>
                        <th>Tanggal</th>
                        <th>Kehadiran</th>
                        <th>Report</th>   
                        <th>Aksi</th>
                    </tr>
                </thead>
                @php $no = 1; @endphp
                @foreach($data as $d)
                <tbody>
                        <tr>
                           <td>{{ $no++ }}</td>
                           <td>{{ $d->tanggal }}</td>
                           <td>{{ $d->report }}</td>
                          <td>{{ $d->kehadiran }} </td>
                          <td>
                          <button>
                          sebuah aksi
                          </button>
                          </td>       
                        </tr>  
                        @endforeach
       
                </table>
              </div>
            </div>     
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content -->
  @endsection
  @section('sweet')
  <script>
         $(document).ready( function () {
           $('#jadwal').DataTable();
           });
  </script>
  <script>
      $(document).ready(function() {
        $('#hari3td').each(function(){
          if ($(this).text().trim().length == 0) {
            $('#hari3').hide();
            $('#hari3td').hide();
          }
        });
        $('#hari2td').each(function(){
          if ($(this).text().trim().length == 0) {
            $('#hari2').hide();
            $('#hari2td').hide();
          }
        });
      });
  </script>
  @endsection