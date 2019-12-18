@include('base/header_page')
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
              <form method="POST" action="{{ route('dataSiswa.store')}}" enctype="multipart/form-data">                 
                 {{ csrf_field() }}

                    <h2 class="form-title">Profile Siswa</h2>

                    <input id="id" value="{{ Auth::user()->id }}" type="text" class="form-control" name="id" required autofocus style="display:none">

                    <input id="nama_siswa" value="{{ Auth::user()->name }}" type="text" class="form-control" name="nama_siswa" required autofocus style="display:none">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Jenis Kelamin</label>

                        <div class="form-title">

                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>

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
                    
                   
                <div class="panel-body">
                    <div class="alert alert-info">
                        <strong>Info!</strong> Maximum Size Upload : 2MB
                    </div>
                        Foto Diri
                          <div class="form-group">
                            <input type="file" class="form-control" id="file" name="file">
                    </div>              
                            <input id="status" type="text" name="status" class="form-control" value="UNPAID" style="display:none" required>
                                
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
