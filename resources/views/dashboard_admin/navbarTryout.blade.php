<div class="content-header-2"> 
<div class="btn-group btn-group-toggle"  style="float:right">
  <a href="/tryoutAktif" class="btn btn-primary {{ Request::segment(1) === 'tryoutAktif' ? 'nav-link active' : null }}"   >AKTIF</a>
  <a href="/tryoutBelumAktif" class="btn btn-primary {{ Request::segment(1) === 'tryoutBelumAktif' ? 'nav-link active' : null }}">BELUM AKTIF</a>
</div>
</div>