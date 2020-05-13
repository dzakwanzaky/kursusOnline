<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link" href="/">
      <span class="brand-text font-weight-light">
        <img class="navbar-brand-full" src="<?php echo e(('/tema/images/inofa.png')); ?>" width="120" height="43" alt="inofa Logo" style="display:block; margin-left:auto; margin-right:auto;">
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
        <a class="d-block" style="margin: 0 0 0 0px;">
     
        <img src="<?php echo e(url('/data_file/'.DB::table('model_siswas')->where('id', '=', Auth::user()->id)->value('file'))); ?>" class="img-circle elevation-2" alt="User Image" style="width:30px;height:30px;border: 1.5px solid">

          &nbsp;&nbsp;Murid</a>
        </div>
    
      </div>
 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="/murid" class="nav-link <?php echo e(Request::segment(1) === 'murid' ? 'nav-link active' : null); ?>">
              <i class="far fa-calendar nav-icon"></i>
              <p>
                Jadwal Les
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/invoice" class="nav-link <?php echo e(Request::segment(1) === 'invoice' ? 'nav-link active' : null); ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Invoice
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="/video" class="nav-link <?php echo e(Request::segment(1) === 'video' ? 'nav-link active' : null); ?>">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Materi
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/sidebar.blade.php ENDPATH**/ ?>