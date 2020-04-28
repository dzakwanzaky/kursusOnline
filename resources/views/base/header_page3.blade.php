<!-- NAVBAR -->
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="/landing">
                <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="100" height="30" alt="Logo Inofa" href="/landing">
            </a>
                @if (Auth::guest())
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
           
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav"><br>
                        <li><a class="nav-link" href="/">Beranda</a></li>
                        <li><a class="nav-link" href="/probel-dinamis">Program</a></li>
                        <li><a class="nav-link" href="/paket">Paket</a></li>
                        <li><div class="btn-login"><a href="/login">Masuk</a></div></li>
                        <li><div class="btn-register"><a href="/registerPilih">Daftar</a></div></li>
                    </ul>
                </div>

                @elseif(Auth::check())
                <style type="text/css">
                    li .nav-link {
                      margin-left: 840px;
                    }
                </style>
                    <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                            <span>Halo, {{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        

                        @if(Auth::user()->role == 'siswa')
                            <a href="/murid" class="dropdown-item">Dashboard</a>
                        @elseif(Auth::user()->role == 'tutor')
                            <a href="/tutor" class="dropdown-item">Dashboard</a>
                        @elseif(Auth::user()->role == 'admin')
                            <a href="/admin" class="dropdown-item">Dashboard</a>
                        </a>
                   
                        @endif

                        <br>
                        <a href="/landing" class="dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
                        @endif
              </li>
            </div>
        </nav>
    </header>
