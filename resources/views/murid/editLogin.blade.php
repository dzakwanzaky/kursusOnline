@extends('murid/baseey')
@section('content')
@if(session('success'))
<div class="alert alert-info" role="alert">
  {{ session('success') }}
</div>
@endif

@if(session('warning'))
<div class="alert alert-warning" role="alert">
  {{ session('warning') }}
</div>
@endif
 <link rel="stylesheet" href="{{asset('/assets/css/toastr.min.css')}}">
<link rel="stylesheet" href="{{asset('/assets')}}/bootstrap/css/bootstrap.min.css">
<style>
  .card {
    width: 60%;
    margin-left: 210px;
  }
  .help-block {
    color: red;
    font-size: 15px;
}
.has-error {
     color: red;
}
@media screen and (width: 375px) {
.modall-title {
    margin-left: 5em;
}
  }
  @media screen and (width: 360px) {
.modall-title {
    margin-left: 4em;
}
  }
    @media screen and (width: 320px) {
.modall-title {
    margin-left: 3em;
}
  }
    @media screen and (width: 414px) {
.modall-title {
    margin-left: 6em;
}
  }

    @media screen and (width: 411px) {
.modall-title {
    margin-left: 6em;
}
  }
    @media screen and (width: 568px) {
.modall-title {
    margin-left: 9em;
}
  }


  @media screen and (width: 1024px) {
     .card {
    width: 60%;
    margin-left: 9em;
  }
  }
  @media screen and (width: 768px) {
     .card {
    width: 70%;
    margin-left: 5em;
  }
  }
   @media screen and (width: 736px) {
     .card {
    width: 70%;
    margin-left: 7em;
  }
  }
  @media screen and (width: 731px) {
     .card {
    width: 70%;
    margin-left: 6em;
  }
  }
     @media screen and (width: 667px) {
     .card {
    width: 70%;
    margin-left: 6em;
  }
  }
   @media screen and (width: 640px) {
     .card {
    width: 70%;
    margin-left: 5.5em;
  }
  }
     @media screen and (width: 568px) {
     .card {
    width: 70%;
    margin-left: 5em;
  }
  }
    @media screen and (width: 812px) {
     .card {
    width: 70%;
    margin-left: 5em;
  }
  }
     @media screen and (width: 823px) {
     .card {
    width: 70%;
    margin-left: 5em;
  }
  }
  @media screen and (width: 375px) {
     .card {
    width: 80%;
    margin-left: 2em;
  }
  }
  @media screen and (width: 360px) {
     .card {
    width: 90%;
    margin-left: 1em;
  }
  }
  @media screen and (width: 320px) {
     .card {
    width: 90%;
    margin-left: 1em;
  }
  }
  @media screen and (width: 414px) {
     .card {
    width: 82%;
    margin-left: 2em;
  }
  }
   @media screen and (width: 411px) {
     .card {
    width: 82%;
    margin-left: 2em;
  }
  }

</style>
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
						  
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/murid">Siswa</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Ubah Akun Siswa
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
<p><center style="font-size:24px">Ubah Akun Siswa</center></p>
          <div class="form-group">
            <label for="">Nama Lengkap :</label>
             <div class="form_login{{$errors->has('name') ? ' has-error' : ''}}">
            <input type="text" class="form-control" id="name" name="name" value="{{$d->name}}">
          </div>
                                        @if($errors->has('name'))
                                            <span class="help-block">{{$errors->first('name')}}</span>
                                        @endif
        </div>
          <div class="form-group">
						<label for="">No Telepon :</label>
            <div class="form_login{{$errors->has('phone') ? ' has-error' : ''}}">
						<input type="text" class="form-control" id="phone" name="phone" value="{{$d->phone}}">
					</div>
          @if($errors->has('phone'))
          <span class="help-block">{{$errors->first('phone')}}</span>
          @endif
        </div>

					<div class="form-group">
						<label for="">Email :</label>
            <div class="form_login{{$errors->has('email') ? ' has-error' : ''}}">
						<input type="text" class="form-control" id="email" name="email" value="{{$d->email}}">
					</div>
          @if($errors->has('email'))
          <span class="help-block">{{$errors->first('email')}}</span>
          @endif
        </div>

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
 
  @endsection
        <script src="{{asset('/assets/js/toastr.min.js')}}"></script>
           <script src="{{asset('/assets')}}/js/bootstrap.min.js"></script>
