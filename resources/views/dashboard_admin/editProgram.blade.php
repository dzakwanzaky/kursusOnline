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
						        <p style="font-size:24px"> Edit Program</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Admin</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Edit Program
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
      
					<div class="form-group">
						<label for="">Nama Program :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="" >
					</div>

					<div class="form-group">
						<label for="">Fasilitas :</label>
						<input type="text" class="form-control" id="fasilitas" name="fasilitas" value="" >
					</div>

					<div class="form-group">
						<label for="">Durasi :</label>
						<input type="text" class="form-control" id="durasi" name="durasi" value="" >
					</div>

                    <div class="form-group">
						<label for="">Jumlah Pertemuan :</label>
						<input type="text" class="form-control" id="pertemuan" name="pertemuan" value="" >
					</div>

                    <div class="form-group">
						<label for="">Harga :</label>
						<input type="text" class="form-control" id="harga" name="harga" value="" >
					</div>

                    <div class="form-group">
						<label for="">Keterangan :</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" value="" >
					</div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-md btn-success">Simpan</button>
                            <a href="/manajemenProgram" class="btn btn-md btn-danger">Batal</a>
                    </div>
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
