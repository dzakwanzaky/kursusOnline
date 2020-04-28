@include('base/header_page')
@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Inofa Course</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="main">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <br>
                <div class="col-md-12 col-md-offset-1">
                    <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
                        <div class="card-body">
                            <form method="POST" action="{{ route('dataSiswa.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <h2 class="form-title">Profile Siswa</h2>

                                <input id="id" value="{{ Auth::user()->id }}" type="text" class="form-control" name="id"
                                    required autofocus style="display:none">

                                <input id="nama_siswa" value="{{ Auth::user()->name }}" type="text" class="form-control"
                                    name="nama_siswa" required autofocus style="display:none">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Jenis Kelamin</label>

                                    <div class="form-title">

                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>

                                    <div class="form-title">

                                        <input class="form-control" id="tanggal" name="tanggal_lahir"
                                            placeholder="MM/DD/YYY" type="text">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label id="prov" for="prov">Provinsi</label>

                                    <select class="form-control" id="provinsi-select" name="provinsi-select">
                                        <option value="">Provinsi</option>

                                        @foreach($provinsi as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div name="provinsi" id="provinsi"></div>


                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label for="kabkot">Kota/Kabupaten</label>
                                    </div>
                                    <select class="form-control" id="kabupaten-select" name="kabupaten-select">
                                        <option>Kota/Kabupaten</option>
                                    </select>
                                </div>

                                <div name="kabupaten" id="kabupaten"></div>


                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label>Kecamatan</label>
                                    </div>
                                    <select class="form-control" id="kecamatan-select" name="kecamatan-select">
                                        <option>Kecamatan</option>
                                    </select>
                                </div>

                                <div name="kecamatan" id="kecamatan"></div>


                                <div class="form-group">
                                    <label for="alamat_detail">Alamat Detail</label>
                                    <div class="form-title">
                                        <textarea id="alamat_detail" type="text" class="form-control"
                                            name="alamat_detail" rows="3"
                                            placeholder="Petunjuk arah atau alamat detail untuk menuju alamat rumah"
                                            required></textarea>
                                    </div>
                                </div>

                                <br>
                                <div class="panel-body">
                                    <div class="alert alert-danger">
                                        <strong>Info!</strong> Maximum Size Upload : 2MB
                                    </div>
                                    Foto Diri
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="file" name="file">
                                    </div>
                                    <input id="status" type="text" name="status" class="form-control"
                                        value="BELUM DIBAYAR" style="display:none" required>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary d-block"
                                            style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;">
                                            Save
                                        </button>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
@section('day')
<script>
    // $('#kabupaten').hide();
    $(document).ready(function () {
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
    });
</script>
@endsection
