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
