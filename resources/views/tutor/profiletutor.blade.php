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
                    @if($d->foto==null)
                    <img class="navbar-brand-full" src="{{('/tema/images/user.png')}}" width="300px" alt="upload foto" style="display:block; margin-left:auto; margin-right:auto;">
                    @else
                        <a href="{{ url('/data_file/'.$d->foto) }}" target="_blank">
                          <img width="300px" src="{{ url('/data_file/'.$d->foto) }}" style="display:block; margin-left:auto; margin-right:auto;">
                        </a>   
                    @endif                
                 </div>
					<div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="name" name="nama" value="{{ $d->nama_tutor }}" disabled >
					</div>
          <div class="form-group">
						<label for="">Alamat :</label>
						<input type="text" class="form-control" id="email" name="email" value="{{ $d->provinsi }} {{ $d->kota }} {{ $d->kecamatan }}" disabled>
					</div>
          <div class="form-group">
						<label for="">Pendidikan :</label>
						<input type="text" class="form-control" id="pendidikan" name="pendidikan" value=" {{ $d->pendidikan }} " disabled> 
					</div>

          <div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="mata_pelajaran1" name="mata_pelajaran1" value="{{ $d->mata_pelajaran1 }}  {{ $d->mata_pelajaran2 }}  {{ $d->mata_pelajaran3 }}   {{ $d->mata_pelajaran4 }} {{ $d->mata_pelajaran5 }} {{ $d->mata_pelajaran6 }} {{ $d->mata_pelajaran7 }} {{ $d->mata_pelajaran8 }} {{ $d->mata_pelajaran9 }}" disabled> 
					</div>
          
          <a href="{{route('register.edit',$d->id)}}" class="btn-edit-info" style="margin-left:auto;">Edit Informasi Login</a> 			
          @endforeach
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
  