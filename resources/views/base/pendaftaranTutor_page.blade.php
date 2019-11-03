@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

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
                <h2 class="form-title">Pendaftaran Imam Courses</h2>
                <form action="/pendaftaranSiswa">
                    <button class="button2" style="float:left">Murid</button>
                <form action="#">
                    <button class="button" disabled="disabled">Tutor</button>
                </form>
                <div class="alert alert-danger">
                        <strong>Isikan!</strong> Data dengan sebenarnya.
                </div>
                    <div class="panel-body">Nama Lengkap
                        <div>
                              <input id="nama" type="text" class="form-control" name="nama"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    <div class="panel-body">No. Telepon
                        <div>
                              <input id="no_hape" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>

                    <label for="matkul">Mata Pelajaran
                        <div class="form-textbox">
                              <input id="matkul" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>                      
                    <label for="provinsi" style="float:right">Provinsi
                        <div class="form-textbox">
                              <input id="provinsi" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>

                    <label for="kota">Kota/Kabupaten
                        <div class="form-textbox">
                              <input id="kota" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>  
                    </label>
                                          
                    <label for="kecamatan" style="float:right">Kecamatan
                        <div class="form-textbox">
                              <input id="kecamatan" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>
                    <div class="form-group">
                            <button type="submit" class="button3">Daftar</button>
                        </div>
            </form>
        </div>
    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection
