@extends('murid/baseey')
@section('content')
<style>
  .card {
    width: 69%;
    margin-left: 150px;

}
  .help-block {
    color: red;
    font-size: 15px;
    margin-left: 17em;
}
.has-error {
     color: red;
}
.modall-title {
    margin-left: 8em;
}
.h6 {
    text-align: center;
    margin-top: 15px;
    font-color: #6c757d;
}
   @media screen and (width: 768px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
  .help-block {
    color: red;
    font-size: 14px;
    margin-top: 0em;
    margin-left: 12em;
}
    }
 @media screen and (width: 736px) {

  .card {
    width: 80%;
    margin-left: 4.5em;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
 @media screen and (width: 667px) {

  .card {
    width: 80%;
    margin-left: 4em;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
     @media screen and (width: 812px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 14em;
}
    }
   @media screen and (width: 375px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
   @media screen and (width: 320px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
    @media screen and (width: 360px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
   @media screen and (width: 414px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
   @media screen and (width: 411px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
 @media screen and (width: 568px) {

  .card {
    width: 75%;
    margin-left: 4em;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
 @media screen and (width: 640px) {

  .card {
    width: 75%;
    margin-left: 5em;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
 @media screen and (width: 823px) {

  .card {
    width: 75%;
    margin-left: 4em;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 11em;
}
    }
 @media screen and (width: 731px) {

  .card {
    width: 75%;
    margin-left: 5em;

}
  .help-block {
    color: red;
    font-size: 13px;
    margin-left: 1em;
}
    }
@media screen and (width: 1024px) {

  .card {
    width: 100%;
    margin-left: 1px;

}
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
</style>
<link rel="stylesheet" href="{{asset('/assets')}}/bootstrap/css/bootstrap.min.css">

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
                                    Ubah Kata Sandi
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
              <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
   
                        
                          <p><center style="font-size:24px">Ubah Kata Sandi</center></p>
  <br>
  <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi Lama</label>
  
                            <div class="col-md-6{{$errors->has('current_password') ? ' has-error' : ''}}">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                            @if($errors->has('current_password'))
                                            <span class="help-block">{{$errors->first('current_password')}}</span>
                                        @endif
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi Baru</label>
  
                            <div class="col-md-6{{$errors->has('new_password') ? ' has-error' : ''}}">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                            @if($errors->has('new_password'))
                                            <span class="help-block">{{$errors->first('new_password')}}</span>
                                        @endif
                        </div>
  
                       

                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Konfirmasi Kata Sandi Baru</label>
  
                            <div class="col-md-6{{$errors->has('new_confirm_password') ? ' has-error' : ''}}">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                            @if($errors->has('new_confirm_password'))
                                            <span class="help-block">{{$errors->first('new_confirm_password')}}</span>
                                        @endif
                        </div>
  

   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                Ubah Kata Sandi
                                </button>

                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content2">
      <div class="modal-header">
        <h5 class="modall-title" id="exampleModalLabel2">Konfirmasi Aksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="h6" style="color: #2c3034">Anda yakin <br>ingin merubah kata sandi akun Anda ?</h6>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Yakin</button>
      </div>
    </div>
  </div>
</div>
                              
                            </div>
                        </div>
                    </form>
              <br>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content -->
    <script>
        //buat profile
        $(function () {
            $("#file").change(function () {
                readURL(this);
            });
        });


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    //alert(e.target.result);
                    $('#profile-picture').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
   
<script src="{{asset('/assets')}}/bootstrap/js/bootstrap.min.js"></script>
  @endsection