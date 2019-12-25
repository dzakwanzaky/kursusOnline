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
              <form method="POST" action="{{ route('dataTutor.store')}}" enctype="multipart/form-data">                 
                 {{ csrf_field() }}

                    <h2 class="form-title">Profile Tutor</h2>

                    <input id="id" value="{{ Auth::user()->id }}" type="text" class="form-control" name="id" required autofocus style="display:none">

                    <input id="nama_tutor" value="{{ Auth::user()->name }}" type="text" class="form-control" name="nama_tutor" required autofocus style="display:none">

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
                        <label for="kota">Kota/Kabupaten</label>

                        <div class="form-title">
                        <select class="form-control" id="kota">
                        @php $no = 1; @endphp
                        @foreach($kota as $k)
                        <option value="{{ $k->kabupaten }}">{{ $k->kabupaten }}</option>
                        @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputGroupSelect01">Kecamatan</label>
                        <div class="form-title">
                        <select class="form-control" id="inputGroupSelect01">
                        @php $no = 1; @endphp
                        @foreach($kec as $c)
                        <option value="{{ $c->kecamatan }}">{{ $c->kecamatan }}</option>
                        @endforeach
                        </select>
                        </div>
                    </div>     

                     <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="pendidikan">Pendidikan Terakhir</label>

                        <div class="form-title">
                        <select id="pendidikan" name="pendidikan" class="form-control" required>
                            <option value="SMA">SMA/SMK sederajat</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>   
                        </select>
                        </div>
                    </div>         

                     <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                    </div>  
                      
                            <input id="kelas1" type="checkbox" name="kelas1" value="1"/> Kelas 1 SD <br>
                            <input id="kelas2" type="checkbox" name="kelas2" value="2"/> Kelas 2 SD <br>
                            <input id="kelas3" type="checkbox" name="kelas3" value="3"/> Kelas 3 SD <br>
                            <input id="kelas4" type="checkbox" name="kelas4" value="4"/> Kelas 4 SD <br>
                            <input id="kelas5" type="checkbox" name="kelas5" value="5"/> Kelas 5 SD <br>
                            <input id="kelas6" type="checkbox" name="kelas6" value="6"/> Kelas 6 SD <br>
                    
                    <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="mata_pelajaran">Mata Pelajaran</label>
                    </div>  
                            <input  id="mata_pelajaran1" name="mata_pelajaran1"  type="checkbox" value="Matematika"/> Matematika <br>
                            <input  id="mata_pelajaran2" name="mata_pelajaran2"  type="checkbox" value="IPA"/> IPA <br>
                            <input  id="mata_pelajaran3" name="mata_pelajaran3"  type="checkbox" value="IPS"/> IPS <br>
                            <input  id="mata_pelajaran4"  name="mata_pelajaran4" type="checkbox" value="Bahasa Inggris"/> Bahasa Inggris <br>
                    <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                        <label for="file">Curriculum Vitae (.pdf / .docx)</label>
                        

                        <div class="form-title">
                            <input id="file" accept=".docx, .pdf" type="file" class="form-control" name="file" required>

                        </div>
                    </div>       
                            <input id="status" type="text" name="status" class="form-control" value="MENUNGGU" style="display:none" required>
                                
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
