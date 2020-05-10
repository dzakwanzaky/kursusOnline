@include('base/header_page')
@extends('base/script_page')
@section('content')
<style>
        .help-block {
    color: red;
}
.has-error {
     color: red;
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
                    <h2 class="form-title">&nbsp;&nbsp;&nbsp;Pendaftaran Bimbel Program SD</h2>

                    <br>
                    <div class="panel-body">


                        <label for="kelas">Kelas
                            <div class="form-group{{ $errors->has('jumlah_mapel') ? ' has-error' : '' }}">
                            <select id="kelas" name="kelas_id" class="form-control" style="float:left" required>
                                <option value="0" disabled="true" selected="true">-- Pilih Kelas --</option>
                                @foreach($ksd as $d)
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
                            <div class="form-group{{ $errors->has('jumlah_mapel') ? ' has-error' : '' }}">
                            <select id="jumlah_mapel" name="jumlah_mapel" class="form-control" style="float:right" required>
                               <option value="0" disabled="true" selected="true">-- Pilih Paket --</option>
                                <option value="Regular SD 1 Offline">Regular SD 1 Offline</option>
                                <option value="Premium SD 1 Offline">Premium SD 1 Offline</option>
                                <option value="Pro SD 1 Offline">Pro SD 1 Offline</option>
                                <option value="Regular SD 2 Offline">Regular SD 2 Offline</option>
                                <option value="Premium SD 2 Offline">Premium SD 2 Offline</option>
                                <option value="Pro SD 2 Offline">Pro SD 2 Offline</option>
                            </select>
                        </label>
                        </div>
                        @if ($errors->has('jumlah_mapel'))
                                <span class="help-block">
                               {{ $errors->first('jumlah_mapel') }}
                                </span>
                            @endif
                    
                         

                        <input type="number" class="form-control" id="invoice" name="invoice" style="display:none"
                            value="<?php echo (rand(190000000,199999999)) ?>">
                            
                        <input type="text" class="form-control" id="program" name="program_id" style="display:none"
                            value="1">

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
                                    <option value="">Mata Pelajaran</option>
                                    @foreach($sd as $d)
                                        <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div id="waktu1">
                            <label for="hari1">Sesi 1
                                <select id="hari1" name="hari1[]" class="form-control" style="float:left" required>
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari1" style="float:right">Waktu Sesi 1
                                <select id="waktu_hari1" name="waktu_hari1[]" class="form-control" style="float:right" required>
                                    <option value="">Pilih Waktu</option>
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
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari2" style="float:right">Waktu Sesi 2
                                <select id="waktu_hari" name="waktu_hari2[]" class="form-control" style="float:right">
                                    <option value="">Pilih Waktu</option>
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
                                    <option value=" ">Mata Pelajaran</option>
                                    @foreach($sd as $d)
                                        <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div id="waktu3">
                            <label for="hari1">Sesi 1
                                <select id="hari1" name="hari1[]" class="form-control" style="float:left">
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari1" style="float:right">Waktu Sesi 1
                                <select id="waktu_hari1" name="waktu_hari1[]" class="form-control" style="float:right">
                                    <option value="">Pilih Waktu</option>
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
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari2" style="float:right">Waktu Sesi 2
                                <select id="waktu_hari2" name="waktu_hari2[]" class="form-control" style="float:right">
                                    <option value="">Pilih Waktu</option>
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
                                    <option value=" ">Mata Pelajaran</option>
                                    @foreach($sd as $d)
                                        <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                    @endforeach
                                </select>
                            </label>
                        </div>

                        <div id="waktu5">
                            <label for="hari1">Sesi 1
                                <select id="hari1" name="hari1[]" class="form-control" style="float:left">
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari1" style="float:right">Waktu Sesi 1
                                <select id="waktu_hari1" name="waktu_hari1[]" class="form-control" style="float:right">
                                    <option value="">Pilih Waktu</option>
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
                                    <option value="">Pilih Hari</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jum'at">Jum'at</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </label>

                            <label for="waktu_hari2" style="float:right">Waktu Sesi 2
                                <select id="waktu_hari2" name="waktu_hari2[]" class="form-control" style="float:right">
                                    <option value="">Pilih Waktu</option>
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
            $(document).ready(function () {
                $("#jumlah_mapel").change(function () {
                    if ($(this).val() == "Regular SD 1 Offline") {
                        $('#sesi1').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi2').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().prop('disabled', false);
                        $('#div2').hide().find('input, textarea, select').prop('disabled', true);
                        $('#div3').hide().find('input, textarea, select').prop('disabled', true);
                        $('#waktu1').show();
                        $('#waktu2').hide();
                    } else if ($(this).val() == "Premium SD 1 Offline") {
                        $('#sesi1').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi2').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().find('input, textarea, select').prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').hide().find('input, textarea, select').prop('disabled', true);
                        $('#waktu1').show();
                        $('#waktu2').hide();
                        $('#waktu3').hide();
                        $('#waktu4').hide();
                       
                    } else if ($(this).val() == "Pro SD 1 Offline") {
                        $('#sesi1').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi2').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().find('input, textarea, select').prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').show().find('input, textarea, select').prop('disabled', false);
                        $('#waktu1').show();
                        $('#waktu2').hide();
                        $('#waktu3').hide();
                        $('#waktu4').hide();
                        $('#waktu5').hide();
                        $('#waktu6').hide();
                   } else if ($(this).val() == "Regular SD 2 Offline") {
                        $('#sesi1').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi2').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().prop('disabled', false);
                        $('#div2').hide().find('input, textarea, select').prop('disabled', true);
                        $('#div3').hide().find('input, textarea, select').prop('disabled', true);
                        $('#waktu1').show();
                        $('#waktu2').show();
                        $('#waktu6').hide();
                    
                     } else if ($(this).val() == "Premium SD 2 Offline") {
                         $('#sesi1').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi2').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                       
                        $('#div3').hide().find('input, textarea, select').prop('disabled', true);
                        $('#waktu1').show();
                        $('#waktu2').show();
                        $('#waktu3').hide();
                        $('#waktu4').hide();
                        $('#waktu5').hide();
                        $('#waktu6').hide();
                    
                      } else if ($(this).val() == "Pro SD 2 Offline") {
                        $('#sesi1').hide().find('input, textarea, select').prop('disabled', true);
                        $('#sesi2').show().find('input, textarea, select').prop('disabled', false);
                        $('#sesi3').hide().find('input, textarea, select').prop('disabled', true);

                        $('#div1').show().find('input, textarea, select').prop('disabled', false);
                        $('#div2').show().find('input, textarea, select').prop('disabled', false);
                        $('#div3').show().find('input, textarea, select').prop('disabled', false);
                        $('#waktu1').show();
                        $('#waktu2').show();
                        $('#waktu3').hide();
                        $('#waktu4').hide();
                        $('#waktu5').hide();
                        $('#waktu6').hide();
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
