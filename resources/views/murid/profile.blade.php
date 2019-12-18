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
						        <p style="font-size:24px">Profile Murid</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/murid">Murid</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Profile Murid
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
                  
                </div>
                @php $no = 1; @endphp
      @foreach($data as $d)
          <td>
				<a href="{{route('dataMurid.edit',$d->id)}}" class="btn-edit" style="margin-left:auto;">Edit Profile</a>       
			</td>
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Foto :</label>
                        <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                          <img width="300px" src="{{ url('/data_file/'.$d->file) }}">
                        </a>                     
                     </div>
                    <div class="form-group">
						<label for="">Nama Lengkap :</label>
						<input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $d->nama_siswa }}" disabled >
					</div>
          <div class="form-group">
						<label for="">Alamat :</label>
						<input type="text" class="form-control" id="email" name="email" value="{{ $d->provinsi }} {{ $d->kota }} {{ $d->kecamatan }}" disabled>
					</div>

				  @endforeach
          <a href="{{route('editMurid',$d->id)}}"  class="btn-edit-login" style="margin-left:auto;">Edit Data Login</a> 
      
          @foreach($user as $u)
          <div class="form-group">
						<label for="">No Telepon :</label>
						<input type="text" class="form-control" id="phone" name="phone" value="{{ $u->phone }}" disabled>
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