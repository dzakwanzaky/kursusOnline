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
<body>
    <div class="main">
    <div class="container-content">
        <div class="sign-up-content">
        <form method="POST" action="{{ route('pendaftaranSiswa.store')}}" enctype="multipart/form-data">
                @csrf
                <h2 class="form-title">Pendaftaran Bimbel Program SBMPTN</h2>
            
                <br>
                <div class="panel-body">
                    <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                            required autofocus
                            value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                    <input id="nama_murid" style="display:none" type="text" class="form-control" name="nama_murid"
                            required autofocus
                            value="{{ Auth::user()->name }}" style="text-transform: capitalize">

                    <input type="text" class="form-control" id="program" name="program" style="display:none" value="SBMPTN">

                    <input type="text" class="form-control" id="status" name="status" style="display:none" value="MENUNGGU">

              <br>
               <label id="bulan" for="bulan" style="float:left"> Durasi Bimbel
                <select id="bulan" name="bulan" class="form-control" style="float:left">
                        <option value=" ">Bulan</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                        <option value="3">6</option>
                        <option value="3">7</option>
                        <option value="3">8</option>
                        <option value="3">9</option>
                        <option value="3">10</option>
                        <option value="3">11</option>
                        <option value="3">12</option>
                    </select> 
                
                </label>


            <label style="float:right"> Jumlah Sesi
                <select id="sesi" name="sesi" class="form-control" style="float:right">
                        <option value="_none">Pilih Sesi</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select> 
            
                </label>
            </div>  
          
                <br>
                <div id="div1" name="div1" class="panel-body">
                <br>
                <br>
                <div class="alert alert-primary">
                    Masukkan detail jadwal untuk Sesi 1!
                </div>
                
                    <label for="hari1" >Sesi 1
                    <select id="hari1" name="hari1" class="form-control" style="float:left">
                            <option value="_none">Pilih Hari</option>
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
                    <select id="waktu_hari1" name="waktu" class="form-control" style="float:right">
                        <option value="_none">Pilih Waktu</option>
                        <option value="15.00">15.00 WIB</option>
                        <option value="16.00">16.00 WIB</option>
                        <option value="17.00">17.00 WIB</option>
                        <option value="18.00">18.00 WIB</option>
                        <option value="19.00">19.00 WIB</option>
                    </select> 
                    </label>

                </div>

                
                <div id="div2" name="div2" class="panel-body">
                
                <div class="alert alert-primary">
                    Masukkan detail jadwal untuk Sesi 2!
                </div>
                
                    <label for="hari2">Sesi 2 
                    <select id="hari2" name="hari2" class="form-control" style="float:left">
                            <option value="_none">Pilih Hari</option>
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
                    <select id="waktu_hari2" name="waktu" class="form-control" style="float:right">
                        <option value="_none">Pilih Waktu</option>
                        <option value="15.00">15.00 WIB</option>
                        <option value="16.00">16.00 WIB</option>
                        <option value="17.00">17.00 WIB</option>
                        <option value="18.00">18.00 WIB</option>
                        <option value="19.00">19.00 WIB</option>
                    </select> 
                    </label>

                </div>
                
                
                <div id="div3" name="div3" class="panel-body">
                <div class="alert alert-primary">
                    Masukkan detail jadwal untuk Sesi 3!
                </div>
                    <label for="hari3">Sesi 3 
                    <select id="hari3" name="hari3" class="form-control" style="float:left">
                            <option value="_none">-Pilih Hari-</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select> 
                    </label>

                    <label for="waktu_hari3" style="float:right">Waktu Sesi 3
                    <select id="waktu_hari3" name="waktu" class="form-control" style="float:right">
                        <option value="_none">Pilih Waktu</option>
                        <option value="15.00">15.00 WIB</option>
                        <option value="16.00">16.00 WIB</option>
                        <option value="17.00">17.00 WIB</option>
                        <option value="18.00">18.00 WIB</option>
                        <option value="19.00">19.00 WIB</option>
                    </select> 
                    </label>
                </div>

                <br>
                    <div class="form-group"> 
                        <a href="/dataSiswa">
                            <button type="submit" class="button3" >Daftar</button>
                        </a>
                    </div>
            </form>
        </div>
    </div>

@endsection
@section('day')
<script>
$('#div1').hide();
$('#div2').hide();
$('#div3').hide();
    $(document).ready(function() {
        $("#sesi").change(function () {
     if ($(this).val() == "1") {
        $('#div1').show();
        $('#div2').hide();
        $('#div3').hide();
     } else if ($(this).val() == "2") {
        $('#div1').show();
        $('#div2').show();
        $('#div3').hide();
     } else if ($(this).val() == "3") {
        $('#div1').show();
        $('#div2').show();
        $('#div3').show();
      } else {
        $('#div1').hide();
        $('#div2').hide();
        $('#div3').hide();
      }

        });
    });

</script>
@endsection
 