<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Profile Tutor</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-md-right" style="font-size:14px">
                                    <li class="breadcrumb-item">
                                        <a href="/tutor">Tutor</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Profile Tutor
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
<?php $no = 1; ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user mr-2"></i>Foto Profile

                        <hr class="photo">
                        <div class="d-flex justify-content-center" style="overflow-x:auto;">
                            <?php if($d->foto==null): ?>
                            <img class="navbar-brand-full" src="<?php echo e(('/tema/images/user.png')); ?>" width="300px"
                                alt="upload foto" style="display:block; margin-left:auto; margin-right:auto;">
                            <?php else: ?>
                            <a href="<?php echo e(url('/data_file/'.$d->foto)); ?>" target="_blank">
                                <img width="250px" src="<?php echo e(url('/data_file/'.$d->foto)); ?>"
                                    style="display:block; margin-left:auto; margin-right:auto;">
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <hr class="photo">
                        <h4 class="font-weight-normal" style="text-align:center" value="<?php echo e($u->email); ?>"><?php echo e($u->name); ?>

                        </h4>
                        <h6 class="font-weight-normal" style="text-align:center" value="<?php echo e($u->email); ?>"><?php echo e($u->email); ?>

                            </h4>
                            <h6 class="font-weight-normal" style="text-align:center" value="<?php echo e($u->phone); ?>">
                                <?php echo e($u->phone); ?></h6>
                                <br>

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
                                        Alamat
                                        <input type="text" class="form-control"
                                            value="<?php echo e($d->provinsi); ?> <?php echo e($d->kabupaten); ?> <?php echo e($d->kecamatan); ?> <?php echo e($d->alamat_detail); ?>"
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
                            <a href="<?php echo e(route('dataTutor.edit',$d->id)); ?>" class="btn-edit" style="margin-left:auto;">Edit
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

<?php echo $__env->make('tutor/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/tutor/profiletutor.blade.php ENDPATH**/ ?>