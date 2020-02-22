@extends('tutor/base')
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
						  <p style="font-size:24px">Profile Tutor</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/tutor">Tutor</a>
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
                <form action="{{ route('dataTutor.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="">Foto :</label>
                        <br/>
                        <a href="{{ url('/data_file/'.$d->foto) }}" target="_blank">
                          <img width="300px" src="{{ url('/data_file/'.$d->foto) }}">
                        </a>                      </div>

                        <div class="middles">
				<div class="text">
				  <label for="change_pic">Change Photo</label>
				  <div class="form-group">
				  <div class="alert alert-info">
							<strong>Info!</strong> Maximum Size Upload : 2MB
					</div>
					<input id="foto" class="form-control" name ="foto" type="file">
				  	</div>
				</div>
			  </div>
			</div>

					<div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="nama_tutor" name="nama_tutor" value="{{$d->nama_tutor}}">
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
						<input type="text" class="form-control" id="kota" name="kota" value=" {{ $d->kabupaten }}"> 
					</div>

          <div class="form-group">
						<label for="">Pendidikan :</label>
						<input type="text" class="form-control" id="pendidikan" name="pendidikan" value=" {{ $d->pendidikan }}"> 
					</div>

          <div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="mata_pelajaran1" name="mata_pelajaran1" value=" {{ $d->mata_pelajaran1 }}"> 
					</div>

          <div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="mata_pelajaran2" name="mata_pelajaran2" value=" {{ $d->mata_pelajaran2 }}"> 
					</div>

          <div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="mata_pelajaran3" name="mata_pelajaran3" value=" {{ $d->mata_pelajaran3 }}"> 
					</div>

          <div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="mata_pelajaran4" name="mata_pelajaran4" value=" {{ $d->mata_pelajaran4 }}"> 
					</div>
          

          <input type="text" class="form-control" id="status" name="status" value=" {{ $d->status }}" style="display:none"> 


          <div class="form-group">
            <button type="submit" class="btn btn-md btn-success">Simpan</button>
            <a href="/profile" class="btn btn-md btn-danger">Batal</a>
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
 
  @endsection