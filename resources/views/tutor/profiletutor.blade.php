@extends('tutor/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-8 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
					  <div class="col-sm-5">
						  <p style="font-size:24px">Profile Tutor</p>
					  </div>
                        <div class="col-sm-5">
                            <ol class="breadcrumb float-sm-right" style="font-size:14px">
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
                    <!-- <a class="btn-edit" style="margin-left:auto;" href="/edit">
                       Edit profile
                    </a> -->
                </div>
          <!-- @php $no = 1; @endphp -->
          @php $no = 1; @endphp
      @foreach($data as $d)
          <td>
				<a href="{{route('dataTutor.edit',$d->id)}}" class="btn-edit" style="margin-left:auto;">Edit Profile</a>       
			</td>
  
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Foto :</label>
                        <img width="200px" height="200px" src="/tema/uploads/testi_02.png" style="display:block;margin-left:auto;margin-right:auto">
                    </div>
					<div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="name" name="nama" value="{{ $d->nama_tutor }}" disabled >
					</div>
          <div class="form-group">
						<label for="">Alamat :</label>
						<input type="text" class="form-control" id="email" name="email" value="{{ $d->provinsi }} {{ $d->kota }} {{ $d->kecamatan }}" disabled>
					</div>
          @endforeach
          <a href="{{route('register.edit',$d->id)}}" class="btn-edit" style="margin-left:auto;">Edit Informasi Login</a> 
      
          @foreach($user as $u)
          <div class="form-group">
						<label for="">No Telepon :</label>
						<input type="text" class="form-control" id="no" name="no" value="{{ $u->phone }}" disabled>
					</div>
					<div class="form-group">
						<label for="">Email :</label>
						<input type="text" class="form-control" id="email" name="email" value="{{ $u->email }}" disabled>
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