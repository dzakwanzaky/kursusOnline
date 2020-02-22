@extends('murid/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Presensi Les</h1>
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
              @foreach($data as $d)
            <form action="{{ route('absen.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
              <div class="form-group">
						    <label for="">Tanggal :</label>
						    <input type="text" class="form-control" id="tanggal" name="tanggal">
					    </div>
              <div class="form-group">
						    <label for="">Waktu Mulai :</label>
						    <input type="text" class="form-control" id="waktu_mulai" name="waktu_mulai">
					    </div>
              <div class="form-group">
						    <label for="">Waktu Selesai :</label>
						    <input type="text" class="form-control" id="waktu_selesai" name="waktu_selesai">
					    </div>
              <div class="form-group">
						    <label for="">Saran, Kritikan dan Masukkan :</label>
						    <input type="text" class="form-control" id="report" name="report">
					    </div>

              <input type="text" class="form-control" id="kehadiran" name="kehadiran" value="HADIR" style="display:none"></input>
              <div class="form-group"> 
                        <a>
                            <button type="submit" style="float:right" class="btn btn-md btn-success" >Submit</button>
                        </a>
                    </div>
                    @endforeach
  </form>
                </div>
              </div>
            </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  @endsection
  @section('sweet')
  <script>
  $(function(){
  $('#datepicker').datepicker();
  });
  </script>
  @endsection