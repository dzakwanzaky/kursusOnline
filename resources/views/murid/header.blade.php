<link rel="stylesheet" href="{{asset('/ya')}}/bootstrap/css/bootstrap.min.css">
<style type="text/css">
  .h6 {
    text-align: center;
    margin-top: 15px;
    font-color: #6c757d;
}
.modall-title {
    margin-left: 8em;
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
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
         
          <a href="/profileMurid" class="dropdown-item">
            <i class="fas fa-user"></i> Profil 
          </a>
          <a href="/changePasswordMurid" class="dropdown-item">
            <i class="fas fa-edit"></i> Ubah Kata Sandi 
          </a>
          

          <a href="/" class="nav-link btn-login; dropdown-item" data-toggle="modal" data-target="#exampleModal">
          &nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i> Keluar 
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
          
      </li>
      </ul>
  </nav>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modall-title" id="exampleModalLabel">Konfirmasi Aksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h6 class="h6" style="color: #2c3034">Anda yakin <br>ingin keluar dari akun Anda ?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Yakin</button>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('/ya')}}/bootstrap/js/bootstrap.min.js"></script>
  <!-- /.navbar -->