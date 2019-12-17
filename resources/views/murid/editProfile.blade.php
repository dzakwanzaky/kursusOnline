<!DOCTYPE html>
<html>
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
</head>
</html>
@extends('murid/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Profile Siswa</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/murid">Siswa</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Profile Siswa
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
              @php $no = 1; @endphp
                @foreach($data as $d)
                <form action="{{ route('dataSiswa.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
                <div class="form-group">
                    <div class="form-group">
                        <label for="file">Foto :</label>
                        <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                          <img width="300px" src="{{ url('/data_file/'.$d->file) }}">
                          </a>                   
                 </div>

                 <div class="middles">
				<div class="text">
				  <label for="change_pic">Change Photo</label>
				  <div class="form-group">
				  <div class="alert alert-info">
							<strong>Info!</strong> Maximum Size Upload : 2MB
					</div>
					<input id="file" class="form-control" name ="file" type="file">
				  	</div>
				</div>
			  </div>
			</div>


                    <div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{$d->nama_siswa}}">
					</div>

					<div class="form-group">
						<label for="">Provinsi :</label>
						<input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $d->provinsi }}">
					</div>

					<div class="form-group">
						<label for="">Kecamatan :</label>
						<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $d->kecamatan }}">
					</div>

					<div class="form-group">
						<label for="">Kota :</label>
						<input type="text" class="form-control" id="kota" name="kota" value=" {{ $d->kota }}"> 
					</div>

          <input type="text" class="form-control" id="status" name="status" value=" {{ $d->status }}" style="display:none"> 

                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-success">Simpan</button>
                        <a href="/profileMurid" class="btn btn-md btn-danger">Batal</a>
                </div>
				</form>
              </div>
            </div>
            @endforeach            

            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <script>
		//buat profile
		$(function () {
			$("#file").change(function () {
				readURL(this);
			});
    	});


    	function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					//alert(e.target.result);
					$('#profile-picture').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
    	}
	</script>
 
  @endsection