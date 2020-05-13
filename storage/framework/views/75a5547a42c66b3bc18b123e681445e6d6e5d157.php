 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

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
          
         
          <a href="/profileMurid" class="dropdown-item">
            <i class="fas fa-user"></i> Profil 
          </a>
          <a href="/changePasswordMurid" class="dropdown-item">
            <i class="fas fa-edit"></i> Ubah Kata Sandi 
          </a>
          <a href="/pilihMetode" class="dropdown-item">
            <i class="fas fa fa-cart-plus"></i> Beli Kelas Baru 
          </a>
          <a href="/" class="nav-link btn-login; dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
          &nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i> Keluar 
          </a>
          <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                      <?php echo e(csrf_field()); ?>

                </form>
          
      </li>
      </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/header.blade.php ENDPATH**/ ?>