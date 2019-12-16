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
              <div class="form-group">

              @php $no = 1; @endphp
                @foreach($data as $d)
                <form action="{{ route('register.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}

          <div class="form-group">
						<label for="">No Telepon :</label>
						<input type="text" class="form-control" id="phone" name="phone" value="{{$d->phone}}">
					</div>

					<div class="form-group">
						<label for="">Email :</label>
						<input type="text" class="form-control" id="email" name="email" value="{{$d->email}}">
					</div>

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