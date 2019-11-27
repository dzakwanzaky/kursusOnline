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
                    Hari bisa berganti sesuai kesepakatan bersama tutor.
                </div>

                Pilih Hari
            <div class="col-md-6">
                    <label for="hari">Hari 1
                        <div class="form-textbox">
                              <input id="hari" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>
                    <label for="hari">Hari 2 
                        <div class="form-textbox">
                              <input id="hari" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>
                    <label for="hari">Hari 3 
                        <div class="form-textbox">
                              <input id="hari" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>
            </div>
                
                    <label for="kelas">Waktu
                        <div class="form-textbox">
                              <input id="waktu" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>  
                    </label>
                

                                          
                                  
                    <label for="lokasi" style="float:right">Lokasi
                        <div class="form-textbox">
                              <input id="lokasi" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>

                  
                    
                    <div class="form-group">
                            <button type="submit" class="button3">Lanjut</button>
                        </div>
            </form>
        </div>
    </div>

@endsection