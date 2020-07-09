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
                                            <h1>Tambah Paket</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="javascript:history.back()">Manajemen Paket</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Tambah Paket
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
                                <div class="form-group">
                                    <form method="POST" action="<?php echo e(route('paket.store')); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>


                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p class="text-danger"><?php echo e($error); ?></p>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <div class="form-group">
                                            <label for="">Nama Paket :</label>
                                            <input type="text" class="form-control" id="nama_paket" name="nama_paket"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Program :</label>
                                            <select class="form-control" id="program_id" name="program_id" required>
                                                <option value="">Pilih Program Paket</option>

                                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($d->id); ?>"><?php echo e($d->program); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Kategori :</label>
                                            <select class="form-control" id="kategori" name="kategori" required>
                                                <option value="">Pilih Kategori Paket</option>
                                                <option value="ONLINE">ONLINE</option>
                                                <option value="OFFLINE">OFFLINE</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jumlah Mata Pelajaran :</label>
                                            <input type="text" class="form-control" id="jumlah_mapel"
                                                name="jumlah_mapel" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jumlah Pertemuan :</label>
                                            <input type="text" class="form-control" id="jumlah_pertemuan"
                                                name="jumlah_pertemuan" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Harga :</label>
                                            <input type="text" class="form-control" id="harga" name="harga" required>
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

                                </div>
                            </div>


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

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/tambahPaket.blade.php ENDPATH**/ ?>