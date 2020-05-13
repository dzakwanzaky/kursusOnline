<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-info" role="alert">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<?php if(session('warning')): ?>
<div class="alert alert-warning" role="alert">
  <?php echo e(session('warning')); ?>

</div>
<?php endif; ?>
<style type="text/css">
    .rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
    }
    hr.photo2 {
        width: 230px;

    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Profil Murid</h1>
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
<?php $no = 1; ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user mr-2"></i>Foto Profil

                        <hr class="photo">
                         <div class="rounded" >
                       
                            <?php if($d->file==null): ?>
                            <img class="navbar-brand-full" src="<?php echo e(('/tema/images/user.png')); ?>"
                                alt="upload foto" width="180px" height="170px"
                                style="display:block; margin-left:auto; margin-right:auto;">
                            <?php else: ?>
                            <a href="<?php echo e(url('/data_file/'.$d->file)); ?>" target="_blank">
                                <img width="180px" height="170px" src="<?php echo e(url('/data_file/'.$d->file)); ?>"
                                    style="display:block; margin-left:auto; margin-right:auto;">
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <hr class="photo2">
                        <h4 class="font-weight-normal" style="text-align:center" ><?php echo e($u->name); ?>

                        </h4>
                        <h6 class="font-weight-normal" style="text-align:center"><?php echo e($u->email); ?>

                            </h4>
                            <h6 class="font-weight-normal" style="text-align:center" value="<?php echo e($u->phone); ?>">
                                <?php echo e($u->phone); ?></h6>
                            <br>
                            <a href="<?php echo e(route('editMurid',$u->id)); ?>" class="btn-edit-info"
                                style="display:block; margin-left:auto; margin-right:auto;">Pengaturan Akun</a>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <table class="w-100 table-responsive-md">
                            <tbody>
                                <tr>
                                    <th>
                                        <br>
                                        Alamat
                                        <input type="text" class="form-control"
                                            value="<?php echo e($d->provinsi); ?> <?php echo e($d->kabupaten); ?> <?php echo e($d->kecamatan); ?>"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Jenis Kelamin
                                        <input type="text" class="form-control" value="<?php echo e($d->jenis_kelamin); ?>"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Tanggal Lahir
                                        <input type="text" class="form-control" value="<?php echo e($d->tanggal_lahir); ?>"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                        </div>
                        <td>
                            <a href="<?php echo e(route('dataSiswa.edit',$d->id)); ?>" class="btn-edit" style="margin-left:auto;">Edit
                                Profil</a>
                        </td>

                    </div>
                    <!-- /.col-md-6 -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/basee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/profile.blade.php ENDPATH**/ ?>