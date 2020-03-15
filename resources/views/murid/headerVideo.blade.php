 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SD
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Matematika</a>
          <a class="dropdown-item" href="#">IPA</a>
          <a class="dropdown-item" href="#">Bahasa Indonesia</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link"  href="#">SMP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">SMA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">SBMPTN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">Seleksi Mandiri PTN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">CPNS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">Komputer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">Bahasa Inggris</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="#">Mengaji</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span>Halo, {{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">{{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
          <div class="dropdown-divider"></div>
          <a href="/profileMurid" class="dropdown-item">
            <i class="fas fa-user"></i> Profile 
          </a>
          <a href="/changePasswordMurid" class="dropdown-item">
            <i class="fas fa-edit"></i> Ubah Password 
          </a>
          <a href="{{ url('/landing') }}" class="nav-link btn-login; dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i>Logout 
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
          
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->