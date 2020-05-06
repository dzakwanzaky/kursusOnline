<!DOCTYPE html>
<html>
<style type="text/css">
    .help-block {
    color: red;
    font-weight: lighter;
    font-size: 14px;
}
.has-error {
     color: red;
}
</style>
<head>


    <link rel="stylesheet" href="{{asset('/assets/css/toastr.min.css')}}">


    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset=utf-8 />


  


</head>

</html>
@extends('murid/base')
@section('content')
<style type="text/css">
    .rounded img {
        border-radius: 52em;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Edit Profil</h1>
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
@php $no = 1; @endphp
@foreach($user as $d)
<form action="/profilMurid/{{$d->id}}/update" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-user mr-2"></i>Foto Profil

                            <hr class="photo">
                            <div class="d-flex justify-content-center" style="overflow-x:auto;">
                                
                                <div class="rounded" >
                            <img class="navbar-brand-full" src="{{$d->getAvatar()}}" width="180px" height="170px">
                        </div>
                                
                               

                            </div>
                            <br>
                            <div style="text-align:center">
                                <label for="change_pic">Ganti Foto Profil</label>

                                <br>
                                <strong style=>Info!</strong> Maksimal Ukuran Foto : 2MB
                                <input id="avatar" class="form-control {{$errors->has('avatar') ? ' has-error' : ''}}" name="avatar" type="file">
                                @if($errors->has('avatar'))
                                            <span class="help-block">{{$errors->first('avatar')}}</span>
                                        @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="w-100 table-responsive-md">
                                <tbody>
                                    <tr>
                                        <th>
                                            Nama Lengkap
                                            <input name="name" type="text" class="form-control {{$errors->has('name') ? ' has-error' : ''}}"
                                                value="{{$d->name}}" style="margin-right:190px;">
                                                @if($errors->has('name'))
                                            <span class="help-block">{{$errors->first('name')}}</span>
                                        @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            No Telepon
                                            <input name="phone" type="text" class="form-control {{$errors->has('phone') ? ' has-error' : ''}}"
                                                value="{{$d->phone}}" style="margin-right:190px;">
                                                 @if($errors->has('phone'))
                                            <span class="help-block">{{$errors->first('phone')}}</span>
                                        @endif
                                        </th>
                                       
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                            <input name="email" type="text" class="form-control {{$errors->has('email') ? ' has-error' : ''}}"
                                                value="{{$d->email}}" style="margin-right:190px;">
                                                @if($errors->has('email'))
                                            <span class="help-block">{{$errors->first('email')}}</span>
                                        @endif
                                        </th>
                                    </tr>
                                     <tr>
                                        <th>
                                            Jenis Kelamin
                                            
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                               <option value="0" disabled="true" selected="true">--Jenis Kelamin--</option>
                                <option value="Laki-Laki" @if($d->jenis_kelamin=="Laki-Laki") selected @endif >Laki-Laki</option>
                                <option value="Perempuan" @if($d->jenis_kelamin=="Perempuan") selected @endif >Perempuan</option>
                            </select>
                                              
                                                
                                        </th>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                       
                                    </tr>
                                    <input type=" text" class="form-control" id="status" name="status"
                                        value=" {{ $d->status }}" style="display:none">
                                </tbody>
                            </table>
                            <div class="form-group">
                            </div>
                            <td>
                                <button type="submit" class="btn btn-md btn-success">Simpan</button>
                                <a href="/profile" class="btn btn-md btn-danger">Batal</a>
                            </td>




                        </div>
</form>
<!-- /.col-md-6 -->
@endforeach
</div>
</div>

<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection


<script src="{{asset('/assets/js/toastr.min.js')}}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>
