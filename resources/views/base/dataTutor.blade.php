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
                            <form method="POST" action="{{ route('dataTutor.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <h2 class="form-title">Profile Tutor</h2>

                                <input id="id" value="{{ Auth::user()->id }}" type="text" class="form-control" name="id"
                                    required autofocus style="display:none">

                                <input id="nama_tutor" value="{{ Auth::user()->name }}" type="text" class="form-control"
                                    name="nama_tutor" required autofocus style="display:none">

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Jenis Kelamin</label>

                                    <div class="form-title">

                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>

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
                                            placeholder="Masukkan petunjuk arah atau alamat detail" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                                    <label for="pendidikan">Pendidikan Terakhir</label>

                                    <div class="form-title">
                                        <select id="pendidikan" name="pendidikan" class="form-control" required>
                                            <option value="SMA">SMA/SMK sederajat</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" name="program">
                                    <label for="progran">Program Yang Ingin Diajar</label>

                                    <div class="form-title">

                                        <select id="program" name="program_id" class="form-control" required>
                                            <option value="">Pilih Program</option>
                                            @foreach($program as $d)
                                            <option value="{{ $d->id }}">{{ $d->program }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group" id="kelasSD" required>
                                    <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                    <div class="form-round">
                                        @foreach($ksd as $d)
                                        <input id="kelas_id" type="checkbox" name="kelas_id[]" value="{{ $d->id }}" />
                                        {{ $d->kelas }} SD<br>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="form-group" id="kelasSMP" name="kelasSMP" required>
                                    <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                    <div class="form-round">
                                        @foreach($ksmp as $d)
                                        <input id="kelas_id" type="checkbox" name="kelas_id[]" value="{{ $d->id }}" />
                                        {{ $d->kelas }} SMP<br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group" id="kelasSMA" name="kelasSMA" required>
                                    <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                    <div class="form-round">
                                        @foreach($ksma as $d)
                                        <input id="kelas_id" type="checkbox" name="kelas_id[]" value="{{ $d->id }}" />
                                        {{ $d->kelas }} SMA<br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group" id="matpelSD" name="matpelSD" required>
                                    <label for="mata_pelajaran">Mata Pelajaran</label>
                                    <div class="form-round">
                                        @foreach($sd as $d)
                                        <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                            value="{{ $d->id }}" /> {{ $d->mapel }} <br>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="form-group" id="matpelSMP" name="matpelSMP" required>
                                    <label for="mata_pelajaran">Mata Pelajaran</label>
                                    <div class="form-round">
                                        @foreach($smp as $d)
                                        <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                            value="{{ $d->id }}" /> {{ $d->mapel }} <br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group" id="matpelSMA" name="matpelSMA" required>
                                    <label for="mata_pelajaran">Mata Pelajaran</label>
                                    <div class="form-round">
                                        @foreach($sma as $d)
                                        <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                            value="{{ $d->id }}" /> {{ $d->mapel }} <br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group" id="sbm" name="sbm" required>
                                    <label for="mata_pelajaran">Jenis Ujian</label>
                                    <div class="form-round">
                                        @foreach($sbm as $d)
                                        <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                            value="{{ $d->id }}" /> {{ $d->mapel }} <br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                                    <label for="file">Curriculum Vitae (.pdf / .docx)</label>
                                    <div class="form-title">
                                        <input id="file" accept=".docx, .pdf" type="file" class="form-control"
                                            name="file" required>

                                    </div>
                                </div>
                                <input id="status" type="text" name="status" class="form-control" value="MENUNGGU"
                                    style="display:none" required>

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
        $('#kelasSMP').hide();
        $('#kelasSMA').hide();
        $('#kelasSD').hide();
        $('#matpelSD').hide();
        $('#matpelSMP').hide();
        $('#matpelSMA').hide();
        $('#sbm').hide();
        $(document).ready(function () {
            $("#program").change(function () {
                if ($(this).val() == "1") {
                    $('#kelasSD').show();
                    $('#kelasSMP').hide();
                    $('#kelasSMA').hide();
                    $('#matpelSD').show();
                    $('#matpelSMP').hide();
                    $('#matpelSMA').hide();
                    $('#sbm').hide();
                } else if ($(this).val() == "2") {
                    $('#kelasSMP').show();
                    $('#kelasSD').hide();
                    $('#kelasSMA').hide();
                    $('#matpelSMP').show();
                    $('#matpelSD').hide();
                    $('#matpelSMA').hide();
                    $('#sbm').hide();
                } else if ($(this).val() == "3") {
                    $('#kelasSMA').show();
                    $('#kelasSD').hide();
                    $('#kelasSMP').hide();
                    $('#matpelSMA').show();
                    $('#matpelSD').hide();
                    $('#matpelSMP').hide()
                    $('#sbm').hide();
                } else if ($(this).val() == "4") {
                    $('#kelasSMA').hide();
                    $('#kelasSD').hide();
                    $('#kelasSMP').hide();
                    $('#matpelSMA').hide();
                    $('#matpelSD').hide();
                    $('#matpelSMP').hide()
                    $('#sbm').show();
                } else {
                    $('#matpel').hide();
                    $('#kelasSD').hide();
                    $('#kelasSMP').hide();
                    $('#kelasSMA').hide();
                    $('#matpelSD').hide();
                    $('#matpelSMP').hide();
                    $('#matpelSMA').hide();
                    $('#sbm').hide();
                }

            });
        });

    });
</script>
@endsection
