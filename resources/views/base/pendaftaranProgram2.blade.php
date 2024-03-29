@include('base/header_page')
@extends('base/script_page')
@section('content')
<style>
        .help-block {
    color: red;
    font-size: 13px;
}
.has-error {
     color: red;
}
   h2.form-title {
            margin-left: 1em;
            font-size: 23px;
        }
@media screen and (width: 375px) {
        h2.form-title {
            font-size: 17px;
        }
        .form-group {
            margin-left: 0em;
        }
        .form-control {
            font-size: 12px;
        }
        .help-block {
        color: red;
        font-size: 11px;
    }
    }

     @media screen and (width: 360px) {
        h2.form-title {
            font-size: 17px;
             margin-left: 0.8em;
        }
        .form-group {
            margin-left: 0em;
        }
        .form-control {
            font-size: 11px;
        }
        .help-block {
        color: red;
        font-size: 11px;
    }
    }

    @media screen and (width: 320px) {
        h2.form-title {
            font-size: 15px;
        margin-left: 0.7em;
        }
        .form-group {
            margin-left: 0em;
        }
        .form-control {
            font-size: 8px;
        }
        .help-block {
        color: red;
        font-size: 10px;
    }
    }
    @media screen and (width: 414px) {
        h2.form-title {
            font-size: 19px;
            margin-left: 0.5em;
        }
        .form-group {
            margin-left: 0em;
        }
        .form-control {
            font-size: 12px;
        }
    }

    @media screen and (width: 411px) {
        h2.form-title {
            font-size: 19px;
            margin-left: 0.5em;
        }
        .form-group {
            margin-left: 0em;
        }
        .form-control {
            font-size: 12px;
        }
    }

     @media screen and (width: 568px) {
        h2.form-title {
            font-size: 24px;
            margin-left: 2em;
        }
        .form-group {
            margin-left: 0em;
        }
        .form-control {
            font-size: 15px;
           
        }
    }
</style>
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

<body>
    <div class="main">
        <div class="container-content">
            <div class="sign-up-content">
                <form method="POST" action="{{ route('pendaftaranSiswa.store')}}" enctype="multipart/form-data">
                    @csrf
                    <h2 class="form-title">Pendaftaran Bimbel Program SMP</h2>

                    <br>
                    <div class="panel-body">


                        <label for="kelas">Kelas
                            <div class="form-group{{ $errors->has('kelas_id') ? ' has-error' : '' }}">
                            <select id="kelas" name="kelas_id" class="form-control" style="float:left" required>
                                <option value="0" disabled="true" selected="true">-- Pilih Kelas --</option>
                                @foreach($ksmp as $d)
                                        <option value="{{ $d->id }}">{{ $d->kelas }}</option>
                                @endforeach

                            </select>
                       
                       
                             </div>
                              @if ($errors->has('kelas_id'))
                                <span class="help-block">
                               {{ $errors->first('kelas_id') }}
                                </span>
                            @endif
                        </label>
                        <label for="mata_pelajaran" style="float:right">Paket
                            <div class="form-group{{ $errors->has('paket_id') ? ' has-error' : '' }}">
                                <select id="paket_id" name="paket_id" class="form-control" style="float:right"
                                    required>
                                    <option value="0" disabled="true" selected="true">-- Pilih Paket --</option>
                                    @foreach($paket as $d)
                                    <option value="{{ $d->id }}">{{ $d->nama_paket }}</option>
                                    @endforeach
                                </select>
                        </label>
                        </div>
                        @if ($errors->has('paket_id'))
                                <span class="help-block">
                               {{ $errors->first('paket_id') }}
                                </span>
                            @endif

                         

                        <input type="number" class="form-control" id="invoice" name="invoice" style="display:none"
                            value="<?php echo (rand(190000000,199999999)) ?>">
                            
                        <input type="text" class="form-control" id="program" name="program_id" style="display:none"
                            value="2">

                            <input type="text" class="form-control" id="kategori" name="kategori" style="display:none"
                            value="OFFLINE">

                            <input id="murid_id" style="display:none" type="text" class="form-control" name="id_murid"
                            required autofocus value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                    </div>

                    <div id="sesi1">
                        <label style="width:100%"> Jumlah Pertemuan
                            <select id="sesi1-select" name="jumlah_sesi" class="form-control" style="width:100%">
                                <option value="1" selected="true">1 Minggu Sekali</option>
                               
                            </select>
                        </label>
                    </div>

                     <div id="sesi2">
                        <label style="width:100%"> Jumlah Pertemuan
                            <select id="sesi1-select" name="jumlah_sesi" class="form-control" style="width:100%">
                                <option value="2" selected="true">1 Minggu Dua Kali</option>
                               
                            </select>
                        </label>
                    </div>




                    <div id="sesi2">
                        
                    </div>


                    <div id="sesi3">
                        <label style="width:100%"> Jumlah Pertemuan
                            <select id="sesi1-select" name="jumlah_sesi" class="form-control" style="width:100%">
                                <option value="1" selected="true">1 Minggu Sekali</option>
                               
                            </select>
                        </label>
                    </div>


                    <div id="div1" name="div1" class="panel-body">

                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id[]"
                            required autofocus value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                        <input type="text" class="form-control" id="status" name="status[]" style="display:none"
                            value="MENUNGGU" >

                        <div class="alert alert-primary">
                            Masukkan dan pilih sesuai kebutuhan Anda
                        </div>

                        <div>
                            <label for="mata_pelajaran" style="width:100%">Mata Pelajaran
                                <select id="mata_pelajaran" name="mapel_id[]" class="form-control"
                                    style="width:100%" required>
                                    <option value="0" disabled="true" selected="true">Mata Pelajaran</option>
                                    @foreach($smp as $d)
                                        <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div id="waktu1">
                            <label for="hari1">Sesi 1
                                <select id="hari1" name="hari1[]" class="form-control" style="float:left" required>
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari1" style="float:right">Waktu 1
                                <select id="waktu_hari1" name="waktu_hari1[]" class="form-control" style="float:right" required>
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>

                        <div id="waktu2">
                            <label for="hari1">Sesi 2
                                <select id="hari2" name="hari2[]" class="form-control" style="float:left">
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari2" style="float:right">Waktu 2
                                <select id="waktu_hari" name="waktu_hari2[]" class="form-control" style="float:right">
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div id="div2" name="div2" class="panel-body">

                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id[]"
                            required autofocus value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                        <div class="alert alert-primary">
                            Pilih Mata Pelajaran Ke Dua
                        </div>

                        <input type="text" class="form-control" id="status" name="status[]" style="display:none"
                            value="MENUNGGU">
                        <div>
                            <label for="mata_pelajaran" style="width:100%">Mata Pelajaran
                                <select id="mata_pelajaran" name="mapel_id[]" class="form-control"
                                    style="width:100%">
                                    <option value="0" disabled="true" selected="true">Mata Pelajaran</option>
                                    @foreach($smp as $d)
                                        <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div id="waktu3">
                            <label for="hari1">Sesi 1
                                <select id="hari1" name="hari1[]" class="form-control" style="float:left">
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari1" style="float:right">Waktu 1
                                <select id="waktu_hari1" name="waktu_hari1[]" class="form-control" style="float:right">
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>

                        <div id="waktu4">
                            <label for="hari2">Sesi 2
                                <select id="hari2" name="hari2[]" class="form-control" style="float:left">
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari2" style="float:right">Waktu 2
                                <select id="waktu_hari2" name="waktu_hari2[]" class="form-control" style="float:right">
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>

                    </div>

                    <div id="div3" name="div3" class="panel-body">

                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id[]"
                            required autofocus value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                            <input type="text" class="form-control" id="status" name="status[]" style="display:none"
                            value="MENUNGGU">

                        <div class="alert alert-primary">
                            Pilih Mata Pelajaran Ke Tiga
                        </div>
                        <div>
                            <label for="mata_pelajaran" style="width:100%">Mata Pelajaran
                                <select id="mata_pelajaran" name="mapel_id[]" class="form-control"
                                    style="width:100%">
                                    <option value="0" disabled="true" selected="true">Mata Pelajaran</option>
                                    @foreach($smp as $d)
                                        <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div id="waktu5">
                            <label for="hari1">Sesi 1
                                <select id="hari1" name="hari1[]" class="form-control" style="float:left">
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari1" style="float:right">Waktu 1
                                <select id="waktu_hari1" name="waktu_hari1[]" class="form-control" style="float:right">
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>

                        <div id="waktu6">
                            <label for="hari1">Sesi 2
                                <select id="hari2" name="hari2[]" class="form-control" style="float:left">
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari2" style="float:right">Waktu 2
                                <select id="waktu_hari2" name="waktu_hari2[]" class="form-control" style="float:right">
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>

                    </div>




 <div id="div4" name="div4" class="panel-body">

                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id[]"
                            required autofocus value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                            <input type="text" class="form-control" id="status" name="status[]" style="display:none"
                            value="MENUNGGU">

                        <div class="alert alert-primary">
                            Pilih Mata Pelajaran Ke Empat
                        </div>
                        <div>
                            <label for="mata_pelajaran" style="width:100%">Mata Pelajaran
                                <select id="mata_pelajaran" name="mapel_id[]" class="form-control"
                                    style="width:100%">
                                    <option value="0" disabled="true" selected="true">Mata Pelajaran</option>
                                    @foreach($smp as $d)
                                        <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div id="waktu7">
                            <label for="hari1">Sesi 1
                                <select id="hari1" name="hari1[]" class="form-control" style="float:left">
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari1" style="float:right">Waktu 1
                                <select id="waktu_hari1" name="waktu_hari1[]" class="form-control" style="float:right">
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>

                        <div id="waktu8">
                            <label for="hari1">Sesi 2
                                <select id="hari2" name="hari2[]" class="form-control" style="float:left">
                                    <option value="0" disabled="true" selected="true">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari2" style="float:right">Waktu 2
                                <select id="waktu_hari2" name="waktu_hari2[]" class="form-control" style="float:right">
                                    <option value="0" disabled="true" selected="true">Pilih Waktu</option>
                                    <option value="15.00">15.00 WIB</option>
                                    <option value="16.00">16.00 WIB</option>
                                    <option value="17.00">17.00 WIB</option>
                                    <option value="18.00">18.00 WIB</option>
                                    <option value="19.00">19.00 WIB</option>
                                </select>
                            </label>
                        </div>

                    </div>

               
                  
                    <br>
                    <div class="form-group">
                        <a>
                            <button type="submit" class="button3">Daftar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        @endsection
        @section('day')
        <script>
            $('#div1').hide();

            $('#sesi1').hide();
            $('#sesi2').hide();
            $('#sesi3').hide();

            $('#div2').hide();
            $('#div3').hide();
            $('#div4').hide();
            $(document).ready(function () {
                $("#paket_id").change(function () {
                    if ($(this).val() == "7") {
                        $('#sesi1').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi2').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').hide().find('input, textarea, select').prop('disabled', true);
                         $('#div4').hide().find('input, textarea, select').prop('disabled', true);
                        $('#waktu1').show();
                        $('#waktu2').hide();
                        $('#waktu3').show();
                        $('#waktu4').hide();
                    } else if ($(this).val() == "8") {
                        $('#sesi1').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi2').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', false);

                        $('#div1').show().find('input, textarea, select').prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').show().find('input, textarea, select').prop('disabled', false);
                        $('#div4').hide().find('input, textarea, select').prop('disabled', true);
                        $('#waktu1').show();
                        $('#waktu2').hide();
                        $('#waktu3').show();
                        $('#waktu4').hide();
                        $('#waktu5').show();
                        $('#waktu6').hide();
                       
                    } else if ($(this).val() == "9") {
                        $('#sesi1').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi2').hide().find('input, textarea, select').prop('disabled', false);
                        $('#sesi3').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi4').hide().find('input, textarea, select').prop('disabled', false);

                        $('#div1').show().find('input, textarea, select').prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').show().find('input, textarea, select').prop('disabled', false);
                        $('#div4').show().find('input, textarea, select').prop('disabled', false);
                        $('#waktu1').show();
                        $('#waktu2').hide();
                        $('#waktu3').show();
                        $('#waktu4').hide();
                        $('#waktu5').show();
                        $('#waktu6').hide();
                         $('#waktu7').show();
                        $('#waktu8').hide();
                   } else if ($(this).val() == "10") {
                        $('#sesi1').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi2').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').hide().find('input, textarea, select').prop('disabled', true);
                        $('#div4').hide().find('input, textarea, select').prop('disabled', true);
                        $('#waktu1').show();
                        $('#waktu2').show();
                        $('#waktu3').show();
                        $('#waktu4').show();
                        $('#waktu5').hide();
                        $('#waktu6').hide();
                        $('#waktu7').hide();
                        $('#waktu8').hide();
                    
                     } else if ($(this).val() == "11") {
                         $('#sesi1').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi2').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().prop('disabled', false);
                         $('#div2').show().prop('disabled', false);
                        $('#div3').show().find('input, textarea, select').prop('disabled', false);
                        $('#div4').hide().find('input, textarea, select').prop('disabled', true);

                        $('#waktu1').show();
                        $('#waktu2').show();
                        $('#waktu3').show();
                        $('#waktu4').show();
                        $('#waktu5').show();
                        $('#waktu6').show();
                        $('#waktu7').hide();
                        $('#waktu8').hide();
                    
                      } else if ($(this).val() == "12") {
                        $('#sesi1').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi2').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().find('input, textarea, select').prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').show().find('input, textarea, select').prop('disabled', false);
                        $('#div4').show().find('input, textarea, select').prop('disabled', false);
                        $('#waktu1').show();
                        $('#waktu2').show();
                        $('#waktu3').show();
                        $('#waktu4').show();
                        $('#waktu5').show();
                        $('#waktu6').show();
                        $('#waktu7').show();
                        $('#waktu8').show();
                    }

                });
                $("#sesi1-select").change(function () {
                    if ($(this).val() == "1") {
                        $('#waktu1').show();
                        $('#waktu2').hide();
                    } else if ($(this).val() == "2") {
                        $('#waktu1').show();
                        $('#waktu2').show();
                    }
                });
                $("#sesi2-select").change(function () {
                    if ($(this).val() == "1") {
                        $('#waktu3').show();
                        $('#waktu4').hide();
                        $('#waktu2').hide();
                    } else if ($(this).val() == "2") {
                        $('#waktu2').show();
                        $('#waktu3').show();
                        $('#waktu4').show();
                    }
                });
                $("#sesi3-select").change(function () {
                    if ($(this).val() == "1") {
                        $('#waktu5').show();
                        $('#waktu6').hide();
                        $('#waktu4').hide();
                        $('#waktu2').hide();


                    } else if ($(this).val() == "2") {
                        $('#waktu5').show();
                        $('#waktu6').show();
                        $('#waktu4').show();
                        $('#waktu2').show();

                    }
                });
            });
        </script>
        @endsection
