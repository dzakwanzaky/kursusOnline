<!-- NAVBAR -->
<style type="text/css">
.nav-link {
    font-weight: 500;
}

.btndown {
    background-color: #fff;
    color: #fff;
    padding: 16px;
    font-size: 15px;
    border: none;
    cursor:pointer;
    font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
.dropdown {
    position: relative;
    display: inline-block;
}
.wrapdown {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width:140px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 100;
    
}
.wrapdown a {
    color: #000;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.wrapdown a:hover {
    background-color: #f1f1f1;
}
.dropdown:hover .wrapdown {
display: block;
}
.dropdown:hover .btndown {
    background-color: #fff;
}
.left{
    float:left;
}
.right{
    float: right;
}
.wrapleft {
    left: 0;
}
.wrapright {
    right: 0;
}

</style>
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-bran" href="/landing">
                <img class="navbar-brand-full" src="<?php echo e(('/tema/images/inofa.png')); ?>" width="100" height="30" alt="Logo Inofa" href="/landing">
            </a>
                <?php if(Auth::guest()): ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li>
                            <a href="/" class="nav-link <?php echo e('/' == request()->path() ? 'nav-link active' : ''); ?>" >Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/probel-dinamis" class="nav-link <?php echo e('probel-dinamis' == request()->path() ? 'nav-link active' : ''); ?>">Program
                            </a>
                        </li>
                        <li>
                            <a href="/paket" class="nav-link <?php echo e('paket' == request()->path() ? 'nav-link active' : ''); ?>" href="/paket">Paket
                            </a>
                        </li>
                        <li><div class="btn-login"><a href="/login" class="nav-link <?php echo e('login' == request()->path() ? 'nav-link active' : ''); ?>" href="/login">Masuk
                            </a></div></li>
                        <li><div class="btn-login"><a href="/registerPilih" class="nav-link <?php echo e('registerPilih' == request()->path() ? 'nav-link active' : ''); ?>" href="/registerPilih">Daftar
                            </a></div></li>
                    </ul>
                </div>

                <?php elseif(Auth::check()): ?>
                 <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li>
                            <a href="/" class="nav-link <?php echo e('/' == request()->path() ? 'nav-link active' : ''); ?>" >Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/probel-dinamis" class="nav-link <?php echo e('probel-dinamis' == request()->path() ? 'nav-link active' : ''); ?>">Program
                            </a>
                        </li>
                        <li>
                            <a href="/paket" class="nav-link <?php echo e('paket' == request()->path() ? 'nav-link active' : ''); ?>" href="/paket">Paket
                            </a>
                        </li>
                    </ul>
                </div>
                    <div class="dropdown">
    


                    <button class="btndown">
                            <span><b>Halo, <?php echo e(DB::table('users')->where('id','=', Auth::user()->id)->value('name')); ?></b></span>
                    </button>



                      <div class="wrapdown">
                        

                        <?php if(Auth::user()->role == 'siswa'): ?>
                            <a href="/murid" class="dropdown-item">Dashboard</a>
                        <?php elseif(Auth::user()->role == 'tutor'): ?>
                            <a href="/tutor" class="dropdown-item">Dashboard</a>
                        <?php elseif(Auth::user()->role == 'admin'): ?>
                            <a href="/admin" class="dropdown-item">Dashboard</a>
                        </a>
                   
                        <?php endif; ?>

                       
                        <a href="/landing" class="dropdown-item"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                      <?php echo e(csrf_field()); ?>

                </form>
                        <?php endif; ?>
              </li>
            </div>
</div>
        </nav>
    </header>
<?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/header_p.blade.php ENDPATH**/ ?>