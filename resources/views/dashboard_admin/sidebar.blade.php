<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">
        <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="120" height="43" alt="inofa Logo" href="/" style="display:block; margin-left:auto; margin-right:auto;">
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block" style="margin: 0 0 0 10px">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="/admin" class="nav-link {{ Request::segment(1) === 'admin' ? 'nav-link active' : null }}">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="/daftarTryout" class="nav-link {{ Request::segment(1) === 'daftarTryout' ? 'nav-link active' : null }}">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Manajemen Tryout
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="/daftarSiswa" class="nav-link {{ Request::segment(1) === 'daftarSiswa' ? 'nav-link active' : null }}">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Manajemen Murid
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/manajemenTutor" class="nav-link {{ Request::segment(1) === 'manajemenTutor' ? 'nav-link active' : null }}">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Manajemen Tutor
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/manajemenProgram" class="nav-link {{ Request::segment(1) === 'manajemenProgram' ? 'nav-link active' : null }}">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Manajemen Program
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview {{ Request::segment(1) === 'list_pendaftaranSiswa' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'list_pendaftaranTutor' ? 'menu-open' : null }}">
            <a href="#" class="nav-link nav-link {{ Request::segment(1) === 'list_pendaftaranSiswa' ? 'nav-link active' : null }}
                {{ Request::segment(1) === 'list_pendaftaranTutor' ? 'nav-link active' : null }}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Daftar Pengajuan Les
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/list_pendaftaranSiswa" class="nav-link {{ Request::segment(1) === 'list_pendaftaranSiswa' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran Les Murid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/list_pendaftaranTutor" class="nav-link {{ Request::segment(1) === 'list_pendaftaranTutor' ? 'nav-link active' : null }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajuan Les Tutor</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>