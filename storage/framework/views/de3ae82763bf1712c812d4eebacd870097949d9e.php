<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-12 col-md-offset-6">
                            <div class="box box-primary">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1> Edit Testimoni Siswa</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="/testimoni">Testimoni</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Edit Testimoni
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
                                <form action="<?php echo e(route('testimoni.update', $d->id)); ?>" method="post"
                                    enctype="multipart/form-data">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="text-danger"><?php echo e($error); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <label for="">Nama Siswa :</label>
                                        <select id="murid_id" name="murid_id" class="form-control"
                                            value="<?php echo e($d->murid_id); ?>" required>
                                            <option value="<?php echo e($d->murid_id); ?>"><?php echo e($d->murid_id); ?> - <?php echo e($d->user->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($d->id); ?>"><?php echo e($d->id); ?> - <?php echo e($d->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                    </div>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="form-group">
                                        <label for="">Isi :</label>
                                        <textarea type="text" class="form-control" id="isi" name="isi"
                                            value="<?php echo e($d->isi); ?>" required><?php echo e($d->isi); ?></textarea>
                                    </div>


                                    <div class="d-flex">
                                            <button type="submit" class="btn btn-primary d-block"
                                                style="width: 180px; border-radius:50px;margin-left:35%;"
                                                onclick="return confirm('Anda yakin data sudah benar?')">
                                                Simpan
                                            </button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger d-block" href="/testimoni"
                                                style="width: 180px; border-radius:50px;"
                                                onclick="return confirm('Anda yakin ingin membatalkan?')">
                                                Batal
                                            </a>
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

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/editTestimoni.blade.php ENDPATH**/ ?>