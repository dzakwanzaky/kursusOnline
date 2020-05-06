<!DOCTYPE html>
<html>

<head>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
        rel="stylesheet" type="text/css" />
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
@foreach($data as $d)
<form action="{{ route('dataSiswa.update', $d->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-user mr-2"></i>Foto Profil

                            <hr class="photo">
                            <div class="d-flex justify-content-center" style="overflow-x:auto;">
                                @if($d->file==null)
                                <div class="rounded" >
                            <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="180px" height="180px">
                        </div>
                                @else
                                <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                <div class="rounded">
                                <img width="180px" height="180px" src="{{ url('/data_file/'.$d->file) }}">
                            </a>
                        </div>
                                @endif

                            </div>
                            <br>
                            <div style="text-align:center">
                                <label for="change_pic">Ganti Foto Profil</label>

                                <br>
                                <strong style=>Info!</strong> Maximum Size Upload : 2MB
                                <input id="foto" class="form-control" name="foto" type="file">
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
                                            <input name="provinsi" type="text" class="form-control"
                                                value="" style="margin-right:190px;">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            No Telepon
                                            <input name="kabupaten" type="text" class="form-control"
                                                value="" style="margin-right:190px;">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                            <input name="kecamatan" type="text" class="form-control"
                                                value="{{ $d->kecamatan }}" style="margin-right:190px;">
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
@section('sweet')
<script>
    //buat profile
    $(function () {
        $("#foto").change(function () {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        var date_input = $('input[name="tanggal_lahir"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() :
            "body";
        var options = {
            format: 'dd MM yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);


    })
</script>
@endsection