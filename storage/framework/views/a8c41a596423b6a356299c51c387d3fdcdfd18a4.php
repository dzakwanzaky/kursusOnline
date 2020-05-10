<link href="<?php echo e(asset('/button')); ?>/tombol.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php echo e(asset('/view')); ?>/css/style.css">
<?php echo $__env->make('base/header_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!-- END nav -->

<!-- <div class="js-fullheight"> -->



<!-- LANDING PAGE -->
<div id="home" class="parallax first-section" style="background-image:url('tema/images/bimbel.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="row mb-4">
                    <?php if(Auth::guest()): ?>
                    <div class="col-md-7">
                        <h3>Gabung bersama kami dan</h3>
                        <h3>raih suksesmu!</h3>
                        <p class="lead"></p>
                        <a data-scroll href="/registerPilih" class="btn btn-light btn-radius btn-brd"
                            style="font-weight:bold"> GABUNG SEKARANG! </a>
                    </div>
                    <?php else: ?>
                    <div class="col-md-7">
                        <h3>Gabung bersama kami dan</h3>
                        <h3>raih suksesmu!</h3>
                        <p class="lead"></p>
                        <a data-scroll href="/" class="btn btn-light btn-radius btn-brd" style="font-weight:bold">INOFA
                            COURSE</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->



<section class="ftco-section ftco-bg-dark">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-6 text-center heading-section ftco-animate">
                <br>
                <br>

                <h2 class="mb-4" style="color:#4a4a4a">Kenapa harus memilih Inofa Bimbel ?</h2>
                <p>
                    <font size="4px">Anda semakin beruntung karena semua manfaat ini hanya ada di Inofa Bimbel
                </p>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon color-3 d-flex justify-content-center mb-3"><span
                                class="align-self-center fa fa-calendar-check-o"></span></div>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Efektivitas</h2>
                        <p>
                            <font size="4px">Dengan metode tatap muka memudahkan siswa menyerap materi sehingga belajar
                                makin efektif.
                        </p>
                        </font>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon color-1 d-flex justify-content-center mb-3"><span
                                class="align-self-center  fa fa-tripadvisor"></span></div>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Fokus</h2>
                        <p>
                            <font size="4px">Fokus dengan materi yang diajarkan oleh tutor karena dengan tatap muka
                                secara langsung.</font>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon color-2 d-flex justify-content-center mb-3"><span
                                class="align-self-center fa fa-refresh"></span></div>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Fleksibel</h2>
                        <p>
                            <font size="4px">Penawaran jadwal hari, waktu, dan tempat yang dapat disesuaikan dengan
                                kebutuhan siswa dan tentor.</font>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="d-flex justify-content-center">
                        <div class="icon color-4 d-flex justify-content-center mb-3"><span
                                class="align-self-center  fa fa-lightbulb-o"></span></div>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Maksimalkan potensi</h2>
                        <p>
                            <font size="4px">Kami menawarkan cara belajar yang cocok dan sesuai untuk memaksimalkan
                                potensi setiap siswa
                        </p>
                        </font>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio.html" class="image image-2 " style="background-image: url('images/work-2.jpg');"
                        data-scrollax=" properties: { translateY: '-20%'}"></a>
                    <div class="text">
                        <h4 class="subheading">Program</h4>
                        <h2 class="heading"><a href="portfolio.html">Banyak program yang kami tawarkan untuk Anda</a>
                        </h2>
                        <p>Program kami sangat beraneka ragam. Hal ini kami lakukan untuk semakin memperluas jangkauan
                            pelayanan kami kepada semua pengguna Bimbel Inofa. Kami mengedepankan kepuasan Anda.</p>
                        <p><a href="/probel-dinamis" class="btn btn-primary px-4">Lihat Program</a></p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio.html" class="image image-2 order-2"
                        style="background-image: url('images/work-2.jpg');"
                        data-scrollax=" properties: { translateY: '-20%'}"></a>
                    <div class="text order-1">
                        <h4 class="subheading">Soal Latian</h4>
                        <h2 class="heading"><a href="portfolio.html">Banyak soal latihan untuk memperdalam pemahaman
                                Anda</a></h2>
                        <p>Soal latihan dan pembahasan yang kami berikan merupakan suatu bentuk pelayanan kami kepada
                            pengguna agar pengguna semakin mengerti dan paham akan pelayanan kami. </p>
                        <p><a href="/probel" class="btn btn-primary px-4">Lihat Soal</a></p>
                    </div>
                </div>
                <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                    <a href="portfolio.html" class="image image-2" style="background-image: url('images/work-3.jpg'); "
                        data-scrollax=" properties: { translateY: '-20%'}"></a>
                    <div class="text">
                        <h4 class="subheading">Proses</h4>
                        <h2 class="heading"><a href="portfolio.html">Proses pendaftaran mudah, murah dan terpercaya</a>
                        </h2>
                        <p>Bimbingan belajar kami sudah dipercayai oleh banyak pengguna dikarenakan selain lengkap,
                            bimbingan kami juga murah dalam biaya dan proses pendaftaran untuk mendapatkan layanan dari
                            kami juga sangat mudah.</p>
                        <p><a href="/tentangkami" class="btn btn-primary px-4">Tentang Kami</a></p>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <div class="row">
            yy
    </section>
</section>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">

                <h2 class="mb-4" style="color:#4a4a4a">Testimoni Pengguna</h2>
                <p>
                    <font size="4px">Testimoni dari pengguna yang telah menggunakan Inofa Bimbel untuk membantu meraih
                        mimpi mereka
                </p>
                </font>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4">
                                <img class="user-img mb-4" src="<?php echo e(url('/data_file/'.$d->siswa->file)); ?>"
                                    style="display:block; margin-left:auto; margin-right:auto; width: 83px; height: 77px;">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text">
                                <p class="mb-5"><?php echo e($d->isi); ?></p>
                                <p class="name" style="color:#4a4a4a"><?php echo e($d->user->name); ?></p>
                                <span class="position"><?php echo e($d->siswa->files->program->program); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>





<section class="ftco-section ftco-bg-dark">
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="h4">Lalu, Tunggu apa lagi<strong class="px-3">gabung bersama kami sekarang</strong></h4>


                <div class="box">
                    <a href="/login" class="btn btn-white btn-animation-1">
                        <font color="#DB7093">Gabung sekarang</font>
                    </a>

                </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</section>

<?php echo $__env->make('base/footer_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>




<script src="<?php echo e(asset('/view')); ?>/js/jquery.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/popper.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/aos.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/jquery.timepicker.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/particles.min.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/particle.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo e(asset('/view')); ?>/js/google-map.js"></script>
<script src="<?php echo e(asset('/view')); ?>/js/main.js"></script>

</body>

</html>

<?php echo $__env->make('base/script_here', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/home_page.blade.php ENDPATH**/ ?>