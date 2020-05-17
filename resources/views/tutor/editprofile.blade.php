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
                                        <a href="/profile">Profile Tutor</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Edit Profile
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
                                @endforeach
                                @foreach($user as $d)
                                <div class="form-group">
                                        <label for="">Nama :</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{$d->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">No Telepon :</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{$d->phone}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email :</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{$d->email}}">
                                    </div>
                                @endforeach
                                @foreach($data as $d)

                                    <div class="form-group">
                                        <label id="prov" for="prov">Provinsi</label>

                                        <select class="form-control" id="provinsi-select" name="provinsi-select">
                                            <option value="{{ $d->provinsi }}">{{ $d->provinsi }}</option>

                                            @foreach($provinsi as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div name="provinsi" id="provinsi" value="{{$d->provinsi}}" style="display:none">
                                    <input type="text" name="provinsi" value="{{$d->provinsi}}">
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label for="kabkot">Kota/Kabupaten</label>
                                        </div>
                                        <select class="form-control" id="kabupaten-select" name="kabupaten-select" >
                                            <option value="{{ $d->kabupaten }}">{{ $d->kabupaten }}</option>
                                        </select>
                                    </div>

                                    <div name="kabupaten" id="kabupaten" value="{{$d->kabupaten}}" style="display:none">
                                    <input type="text" name="kabupaten" value="{{$d->kabupaten}}">
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label>Kecamatan</label>
                                        </div>
                                        <select class="form-control" id="kecamatan-select" name="kecamatan-select">
                                            <option value="{{ $d->kecamatan }}">{{ $d->kecamatan }}</option>
                                        </select>
                                    </div>

                                    <div name="kecamatan" id="kecamatan" value="{{$d->kecamatan}}" style="display:none">
                                    <input type="text" name="kecamatan" value="{{$d->kecamatan}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Alamat Detail :</label>
                                        <input type="text" class="form-control" id="alamat_detail" name="alamat_detail"
                                            value="{{$d->alamat_detail}}">
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                            <option value="{{ $d->jenis_kelamin }}">{{ $d->jenis_kelamin }}</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label> Tanggal Lahir
                                            </label>
                                        </div>
                                        <input class="form-control" id="tanggal" name="tanggal_lahir"
                                            placeholder="MM/DD/YYY" type="text" value="{{ $d->tanggal_lahir }}">
                                    </div>

                                    <input type=" text" class="form-control" id="status" name="status"
                                        value=" {{ $d->status }}" style="display:none">
                                </tbody>
                            </table>
                            <div class="form-group">
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

        $('#provinsi-select').change(function () {
            var provinsi_id = $(this).val();
            var provinsi_name = $("select[name='provinsi-select'] option:selected").text(); //add this
            if (provinsi_id) {
                $.ajax({
                    url: '/getKabupaten/' + provinsi_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#provinsi').empty(); //add this
                        $('#provinsi')
                            .append(
                                "<input type='text' style='display:none' name='provinsi' id='provinsi' value='" +
                                provinsi_name + "'>");
                        console.log(data);
                        $('#kabupaten-select').empty();
                        $.each(data, function (key, value) {
                            $('#kabupaten-select')
                                .append('<option value="' + key + '">' + value +
                                    '</option>');
                        });

                    }

                });
            } else {
                $('#kabupaten-select').empty();
            }
        });
        $('#kabupaten-select').change(function () {
            var kabupaten_id = $(this).val();
            var kabupaten_name = $("select[name='kabupaten-select'] option:selected").text(); //add this
            if (kabupaten_id) {
                $.ajax({
                    url: '/getKecamatan/' + kabupaten_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#kabupaten').empty(); //add this
                        $('#kabupaten')
                            .append(
                                "<input type='text' style='display:none' name='kabupaten' id='kabupaten' value='" +
                                kabupaten_name + "'>");
                        console.log(data);
                        $('#kecamatan-select').empty();
                        $.each(data, function (key, value) {
                            $('#kecamatan-select')
                                .append('<option value="' + key + '">' + value +
                                    '</option>');
                        });

                    }

                });
            } else {
                $('#kecamatan-select').empty();
            }
        });
        $('#kecamatan-select').change(function () {
            var kecamatan_name = $("select[name='kecamatan-select'] option:selected").text(); //add this
            $('#kecamatan').empty(); //add this
            $('#kecamatan')
                .append(
                    "<input type='text' style='display:none' name='kecamatan' id='kecamatan' value='" +
                    kecamatan_name + "'>");

        });
    });
</script>
@endsection