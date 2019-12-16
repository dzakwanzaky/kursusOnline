<!-- NAVBAR -->
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="/landing">
                <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="140" height="30" alt="imam Logo" href="/landing">
            </a>
                @if (Auth::guest())
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="#home">Beranda</a></li>
                        <li><a class="nav-link" href="#paket">Program</a></li>
                        <li><a class="nav-link" href="#bayar">Cara Bayar</a></li>
                        <li><div class="btn-login"><a href="/login">Masuk</a></div></li>
						<li><div class="btn-register"><a href="/registerPilih">Daftar</a></div></li>
                    </ul>
                </div>
                @else
                    <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                            <span>Halo, {{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header" style="text-transform: uppercase;text-align:center">{{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}</span>
                        <div class="dropdown-divider"></div>
                        <a href="/murid" class="dropdown-item">
                            Dashboard
                        </a>
                        <a href="/landing" class="dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
              </li>
                @endif
            </div>
        </nav>
    </header>
