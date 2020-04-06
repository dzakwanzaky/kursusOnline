
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
              <div class="form-group"> <!-- Date input -->
                <label  class="control-label" for="tanggal">Date</label>
                <input class="form-control" id="tanggal" name="tanggal" placeholder="MM/DD/YYY" type="text"/>
              </div>
              <div class="form-group">
              <label for="name" >Waktu Mulai</label>
              <input class="form-control" id="single-input" name="waktu_mulai" value="">
              </div>
              <div class="form-group">
						    <label for="name">Waktu Selesai :</label>
                <input class="form-control" id="single-input-2" name="waktu_selesai" value="">
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
   $(document).ready(function(){
      var date_input=$('input[name="tanggal"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd MM yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      
  
    })
  </script>
  <script>
var input = $('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});
var input = $('#single-input-2').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
});
  </script>

 
  @endsection