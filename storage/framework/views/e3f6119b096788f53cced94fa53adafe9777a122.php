<!-- NAVBAR -->
<style type="text/css">
.nav-link {
    font-weight: 500;
}

.btndown {
    background-color: #fff;
    color: #92CD16;
    padding: 10px;
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
    z-index: 100;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
.navbar-brand {
    margin-top: -30px;
    margin-left: -30px;
}
</style>
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-ful" src="<?php echo e(('/tema/images/inofa.png')); ?>" width="100" height="40" alt="Logo Inofa" href="/">
            </a>
         
                <?php if(Auth::guest()): ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="/"><li style="font-weight:500">Beranda</a></li>
                        <li style="font-weight:500"><a class="nav-link active" href="/probel-dinamis">Tryout</a></li>
                        <li style="font-weight:500"><a class="nav-link" href="/paket"><font weight="500">Paket</a></font></li>
                        <li><div class="btn-login"><a href="/login">Masuk</a></div></li>
                        <li><div class="btn-login"><a href="/registerPilih">Daftar</a></div></li>
                    </ul>
                </div>

                <?php elseif(Auth::check()): ?>
                <style type="text/css">
                    li .nav-link {
                        font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                        font-size: 14px;
                        font-weight: 500;
                        text-decoration: none;
                    }
                </style>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="/"><li style="font-weight:500">Beranda</a></li>
                        <li style="font-weight:500"><a class="nav-link active" href="/probel-dinamis">Tryout</a></li>
                        <li style="font-weight:500"><a class="nav-link" href="/paket"><font weight="500">Paket</a></font></li>
                        
                    </ul>
                </div>
                     <div class="dropdown">
    


                    <button class="btndown">
                            <span style="text-decoration: none"><b>Halo, <?php echo e(DB::table('users')->where('id','=', Auth::user()->id)->value('name')); ?></b></span>
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

                        <a href="/" class="dropdown-item"
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
        </nav>
    </header>
<?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/base/header_pu.blade.php ENDPATH**/ ?>