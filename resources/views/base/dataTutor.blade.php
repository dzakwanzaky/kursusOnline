@extends('base/script_page')
@section('content')
    <div class="main">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <br>
            <div class="col-md-12 col-md-offset-1">
            <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
              <div class="card-body">
              <form method="POST" action="{{ route('dataTutor.store')}}" enctype="multipart/form-data">                 
                 {{ csrf_field() }}

                    <h2 class="form-title">Profile Tutor</h2>

                    <input id="id" value="{{ Auth::user()->id }}" type="text" class="form-control" name="id" required autofocus style="display:none">

                    <input id="nama_tutor" value="{{ Auth::user()->name }}" type="text" class="form-control" name="nama_tutor" required autofocus style="display:none">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Jenis Kelamin</label>

                        <div class="form-title">
                        <form action="">
                            <input type="radio" value="laki" /> Laki-laki <br>  
                            <input type="radio" value="perempuan" /> Perempuan
                        </form>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="provinsi">Provinsi</label>

                        <div class="form-title">
                            <input id="provinsi" type="text" class="form-control" name="provinsi" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kota">Kota</label>

                        <div class="form-title">
                            <input id="kota" type="text" class="form-control" name="kota" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>

                        <div class="form-title">
                            <input id="kecamatan" type="text" class="form-control" name="kecamatan" required>
                        </div>
                    </div>          

                     <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="pendidikan">Pendidikan Terakhir</label>

                        <div class="form-title">
                            <input id="pendidikan" type="text" class="form-control" name="pendidikan" required>

                          
                        </div>
                    </div>         

                     <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>

                        <div class="col-md-6">
                        <form action="" method="post">
                            <input type="checkbox" value="1"/> Kelas 1 SD <br>
                            <input type="checkbox" value="2"/> Kelas 2 SD <br>
                            <input type="checkbox" value="3"/> Kelas 3 SD <br>
                            <input type="checkbox" value="4"/> Kelas 4 SD <br>
                            <input type="checkbox" value="5"/> Kelas 5 SD <br>
                            <input type="checkbox" value="6"/> Kelas 6 SD <br>
                        </form>
                        </div>
                    </div>       

                    
                    <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="mata_pelajaran">Mata Pelajaran</label>

                        <div class="col-md-6">
                        <form action="" method="post">
                            <input type="checkbox" value="1"/> Matematika <br>
                            <input type="checkbox" value="2"/> IPA <br>
                            <input type="checkbox" value="3"/> IPS <br>
                            <input type="checkbox" value="4"/> Bahasa Inggris <br>
                        </form>
                        </div>
                    </div>       

                    <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="file">Curriculum Vitae (.pdf / .docx)</label>
                        

                        <div class="form-title">
                            <input id="file" accept=".docx, .pdf" type="file" class="form-control" name="file" required>

                        </div>
                    </div>       
                            <input id="status" type="text" name="status" class="form-control" value="WAITING" style="display:none" required>
                                
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary d-block" style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;">
                            Save
                        </button>
                    </div>
                </form>
           
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
