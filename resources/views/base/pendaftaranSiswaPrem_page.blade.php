@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Imam Courses</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
    <div class="container-content">
        <div class="sign-up-content">
            <form method="POST" action="{{ route('login')}}">
                @csrf
                <h2 class="form-title">Pendaftaran Les Program Paket PREMIUM</h2>
                <br>
                <div class="alert alert-danger">
                    <strong>Isikan!</strong> Data dengan sebenarnya.
                </div>
                <br>
                <div class="panel-body">
                    <label for="kelas" >Kelas
                        <select name="kelas" class="form-control" style="float:left">
                            <option value="1">1
                            <option value="2">2
                            <option value="3">3
                            <option value="4">4
                            <option value="5">5
                            <option value="6">6
                        </select>
                    </label>
                    <label for="matkul" style="float:right">Mata Pelajaran
                        <select name="mapel" class="form-control" style="float:right">
                            <option value="Matematika">Matematika
                            <option value="IPA">IPA
                            <option value="IPS">IPS
                            <option value="Bahasa Inggris">Bahasa Inggris
                        </select> 
                    </label>
                </div>
                <br>
                <div class="panel-body" >
                    <label for="hari">Hari 1
                    <select name="hari1" class="form-control" style="width:195px">
                            <option value="Senin">Senin
                            <option value="Selasa">Selasa
                            <option value="Rabu">Rabu
                            <option value="Kamis">Kamis
                            <option value="Jum'at">Jum'at
                            <option value="Sabtu">Sabtu
                            <option value="Minggu">Minggu
                        </select> 
                    </label>
                    <label for="hari">Hari 2 
                    <select name="hari2" class="form-control" style="width:195px">
                            <option value="Senin">Senin
                            <option value="Selasa">Selasa
                            <option value="Rabu">Rabu
                            <option value="Kamis">Kamis
                            <option value="Jum'at">Jum'at
                            <option value="Sabtu">Sabtu
                            <option value="Minggu">Minggu
                        </select> 
                    </label>
                </div>
                <br>
                <div class="panel-body" >Waktu
                    <select name="waktu" class="form-control">
                        <option value="tiga">15.00 WIB
                        <option value="empat">16.00 WIB
                        <option value="lima">17.00 WIB
                        <option value="enam">18.00 WIB
                        <option value="tujuh">19.00 WIB
                    </select> 
                </div>
                <br>
                <br>
                    <div class="form-group"> 
                        <a href="/murid">
                            <button type="submit" class="button3" >Daftar</button>
                        </a>
                    </div>
            </form>
        </div>
    </div>

@endsection
