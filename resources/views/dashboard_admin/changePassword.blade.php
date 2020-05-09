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
						        <h1>Ubah Password</h1>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/profileAdmin">Profile Admin</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Ubah Password
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
                    <!-- <a class="btn-edit" style="margin-left:auto;" href="/editAdmin">
                       Edit profile
                    </a> -->
      
                    <form method="POST" action="{{ route('change.password') }}">
                                @csrf

                                @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                                @endforeach

                                <div class="form-group">
                                    <label for="password">Password Lama</label>

                                    <input id="password" type="password" class="form-control" name="current_password"
                                        autocomplete="current-password">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password Baru</label>

                                    <input id="new_password" type="password" class="form-control" name="new_password"
                                        autocomplete="current-password">
                                </div>

                                <div class="form-group">
                                    <label for="password">Masukkan Ulang Password Baru</label>

                                    <input id="new_confirm_password" type="password" class="form-control"
                                        name="new_confirm_password" autocomplete="current-password">
                                </div>

                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary d-block"
                                        style="width: 180px; border-radius:50px;margin-left:35%;"
                                        onclick="return confirm('Anda yakin data sudah benar?')">
                                        Simpan
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-danger d-block" href="javascript:history.back()"
                                        style="width: 180px; border-radius:50px;"
                                        onclick="return confirm('Anda yakin ingin membatalkan?')">
                                        Batal
                                    </a>
                                </div>
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
</div>
</div>
</div>
    <!-- /.content-header -->
@endsection
