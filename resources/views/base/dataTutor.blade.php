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
                        <option value="">---Kabupaten/Kota---</option>
                        <option value="Kabupaten Bantul">Kabupaten Bantul</option>
                            <option value="Kabupaten Gunung Kidul">Kabupaten Gunung Kidul</option>
                            <option value="Kabupaten Kulon Progo">Kabupaten Kulon Progo</option>
                            <option value="Kabupaten Sleman">Kabupaten Sleman</option>
                            <option value="Kota Yogyakarta">Kota Yogyakarta</option>
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
                        <option value="" selected disabled>---Kabupaten Bantul---</option>
                        <option value="Bambanglipuro">Bambanglipuro</option>
                            <option value="Bangutapan">Bangutapan</option>
                            <option value="Bantul">Bantul</option>
                            <option value="Dlingo">Dlingo</option>
                            <option value="Imogiri">Imogiri</option>
                            <option value="Jetis">Jetis</option>
                            <option value="Kasihan">Kasihan</option>
                            <option value="Kretek">Kretek</option>
                            <option value="Pajangan">Pajangan</option>
                            <option value="Pandak">Pandak</option>
                            <option value="Piyungan">Piyungan</option>
                            <option value="Pleret">Pleret</option>
                            <option value="Pundong">Pundong</option>
                            <option value="Sanden">Sanden</option>
                            <option value="Sedayu">Sedayu</option>
                            <option value="Sewon">Sewon</option>
                            <option value="Srandakan">Srandakan</option>
                            <!-- 2 -->
                            
                            <option value="" selected disabled>---Kabupaten Gunung Kidul---</option>
                            <option value="Gedangsari">Gedangsari</option>
                            <option value="Girisubo">Girisubo</option>
                            <option value="Karangmojo">Karangmojo</option>
                            <option value="Ngawen">Ngawen</option>
                            <option value="Nglipar">Nglipar</option>
                            <option value="Paliyan">Paliyan</option>
                            <option value="Panggang">Panggang</option>
                            <option value="Patuk">Patuk</option>
                            <option value="Playen">Playen</option>
                            <option value="Ponjong">Ponjong</option>
                            <option value="Purwosari">Purwosari</option>
                            <option value="Rongkop">Rongkop</option>
                            <option value="Saptosari">Saptosari</option>
                            <option value="Semanu">Semanu</option>
                            <option value="Semin">Semin</option>
                            <option value="Tanjungsari">Tanjungsari</option>
                            <option value="Tepus">Tepus</option>
                            <option value="Wonosari">Wonosari</option>
                            <!-- 3 -->
                            <option value="" selected disabled>---Kabupaten Kulon Progo---</option>
                            <option value="Galur">Galur</option>
                            <option value="Girimulyo">Girimulyo</option>
                            <option value="Kalibawang">Kalibawang</option>
                            <option value="Kokap">Kokap</option>
                            <option value="Lendah">Lendah</option>
                            <option value="Nanggulan">Nanggulan</option>
                            <option value="Panjatan">Panjatan</option>
                            <option value="Pengasih">Pengasih</option>
                            <option value="Samigaluh">Samigaluh</option>
                            <option value="Sentolo">Sentolo</option>
                            <option value="Temon">Temon</option>
                            <option value="Wates">Wates</option>
                            <!-- 4 -->
                            <option value="" selected disabled>---Kabupaten Sleman---</option>
                            <option value="Berbah">Berbah</option>
                            <option value="Cangkringan">Cangkringan</option>
                            <option value="Depok">Depok</option>
                            <option value="Gamping">Gamping</option>
                            <option value="Godean">Godean</option>
                            <option value="Kalasan">Kalasan</option>
                            <option value="Minggir">Minggir</option>
                            <option value="Mlati">Mlati</option>
                            <option value="Moyudan">Moyudan</option>
                            <option value="Ngaglik">Ngaglik</option>
                            <option value="Ngemplak">Ngemplak</option>
                            <option value="Pakem">Pakem</option>
                            <option value="Prambanan">Prambanan</option>
                            <option value="Seyegan">Seyegan</option>
                            <option value="Sleman">Sleman</option>
                            <option value="Tempel">Tempel</option>
                            <option value="Turi">Turi</option>
                            <!-- 5 -->
                            <option value="" selected disabled>---Kota Yogyakarta---</option>
                            <option value="Danurejan">Danurejan</option>                            
                            <option value="Gedongtengen">Gedongtengen</option>
                            <option value="Gondokusuman">Gondokusuman</option>
                            <option value="Gondoman">Gondoman</option>
                            <option value="Jetis">Jetis</option>
                            <option value="Kotagede">Kotagede</option>
                            <option value="Kraton">Kraton</option>
                            <option value="Mantrijeron">Mantrijeron</option>
                            <option value="Mergangsan">Mergangsan</option>
                            <option value="Ngampilan">Ngampilan</option>
                            <option value="Pakualaman">Pakualaman</option>
                            <option value="Tegalrejo">Tegalrejo</option>
                            <option value="Umbulharjo">Umbulharjo</option>
                            <option value="Wirobrajan">Wirobrajan</option>
                        <option value="" selected disabled>---Kecamatan---</option>
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
