@extends('base/script_page')
@section('content')
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
                    </div><br/>
                    <label for="kelas">Kelas
                        <div class="form-textbox">
                              <input id="kelas" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>                      
                    <label for="program" style="float:right">Program
                        <div class="form-textbox">
                              <input id="program" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>

                    <label for="matkul">Mata Pelajaran
                        <div class="form-textbox">
                              <input id="matkul" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>  
                    </label>
                                          
                    <label for="hari" style="float:right">Hari
                        <div class="form-textbox">
                              <input id="hari" type="text" class="form-control" name="alamat"  required autofocus
                                    style="text-transform: capitalize">
                            </div><br>
                    </label>

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

                  <div class="panel-body">Nama Orang Tua/Wali
                    <div>
                        <input id="ortu" type="text" class="form-control" name="alamat"  required autofocus
                                style="text-transform: capitalize">
                    </div><br/>
                    
                    <div class="form-group">
                            <button type="submit" class="button3">Daftar</button>
                        </div>
            </form>
        </div>
    </div>

@endsection
