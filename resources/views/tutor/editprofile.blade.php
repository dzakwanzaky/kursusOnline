@extends('tutor/base')
@section('content')
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
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-md-right" style="font-size:14px">
                                    <li class="breadcrumb-item">
                                        <a href="/tutor">Tutor</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Profile Tutor
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
@php $no = 1; @endphp
@foreach($data as $d)
<form action="{{ route('dataTutor.update', $d->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-user mr-2"></i>Foto Profile

                            <hr class="photo">
                            <div class="d-flex justify-content-center" style="overflow-x:auto;">
                                @if($d->foto==null)
                                <img id="gambar" class="navbar-brand-full" src="{{('/tema/images/user.png')}}"
                                    width="300px" alt="upload foto"
                                    style="display:block; margin-left:auto; margin-right:auto;">
                                @else
                                <a href="{{ url('/data_file/'.$d->foto) }}" target="_blank">
                                    <img id="gambar" width="250px" src="{{ url('/data_file/'.$d->foto) }}"
                                        style="display:block; margin-left:auto; margin-right:auto;">
                                </a>
                                @endif

                            </div>
                            <br>
                            <div style="text-align:center">
                                <label for="change_pic">Ganti Foto Profile</label>

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
                                            Provinsi
                                            <input name="provinsi" type="text" class="form-control"
                                                value="{{ $d->provinsi }}" style="margin-right:190px;">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Kabupaten
                                            <input name="kabupaten" type="text" class="form-control"
                                                value="{{ $d->kabupaten }}" style="margin-right:190px;">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Kecamatan
                                            <input name="kecamatan" type="text" class="form-control"
                                                value="{{ $d->kecamatan }}" style="margin-right:190px;">
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Jenis Kelamin
                                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                                <option value="{{ $d->jenis_kelamin }}">{{ $d->jenis_kelamin }}</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Tanggal Lahir
                                            <input class="form-control" id="tanggal" name="tanggal_lahir"
                                                placeholder="MM/DD/YYY" type="text" value="{{ $d->tanggal_lahir }}">
                                        </th>
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