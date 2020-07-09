<div class="content-header-2"> 
<div class="btn-group btn-group-toggle"  style="float:right">
    <a href="/daftarTutor" class="btn btn-primary <?php echo e(Request::segment(1) === 'daftarTutor' ? 'nav-link active' : null); ?>" >AKTIF</a>
  <a href="/daftarTutorBelumAktif" class="btn btn-primary <?php echo e(Request::segment(1) === 'daftarTutorBelumAktif' ? 'nav-link active' : null); ?>"">BELUM AKTIF</a>
  <a href="/daftarTutorTidakAktif" class="btn btn-primary <?php echo e(Request::segment(1) === 'daftarTutorTidakAktif' ? 'nav-link active' : null); ?>"">TIDAK AKTIF</a>
</div>
</div><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/navbarTutor.blade.php ENDPATH**/ ?>