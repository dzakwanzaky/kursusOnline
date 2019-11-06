@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="main">
    <div class="container-content">
        <div class="sign-up-content">
            <form method="POST" action="{{ route('login')}}">
                @csrf
                <h2 class="form-title">Pendaftaran Imam Courses</h2>
                <div class="alert alert-danger">
                        <strong>Isikan!</strong> Data dengan sebenarnya.
                </div>
                    <div class="panel-body">Nama Lengkap
                        <div>
                              <input id="nama" type="text" class="form-control" name="nama"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    <div class="panel-body">NIK
                        <div>
                              <input id="nik" type="text" class="form-control" name="nik"  required autofocus
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

                    <div class="panel-body">Pendidikan Terakhir
                        <div>
                              <input id="pendidikan" type="text" class="form-control" name="pendidikan"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                            
                    <div class="panel-body">Ijazah
                        <div>
                              <input id="ijazah" type="text" class="form-control" name="ijazah"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    <div class="form-group">
                            <button type="submit" class="button3">Daftar</button>
                        </div>
            </form>
        </div>
    </div>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection
