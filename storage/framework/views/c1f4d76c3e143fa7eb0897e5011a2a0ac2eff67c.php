<?php echo $__env->make('base/nyekrip', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light" >
				<div class="page-header-content header-elements-md-inline">
				

				</div>

		<br>
		<br>
		<br>
			<div class="content">
				<div class="row">
					<br>
					<?php $no = 1; ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-md-4">

						<!-- Left alignment -->
							<br>
							<div class="card text-center" style="height:360;">
							<div class="card-body"><br>
								 <img src="<?php echo e($d->getAvatar()); ?>" width="100" height="90"></img>
								<h5 class="card-title"><font size="3"><b><font color="#000000"><br><?php echo e($d->program); ?></font></b></font></h5>
								<p2 class="mb-3"><font face="calibri"><font color="#565656"><?php echo e($d->keterangan); ?></font></font></p2>
									<br>
									<br>
								<a href="/program/<?php echo e($d->id); ?>/rinci" class="btn bg-primary-400">Selanjutnya <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<!-- /left alignment -->

						

						<!-- /right alignment -->

		


</div>
</div>


<?php /**PATH C:\Users\ASUS\Pictures\baru\baru\resources\views/base/card-dinamis.blade.php ENDPATH**/ ?>