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
                                <h1>Ubah Password</h1>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">

                            <form method="POST" action="<?php echo e(route('change.password')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="text-danger"><?php echo e($error); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="form-group">
                                    <label for="password">Password Lama</label>

                                    <input id="password" type="password" class="form-control" name="current_password"
                                        autocomplete="current-password">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password Baru</label>

                                    <input id="new_password" type="password" class="form-control" name="new_password"
                                        autocomplete="current-password">
                                </div>

                                <div class="form-group">
                                    <label for="password">Masukkan Ulang Password Baru</label>

                                    <input id="new_confirm_password" type="password" class="form-control"
                                        name="new_confirm_password" autocomplete="current-password">
                                </div>

                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary d-block"
                                        style="width: 180px; border-radius:50px;margin-left:35%;"
                                        onclick="return confirm('Anda yakin data sudah benar?')">
                                        Simpan
                                    </button>
                                    &nbsp;&nbsp;&nbsp;
                                    <a class="btn btn-danger d-block" href="javascript:history.back()"
                                        style="width: 180px; border-radius:50px;"
                                        onclick="return confirm('Anda yakin ingin membatalkan?')">
                                        Batal
                                    </a>
                                </div>
                            </form>
                        </div>
                        <!-- /.form-group -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('tutor/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/tutor/changePassword.blade.php ENDPATH**/ ?>