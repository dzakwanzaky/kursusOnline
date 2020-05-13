<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/assets')); ?>/bootstrap/css/bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Jadwal Les</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
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
                        <table class="table table-responsive-lg table-bordered small" id="jadwal">
                            <thead class="thead-dark">

                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Sesi 1</th>
                                    <th id="hari2">Sesi 2</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($d->jadwal->name); ?></td>
                                    <td><?php echo e($d->invoice->kelas->kelas); ?></td>
                                    <td><?php echo e($d->mapel->mapel); ?></td>
                                    <td><?php echo e($d->hari1); ?> <?php echo e($d->waktu_hari1); ?></td>
                                    <td id="hari2td"><?php echo e($d->hari2); ?> <?php echo e($d->waktu_hari2); ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"><?php echo e($d->status); ?></button>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-sm btn-primary"
                                            href="<?php echo e(route('absen.show', $d->id)); ?>">
                                            Lihat Kehadiran
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sweet'); ?>
<script>
    $(document).ready(function () {
        $('#jadwal').DataTable();
    });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/murid.blade.php ENDPATH**/ ?>