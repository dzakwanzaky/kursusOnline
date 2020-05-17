<!-- NAVBAR -->
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="/">
                <img class="navbar-brand-full" src="<?php echo e(('/tema/images/inofa.png')); ?>" width="140" height="30" alt="imam Logo" href="/">
            </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="/">Beranda</a></li>
                        <li><div class="btn-login"><a href="/login">Masuk</a></div></li>
						<li><div class="btn-register"><a href="/registerPilih">Daftar</a></div></li>
                    </ul>
                </div>

                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                      <?php echo e(csrf_field()); ?>

                </form>
              </li>
            </div>
        </nav>
    </header>
<?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/header_page2.blade.php ENDPATH**/ ?>