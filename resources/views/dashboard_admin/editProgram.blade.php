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
              @foreach($data as $d)
            <form action="{{ route('program.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
                <div class="form-group">
      
					<div class="form-group">
						<label for="">Nama Program :</label>
						<input type="text" class="form-control" id="program" name="program" value="{{ $d->program }}" >
					</div>

                    <div class="form-group">
						<label for="">Keterangan :</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $d->keterangan}}" >
					</div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-md btn-success" onclick="return confirm('Anda yakin ingin merubah data?')">Simpan</button>
                            <a href="/manajemenProgram" class="btn btn-md btn-danger">Batal</a>
                    </div>
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
</div>
</div>
</div>
    <!-- /.content-header -->
@endsection
