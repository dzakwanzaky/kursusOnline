 <!-- Navbar -->
 <style>
   .wrapdown {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width:140px;
    z-index: 100;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
 </style>
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
          <span>Halo, {{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg wrapdown">
          
         
          <a href="/profileMurid" class="dropdown-item">
            <i class="fas fa-user"></i> Profile 
          </a>
          <a href="/changePasswordMurid" class="dropdown-item">
            <i class="fas fa-edit"></i> Ubah Password 
          </a>
          <a href="{{ url('/') }}" class="nav-link btn-login; dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i> Logout 
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
          
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->