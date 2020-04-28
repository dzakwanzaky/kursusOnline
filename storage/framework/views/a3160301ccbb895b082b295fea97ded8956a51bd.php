<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
	  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
					        <div class="col-sm-6">
						        <p style="font-size:24px"> Edit Program</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/admin">Admin</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Edit Program
                                </li>
                            </ol>
                        </div>			
			  	    </div>			
                </div>
            </div>
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('program.update', $d->id)); ?>" method="post" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>

                <div class="form-group">
      
					<div class="form-group">
						<label for="">Nama Program :</label>
						<input type="text" class="form-control" id="program" name="program" value="<?php echo e($d->program); ?>" >
					</div>

                    <div class="form-group">
						<label for="">Keterangan :</label>
						<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo e($d->keterangan); ?>" >
					</div>
          <div class="form-group">
            <label for="">Keterangan Rinci :</label>
            <input type="text" class="form-control" id="keterangan_rinci" name="keterangan_rinci" value="<?php echo e($d->keterangan_rinci); ?>" >
          </div>
          <div class="form-group">
            <label for="">Gambar :</label>
            <input type="file" class="form-control" id="avatar" name="avatar" value="<?php echo e($d->avatar); ?>" >
          </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-md btn-success" onclick="return confirm('Anda yakin ingin merubah data?')">Simpan</button>
                            <a href="/manajemenProgram" class="btn btn-md btn-danger">Batal</a>
                    </div>
              </div>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
</div>
</div>
    <!-- /.content-header -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\baru\baru\resources\views/dashboard_admin/editProgram.blade.php ENDPATH**/ ?>