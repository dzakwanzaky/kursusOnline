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
<!-- 
<div class="select">
   <select name="format" id="format">
      <option selected disabled>Pilih paket</option>
      <option value="pdf">PDF</option>
      <option value="txt">txt</option>
      <option value="epub">ePub</option>
      <option value="fb2">fb2</option>
      <option value="mobi">mobi</option>
   </select>
</div>
 -->	<section class="priching">

		<section class="heading">Paket Bimbingan Belajar SD</section>
		<div class="container">
			<div class="row">

	<div class="owl-carousel owl-theme">
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4><?php echo e($u->nama_paket); ?></h4>
							<h2><span class="supertext">Rp</span><h4i><?php echo e($u->harga); ?></h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text"><?php echo e($u->jumlah_mapel); ?>&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text"><?php echo e($u->jumlah_pertemuan); ?>&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    		</div>
			</div>
		</div>
	</section>

<section class="priching">
		<section class="heading">Paket Bimbingan Belajar SMP</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				<?php $__currentLoopData = $dats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4><?php echo e($u->nama_paket); ?></h4>
							<h2><span class="supertext">Rp</span><h4i><?php echo e($u->harga); ?></h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text"><?php echo e($u->jumlah_mapel); ?>&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text"><?php echo e($u->jumlah_pertemuan); ?>&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			</div>
		</div>
	</section>


<section class="priching">
		<section class="heading">Paket Bimbingan Belajar SMA</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				<?php $__currentLoopData = $das; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4><?php echo e($v->nama_paket); ?></h4>
							<h2><span class="supertext">Rp</span><h4i><?php echo e($v->harga); ?></h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text"><?php echo e($v->jumlah_mapel); ?>&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text"><?php echo e($v->jumlah_pertemuan); ?>&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			</div>
		</div>
	</section>

<section class="priching">
		<section class="heading">Paket Bimbingan Belajar SBMPTN</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				<?php $__currentLoopData = $sbm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4><?php echo e($w->nama_paket); ?></h4>
							<h2><span class="supertext">Rp</span><h4i><?php echo e($w->harga); ?></h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text"><?php echo e($w->jumlah_mapel); ?>&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text"><?php echo e($w->jumlah_pertemuan); ?>&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			</div>
		</div>
	</section>



<section class="priching">
		<section class="heading">Paket Bimbingan Belajar CPNS</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				<?php $__currentLoopData = $cpns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4><?php echo e($z->nama_paket); ?></h4>
							<h2><span class="supertext">Rp</span><h4i><?php echo e($z->harga); ?></h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text"><?php echo e($z->jumlah_mapel); ?>&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text"><?php echo e($z->jumlah_pertemuan); ?>&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			</div>
		</div>
	</section>
<section class="priching">
		<section class="heading">Paket Bimbingan Belajar Komputer</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				<?php $__currentLoopData = $komp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4><?php echo e($m->nama_paket); ?></h4>
							<h2><span class="supertext">Rp</span><h4i><?php echo e($m->harga); ?></h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text"><?php echo e($m->jumlah_mapel); ?>&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text"><?php echo e($m->jumlah_pertemuan); ?>&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			</div>
		</div>
	</section>

	<script src="<?php echo e(asset('/button')); ?>/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo e(asset('/button')); ?>/owl.carousel.js" type="text/javascript"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>

</bod>


<?php echo $__env->make('base/script_h', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\now\kursusOnline2\resources\views/base/paket.blade.php ENDPATH**/ ?>