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
                <h2 class="form-title">Pendaftaran Les di Imam Courses</h2>
                <div class="alert alert-danger">
                        <strong>Isikan!</strong> Data dengan sebenarnya.
                </div>
                <div class="panel-body">
                    <label for="kelas">Kelas
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
                Pilih Hari
                <div class="panel-body" >
                    <label for="hari">Hari 1
                    <select name="mapel" class="form-control" style="width:130px">
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
                    <select name="mapel" class="form-control" style="width:130px">
                            <option value="Senin">Senin
                            <option value="Selasa">Selasa
                            <option value="Rabu">Rabu
                            <option value="Kamis">Kamis
                            <option value="Jum'at">Jum'at
                            <option value="Sabtu">Sabtu
                            <option value="Minggu">Minggu
                        </select> 
                    </label>
                    <label for="hari">Hari 3 
                    <select name="mapel" class="form-control" style="width:130px">
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
                
                

                                          
                                  
                <div class="panel-body" >Lokasi
                        <div class="form-textbox">
                              <input id="lokasi" type="text" class="form-control" name="lokasi"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </div>
                    
                    <div class="form-group"> 
                    <a href="/murid">
                            <button type="submit" class="button3" >Daftar</button>
                            </a>
                        </div>
            </form>
        </div>
    </div>

@endsection
