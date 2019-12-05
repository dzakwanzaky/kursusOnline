@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
	  <div class="row mb-2">
          <div class="col-md-8 col-md-offset-6" >
            <div class="box box-primary">
              <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Profile Tutor</p>
					  </div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right" style="font-size:14px">
							<li class="breadcrumb-item">
								<a href="/manajemenTutor">Daftar Tutor</a>
							</li>
							<li class="breadcrumb-item active">
								Profile Tutor
							</li>
						</ol>
					</div>			
			  	</div>			
                </div>
            </div>
			<hr>		
            <div class="form-group">
							<label for="nama">Foto :</label>
						<div> <a href="#" target="_blank">
						<img width="150px" height="200px" src="#" style="display:block;margin-left:auto;margin-right:auto">
						</a>
					</div>

					<div class="form-group">
						<label for="">Nama :</label>
						<input type="text" class="form-control" id="nik" name="nik" value="Dewandaru Aji Darma" disabled>
					</div>

					<div class="form-group">
						<label for="">Pendidikan :</label>
						<input type="text" class="form-control" id="nama" name="nama" value="S1 Ilmu Komputer" disabled>
					</div>

					<div class="form-group">
						<label for="">Alamat :</label>
						<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="Pogung" disabled>
					</div>

					<div class="form-group">
						<label for="">Mata Pelajaran :</label>
						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="Matematika" disabled> 
					</div>

					<div class="form-group">
						<label for="">Jumlah Siswa</label>
						<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="5" disabled>
					</div>

					<div class="form-group">
						<label for="">Telepon :</label>
						<input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="081218099939" disabled>
					</div>

					<div class="form-group">
						<label for="">Status :</label>
						<input type="text" class="form-control" id="jabatan" name="jabatan" value="AKTIF" disabled>
					</div>
				</form>
            <br />
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
</div>
</div>
</div>
    <!-- /.content-header -->
@endsection
