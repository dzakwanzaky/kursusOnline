<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">
            <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="120" height="43" alt="inofa Logo"
                href="/" style="display:block; margin-left:auto; margin-right:auto;">
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
                <li class="nav-item">
                    <a href="/admin" class="nav-link {{ Request::segment(1) === 'admin' ? 'nav-link active' : null }}">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="/daftarSiswa" class="nav-link {{ Request::segment(1) === 'daftarSiswa' ? 'nav-link active' : null }} nav-link {{ Request::segment(1) === 'daftarSiswaBelumAktif' ? 'nav-link active' : null }}
            nav-link {{ Request::segment(1) === 'daftarSiswaTidakAktif' ? 'nav-link active' : null }}">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>
                            Manajemen Siswa
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="/daftarTutor"
                        class="nav-link nav-link {{ Request::segment(1) === 'daftarTutor' ? 'nav-link active' : null }}
                {{ Request::segment(1) === 'daftarTutorBelumAktif' ? 'nav-link active' : null }} {{ Request::segment(1) === 'daftarTutorTidakAktif' ? 'nav-link active' : null }}">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>
                            Manajemen Tutor
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview 
                  {{ Request::segment(1) === 'list_pendaftaranSiswa' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'list_pendaftaranTutor' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'jadwalAktif' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'jadwalTidakAktif' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'jadwalMenungguOnline' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'jadwalAktifOnline' ? 'menu-open' : null }} 
                  {{ Request::segment(1) === 'jadwalDiajukanOnline' ? 'menu-open' : null }}
                  {{ Request::segment(1) === 'jadwalTidakAktifOnline' ? 'menu-open' : null }}
                  ">
                    <a href="#" class="nav-link nav-link
                  {{ Request::segment(1) === 'list_pendaftaranSiswa' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'list_pendaftaranTutor' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'jadwalAktif' ? 'nav-link active' : null }} 
                  {{ Request::segment(1) === 'jadwalTidakAktif' ? 'nav-link active' : null }} 
                  {{ Request::segment(1) === 'jadwalMenungguOnline' ? 'nav-link active' : null }} 
                  {{ Request::segment(1) === 'jadwalAktifOnline' ? 'nav-link active' : null }} 
                  {{ Request::segment(1) === 'jadwalDiajukanOnline' ? 'nav-link active' : null }}
                  {{ Request::segment(1) === 'jadwalTidakAktifOnline' ? 'nav-link active' : null }}
                      ">


                        <i class="nav-icon far fa-calendar"></i>
                        <p>
                            Manajemen Jadwal
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/list_pendaftaranSiswa"
                                class="nav-link 
                                {{ Request::segment(1) === 'list_pendaftaranSiswa' ? 'nav-link active' : null }}
                                {{ Request::segment(1) === 'list_pendaftaranTutor' ? 'nav-link active' : null }}
                                {{ Request::segment(1) === 'jadwalAktif' ? 'nav-link active' : null }} 
                                {{ Request::segment(1) === 'jadwalTidakAktif' ? 'nav-link active' : null }}                                 ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Offline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/jadwalMenungguOnline"
                                class="nav-link 
                                {{ Request::segment(1) === 'jadwalMenungguOnline' ? 'nav-link active' : null }} 
                                {{ Request::segment(1) === 'jadwalAktifOnline' ? 'nav-link active' : null }} 
                                {{ Request::segment(1) === 'jadwalDiajukanOnline' ? 'nav-link active' : null }}
                                {{ Request::segment(1) === 'jadwalTidakAktifOnline' ? 'nav-link active' : null }}">   
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Online</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/tryoutAktif" class="nav-link nav-link {{ Request::segment(1) === 'tryoutAktif' ? 'nav-link active' : null }}
                {{ Request::segment(1) === 'tryoutBelumAktif' ? 'nav-link active' : null }} ">
                        <i class="nav-icon far fa-folder"></i>
                        <p>
                            Pendaftaran Tryout

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="/daftarTryout"
                        class="nav-link {{ Request::segment(1) === 'daftarTryout' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'tryout' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'soal' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'tambahTryout' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'tambahSoal' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'daftarSoal' ? 'nav-link active' : null }}

                        ">
                        <i class="fas fa-book-reader nav-icon"></i>
                        <p>
                            Manajemen Tryout
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/manajemenProgram"
                        class="nav-link nav-link {{ Request::segment(1) === 'manajemenProgram' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'tambahProgram' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'editProgram' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'daftarMapel' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'editMapel' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'mapel' ? 'nav-link active' : null }}

                        ">
                        <i class="nav-icon far fa-clipboard"></i>
                        <p>
                            Manajemen Program
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="/manajemenPaket"
                        class="nav-link nav-link {{ Request::segment(1) === 'manajemenPaket' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'tambahPaket' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'editPaket' ? 'nav-link active' : null }}
                        {{ Request::segment(1) === 'paket' ? 'nav-link active' : null }}


                        ">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Manajemen Paket
                        </p>
                    </a>

                </li>
        <li class="nav-item">
            <a href="/testimoni" class="nav-link nav-link {{ Request::segment(1) === 'testimoni' ? 'nav-link active' : null }}">
            <i class="nav-icon far fa-comment-alt"></i>              
            <p>
                Testimoni
              </p>
            </a>
          
          </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>