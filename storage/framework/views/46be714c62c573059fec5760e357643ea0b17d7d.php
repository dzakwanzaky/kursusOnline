<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">
        <img class="navbar-brand-full" src="<?php echo e(('/tema/images/inofa.png')); ?>" width="120" height="43" alt="inofa Logo" href="/landing" style="display:block; margin-left:auto; margin-right:auto;">
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php if(Auth::user()->data->status == 'MENUNGGU'): ?>

               <li class="nav-item">
            <a href="/tutor" class="nav-link <?php echo e(Request::segment(1) === 'tutor' ? 'nav-link active' : null); ?>">
            <i class="fas fa-info-circle nav-icon"></i>
              <p>
                Informasi
              </p>
            </a>
          </li>
          <?php else: ?>
               <li class="nav-item">
            <a href="/tutor" class="nav-link <?php echo e(Request::segment(1) === 'tutor' ? 'nav-link active' : null); ?>">
            <i class="fas fa-user-graduate nav-icon"></i>
              <p>
                Pendaftaran Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jadwal" class="nav-link <?php echo e(Request::segment(1) === 'jadwal' ? 'nav-link active' : null); ?>

            <?php echo e(Request::segment(1) === 'dataKehadiran' ? 'nav-link active' : null); ?>

            <?php echo e(Request::segment(1) === 'detailJadwal' ? 'nav-link active' : null); ?>

            ">
              <i class="far fa-calendar nav-icon"></i>
              <p>
                Jadwal Mengajar
              </p>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/tutor/sidebar.blade.php ENDPATH**/ ?>