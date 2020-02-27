<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">
        <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="120" height="43" alt="inofa Logo" href="/landing" style="display:block; margin-left:auto; margin-right:auto;">
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block" style="margin: 0 0 0 10px;">
          @if(DB::table('model_tutors')->where('id', '=', Auth::user()->id)->value('foto')==null)
          <i class="fas fa-user"></i>
          @else
          <img src="{{url('/data_file/'.DB::table('model_tutors')->where('id', '=', Auth::user()->id)->value('foto'))}}" class="img-circle elevation-2" alt="User Image" style="width:30px;height:30px;border: 1.5px solid">
          @endif
          Tutor</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="/tutor" class="nav-link {{ Request::segment(1) === 'tutor' ? 'nav-link active' : null }}">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Manajemen Murid
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jadwal" class="nav-link {{ Request::segment(1) === 'jadwal' ? 'nav-link active' : null }}">
              <i class="far fa-calendar nav-icon"></i>
              <p>
                Jadwal Mengajar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>