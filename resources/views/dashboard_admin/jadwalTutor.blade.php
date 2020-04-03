@extends('dashboard_admin/base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Tutor</h1>
            
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
            <table class="table table-bordered table-striped table-responsive-md" id="jadwal">
                <thead class="thead-dark"> 
                   <tr>
                        <th>No.</th>
                        <th>Nama Murid</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Sesi 1</th>   
                        <th id="hari2">Sesi 2</th>
                        <th id="hari3">Sesi 3</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>     
                    @php $no = 1; @endphp
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_murid }}</td>
                        <td>{{ $d->kelas }}</td>
                        <td>{{ $d->mata_pelajaran }}</td>
                        <td>{{ $d->hari1 }} {{ $d->waktu_hari1 }}</td>
                        <td id="hari2td">{{ $d->hari2 }} {{ $d->waktu_hari2 }}</td>
                        <td id="hari3td">{{ $d->hari3 }} {{ $d->waktu_hari3 }}</td>
                        <td>
                        <a type="button" class="btn btn-sm btn-primary" href="{{route('kehadiranTutor', $d->id)}}">
                        Liat Kehadiran
                        </a>
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