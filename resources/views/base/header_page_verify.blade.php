<!-- NAVBAR -->
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="/landing">
                <img class="navbar-brand-full" src="{{('/tema/images/inofa.png')}}" width="140" height="30" alt="imam Logo" href="/landing">
            </a>
                @if (Auth::guest())
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="/">Beranda</a></li>
                        <li><a class="nav-link" href="/probel-dinamis">Program</a></li>
                        <li><a class="nav-link" href="/paket">Paket</a></li>
                        <li><div class="btn-login"><a href="/login">Masuk</a></div></li>
						<li><div class="btn-register"><a href="/registerPilih">Daftar</a></div></li>
                    </ul>
                </div>
                @else
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a href="/landing" class="nav-link btn-login"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        LOGOUT
                        </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                      {{ csrf_field() }}
                </form>
              </li></ul>
                </div>
                @endif
            </div>
        </nav>
    </header>
