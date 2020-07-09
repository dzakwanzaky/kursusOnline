<div class="content-header-2"> 
<div class="btn-group btn-group-toggle"  style="float:right">
  <a href="/jadwalAktifOnline" class="btn btn-primary <?php echo e(Request::segment(1) === 'jadwalAktifOnline' ? 'nav-link active' : null); ?>"   >AKTIF</a>
  <a href="/jadwalDiajukanOnline" class="btn btn-primary <?php echo e(Request::segment(1) === 'jadwalDiajukanOnline' ? 'nav-link active' : null); ?>">DIAJUKAN</a>
  <a href="/jadwalMenungguOnline" class="btn btn-primary <?php echo e(Request::segment(1) === 'jadwalMenungguOnline' ? 'nav-link active' : null); ?>">MENUNGGU</a>
  <a href="/jadwalTidakAktifOnline" class="btn btn-primary <?php echo e(Request::segment(1) === 'jadwalTidakAktifOnline' ? 'nav-link active' : null); ?>">TIDAK AKTIF</a>
</div>
</div><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/navbarJadwalOnline.blade.php ENDPATH**/ ?>