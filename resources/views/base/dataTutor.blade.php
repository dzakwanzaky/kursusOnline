@include('base/header_page')
@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Inofa Course</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

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

                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Provinsi:</label>
                                        <div class="col-lg-8">
                                            <select class="form-control select" data-fouc  name="propinsi" id="propinsi">
                                                <option>Pilih Provinsi</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kabupaten:</label>
                                        <div class="col-lg-8">
                                            <select class="form-control select" data-fouc  name="kabupaten" id="kabupaten">
                                                <option>Pilih Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kecematan:</label>
                                        <div class="col-lg-8">
                                            <select class="form-control select" data-fouc  name="kecamatan" id="kecamatan">
                                                <option>Pilih Kecematan</option>
                                            </select>
                                        </div>
                                    </div>

                    <div class="form-group">
                        <label for="alamat_detail">Alamat Detail</label>
                        <div class="form-title">
                            <textarea id="alamat_detail" type="text" class="form-control" name="alamat_detail" rows="3" placeholder="Petunjuk arah atau alamat detail untuk menuju alamat rumah" required></textarea>
                        </div>
                    </div>

                <br>        
                <div class="panel-body">
                    <div class="alert alert-danger">
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
    

@endsection
@section('day')
    <script>
       $(document).ready(function() {
      $.ajax({
          url: 'https://api.rajaongkir.com/starter/province' + window.return_first + '/m/wilayah/provinsi',
          type: 'GET',
          dataType: 'json',
          success: function(json) {
              if (json.code == 200) {
                  for (i = 0; i < Object.keys(json.data).length; i++) {
                      $('#propinsi').append($('<option>').text(json.data[i].name).attr('value', json.data[i].id));
                  }
              } else {
                  $('#kabupaten').append($('<option>').text('Data tidak di temukan').attr('value', 'Data tidak di temukan'));
              }
          }
      });
      $("#propinsi").change(function() {
          var propinsi = $("#propinsi").val();
          $.ajax({
              url: 'https://x.rajaapi.com/MeP7c5ne' + window.return_first + '/m/wilayah/kabupaten',
              data: "idpropinsi=" + propinsi,
              type: 'GET',
              cache: false,
              dataType: 'json',
              success: function(json) {
                  $("#kabupaten").html('');
                  if (json.code == 200) {
                      for (i = 0; i < Object.keys(json.data).length; i++) {
                          $('#kabupaten').append($('<option>').text(json.data[i].name).attr('value', json.data[i].id));
                      }
                      $('#kecamatan').html($('<option>').text('-- Pilih Kecamatan --').attr('value', '-- Pilih Kecamatan --'));
                      $('#kelurahan').html($('<option>').text('-- Pilih Kelurahan --').attr('value', '-- Pilih Kelurahan --'));
                  } else {
                      $('#kabupaten').append($('<option>').text('Data tidak di temukan').attr('value', 'Data tidak di temukan'));
                  }
              }
          });
      });
      $("#kabupaten").change(function() {
          var kabupaten = $("#kabupaten").val();
          $.ajax({
              url: 'https://x.rajaapi.com/MeP7c5ne' + window.return_first + '/m/wilayah/kecamatan',
              data: "idkabupaten=" + kabupaten + "&idpropinsi=" + propinsi,
              type: 'GET',
              cache: false,
              dataType: 'json',
              success: function(json) {
                  $("#kecamatan").html('');
                  if (json.code == 200) {
                      for (i = 0; i < Object.keys(json.data).length; i++) {
                          $('#kecamatan').append($('<option>').text(json.data[i].name).attr('value', json.data[i].id));
                      }
                      $('#kelurahan').html($('<option>').text('-- Pilih Kelurahan --').attr('value', '-- Pilih Kelurahan --'));
                      
                  } else {
                      $('#kecamatan').append($('<option>').text('Data tidak di temukan').attr('value', 'Data tidak di temukan'));
                  }
              }
          });
      });
       });
    </script>
@endsection
