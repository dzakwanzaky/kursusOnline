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
                        <div class="input-group-prepend">
                        <label for="kota">Kota/Kabupaten</label>
                        </div>
                        <select class="form-control" id="kota">
                        @php $no = 1; @endphp
                        @foreach($kota as $k)
                        <option value="{{ $k->kabupaten }}">{{ $k->kabupaten }}</option>
                        @endforeach
                        </select>
                        <div class="form-title">
                           
                        </div>
                    </div>

                    <div class="form-group">
                    <div class="input-group-prepend">
                        <label for="inputGroupSelect01">Kecamatan</label>
                        </div>
                        <select class="form-control" id="inputGroupSelect01">
                        @php $no = 1; @endphp
                        @foreach($kec as $c)
                        <option value="{{ $c->kecamatan }}">{{ $c->kecamatan }}</option>
                        @endforeach
                        </select>
                    </div>  
                    
                   
                <div class="panel-body">
                    <div class="alert alert-info">
                        <strong>Info!</strong> Maximum Size Upload : 2MB
                    </div>
                        Foto Diri
                          <div class="form-group">
                            <input type="file" class="form-control" id="file" name="file">
                    </div>              
                            <input id="status" type="text" name="status" class="form-control" value="BELUM DIBAYAR" style="display:none" required>
                                
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
    <!-- <script>
    function yesnoCheck(that) {
        if (that.value == "other") {
        alert("check");
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
            }
        }
    </script> -->
@endsection
