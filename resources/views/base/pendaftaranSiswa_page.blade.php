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
                        <div class="form-textbox">
                              <input id="kelas" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>                      

                    <label for="matkul" style="float:right">Mata Pelajaran
                        <div class="form-textbox">
                              <input id="matkul" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>  
                    </label>
                </div>
                <div class="panel-body">Program
                        <div class="form-textbox">
                            <select name="program" class="form-control">
                                <option value="silver">Silver</option>
                                <option value="gold">Gold</option>
                                <option value="plat">Platinum</option>
                            </select>
                        </div><br>
                </div>
                    
                    <div class="form-group">
                            <button type="submit" class="button3">Lanjut</button>
                        </div>
            </form>
        </div>
    </div>

@endsection
