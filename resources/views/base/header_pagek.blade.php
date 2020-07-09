<!-- NAVBAR -->
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="100" height="40" alt="Logo Inofa" href="/">
            </a>
         
                @if (Auth::guest())
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="/"><li style="font-weight:500">Beranda</a></li>
                        <li style="font-weight:500"><a class="nav-link" href="/probel-dinamis">Tryout</a></li>
                        <li style="font-weight:500"><a class="nav-link" href="/paket"><font weight="500">Paket</a></font></li>
                        <li><div class="btn-login"><a href="/login" class=" nav-link active">Masuk</a></div></li>
                        <li><div class="btn-login"><a href="/registerPilih" class=" nav-link">Daftar</a></div></li>
                    </ul>
                </div>

                @elseif(Auth::check())
                <style type="text/css">
                    li .nav-link {
                        font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                        font-size: 14px;
                        font-weight: 500;
                    }
                </style>
                    <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                            <span>Halo, {{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header" style="text-transform: uppercase;text-align:center">{{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
                        <div class="dropdown-divider"></div>

                        @if(Auth::user()->role == 'siswa')
                            <a href="/murid" class="dropdown-item">Dashboard</a>
                        @elseif(Auth::user()->role == 'tutor')
                            <a href="/tutor" class="dropdown-item">Dashboard</a>
                        @elseif(Auth::user()->role == 'admin')
                            <a href="/admin" class="dropdown-item">Dashboard</a>
                        </a>
                   
                        @endif

                        <br>
                        <a href="/" class="dropdown-item"
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
