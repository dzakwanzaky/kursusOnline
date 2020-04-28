   <?php echo $__env->make('base/header_page0', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   

   <head>
       <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="<?php echo e(asset('/button')); ?>/paket.css">
       <link rel="stylesheet" href="<?php echo e(asset('/button')); ?>/dropdown.css">
       <link rel="stylesheet" href="<?php echo e(asset('/button')); ?>/owl.carousel.css">
       <link rel="stylesheet" href="<?php echo e(asset('/button')); ?>/owl.theme.default.min.css">

   </head>
   <bod>
       <br>
       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       <section class="priching">

           <section class="heading">Paket Bimbingan Belajar <?php echo e($d->program); ?></section>
           <div class="container">
               <div class="row">
               <div class="owl-carousel owl-theme">
			   <?php $__currentLoopData = ($d->paket); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				   <div class="col-sm-4">
                    <div class="price-table">
                        <div class="price-head">
                            <p>Paket</p>
                            <h4><?php echo e($d->nama_paket); ?></h4>
                            <h2><span class="supertext">Rp</span>
                                <h4i><?php echo e($d->harga); ?></h4i><span class="subtext">/Bulan</span>
                            </h2>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><span class="text"><?php echo e($d->jumlah_mapel); ?>&nbsp;</span>pilihan mapel</li>
                                <li><span class="text">60&nbsp;</span>menit durasi</li>
                                <li><span class="text"><?php echo e($d->jumlah_pertemuan); ?>&nbsp;</span>kali pertemuan</li>

                            </ul>
                        </div>
                     
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                   </div>
               </div>
           </div>
       </section>
<br>
<br>
<br>
<br>


       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


       </div>
       </div>
       </section>
<?php echo $__env->make('base/futerbawah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <script src="<?php echo e(asset('/button')); ?>/jquery.min.js" type="text/javascript"></script>
       <script src="<?php echo e(asset('/button')); ?>/owl.carousel.js" type="text/javascript"></script>
       <script type="text/javascript">
           $('.owl-carousel').owlCarousel({
               loop: true,
               margin: 10,
               nav: false,
               autoplay:0.3,
               responsive: {
                   0: {
                       items: 1
                   },
                   600: {
                       items: 3
                   },
                   1000: {
                       items: 3
                   }
               }
           })
       </script>



<?php echo $__env->make('base/script_h', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\baru\baru\resources\views/base/paket.blade.php ENDPATH**/ ?>