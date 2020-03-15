<div class="content-header-2"> 
<div class="btn-group btn-group-toggle"  style="float:right">
  <a href="/jadwalAktif" class="btn btn-primary {{ Request::segment(1) === 'jadwalAktif' ? 'nav-link active' : null }}"   >AKTIF</a>
  <a href="/list_pendaftaranTutor" class="btn btn-primary {{ Request::segment(1) === 'list_pendaftaranTutor' ? 'nav-link active' : null }}">DIAJUKAN</a>
  <a href="/list_pendaftaranSiswa" class="btn btn-primary {{ Request::segment(1) === 'list_pendaftaranSiswa' ? 'nav-link active' : null }}">MENUNGGU</a>
  <a href="/jadwalTidakAktif" class="btn btn-primary {{ Request::segment(1) === 'jadwalTidakAktif' ? 'nav-link active' : null }}">TIDAK AKTIF</a>
</div>
</div>