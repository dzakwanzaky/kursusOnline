@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
	  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
					        <div class="col-sm-6">
						        <p style="font-size:24px">Profile Tutor</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/daftarTutor">Tutor</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Profile Tutor
                                </li>
                            </ol>
                        </div>			
			  	           </div>			
                </div>
            </div>
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="form-group">
                @php $no = 1; @endphp
                @foreach($data as $d)
          <div class="form-group">
            <a href="{{ url('/data_file/'.$d->foto) }}" target="_blank">
            <img width="300px" src="{{ url('/data_file/'.$d->foto) }}">
            </a>
          </div>

          <div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="nama_tutor" name="nama_tutor" value="{{$d->nama_tutor}}" disabled>
          </div>
          
          <div class="form-group">
						<label for="">Curriculum Vitae :</label>
            <a class="form-control-grey" width="100px" href="{{ url('/data_file/'.$d->file) }}" target="_blank">Curriculum Vitae</a>
					</div>

					<div class="form-group">
						<label for="">Provinsi :</label>
						<input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $d->provinsi }}" disabled>
					</div>

					<div class="form-group">
						<label for="">Kecamatan :</label>
						<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $d->kecamatan }}" disabled>
					</div>

					<div class="form-group">
						<label for="">Kota :</label>
						<input type="text" class="form-control" id="kota" name="kota" value=" {{ $d->kabupaten }}" disabled> 
					</div>

          <div class="form-group">
						<label for="">Pendidikan :</label>
						<input type="text" class="form-control" id="pendidikan" name="pendidikan" value=" {{ $d->pendidikan }}" disabled> 
					</div>

          <div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="mata_pelajaran1" name="mata_pelajaran1" value=" {{ $d->mata_pelajaran1 }} {{ $d->mata_pelajaran2 }} {{ $d->mata_pelajaran3 }} {{ $d->mata_pelajaran4 }} {{ $d->mata_pelajaran5 }} {{ $d->mata_pelajaran6 }} {{ $d->mata_pelajaran7 }} {{ $d->mata_pelajaran8 }} {{ $d->mata_pelajaran9 }}" disabled> 
					</div>    
      @endforeach
				
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
</div>
</div>
    <!-- /.content-header -->
@endsection
