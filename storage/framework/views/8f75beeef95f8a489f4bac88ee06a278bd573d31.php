 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span>Halo, <?php echo e(DB::table('users')->where('id','=', Auth::user()->id)->value('name')); ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header"><?php echo e(DB::table('users')->where('id','=', Auth::user()->id)->value('name')); ?></span>
          <div class="dropdown-divider"></div>
          <a href="/profileAdmin" class="dropdown-item">
            <i class="fas fa-user"></i> Profile 
          </a>
          <a href="/changePassword" class="dropdown-item">
          <i class="fas fa-edit"></i> Ubah Password 
          </a>
          <a href="<?php echo e(url('/landing')); ?>" class="dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i> Logout 
          </a>
          <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                      <?php echo e(csrf_field()); ?>

                </form>
      <br>
      </li>
      </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/dashboard_admin/header.blade.php ENDPATH**/ ?>