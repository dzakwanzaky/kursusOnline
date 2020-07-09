<div class="content-header-2"> 
<div class="btn-group btn-group-toggle"  style="float:right">
    <a href="/daftarSiswa" class="btn btn-primary <?php echo e(Request::segment(1) === 'daftarSiswa' ? 'nav-link active' : null); ?>" >AKTIF</a>
  <a href="/daftarSiswaBelumAktif" class="btn btn-primary <?php echo e(Request::segment(1) === 'daftarSiswaBelumAktif' ? 'nav-link active' : null); ?>"">BELUM AKTIF</a>
  <a href="/daftarSiswaTidakAktif" class="btn btn-primary <?php echo e(Request::segment(1) === 'daftarSiswaTidakAktif' ? 'nav-link active' : null); ?>"">TIDAK AKTIF</a>
</div>
</div><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/navbar.blade.php ENDPATH**/ ?>