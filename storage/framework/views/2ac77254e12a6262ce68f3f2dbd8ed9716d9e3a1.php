<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Jadwal Mengajar</h1>

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
                    <div class="card-body table-responsive-sm" style="overflow-x:auto;">
                        <table class="table table-responsive-lg table-bordered medium" id="jadwal">
                            <thead class="thead-dark">
                                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Alamat</th>
                                    <th rowspan="2">Program</th>
                                    <th rowspan="2">Kategori</th>
                                    <th rowspan="2">Kelas</th>
                                    <th rowspan="2">Mata Pelajaran</th>
                                    <th colspan="2" style="border-bottom:1px solid;border-bottom-color:#dee2e6">Sesi
                                    </th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                    <th>1</th>
                                    <th>2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <td><?php echo e($no++); ?></td>
                                    <td>
                                        <?php echo e($d->jadwal->name); ?>

                                    </td>

                                    <td>
                                        <?php echo e($d->siswa->provinsi); ?>,
                                        <?php echo e($d->siswa->kabupaten); ?>,
                                        <?php echo e($d->siswa->kecamatan); ?>,
                                        <?php echo e($d->siswa->alamat_detail); ?>


                                    </td>
                                    <td>
                                        <?php echo e($d->invoice->program->program); ?>

                                    </td>
                                    <td>
                                        <?php echo e($d->invoice->kategori); ?>

                                    </td>
                                    <td>
                                        <?php echo e($d->invoice->kelas->kelas); ?>

                                    </td>

                                    <td><?php echo e($d->mapel->mapel); ?></td>
                                    <td><?php echo e($d->hari1); ?> <?php echo e($d->waktu_hari1); ?></td>
                                    <td><?php echo e($d->hari2); ?> <?php echo e($d->waktu_hari2); ?></td>
                                    <td class="d-flex">
                                        <a href="<?php echo e(route('detailJadwal', $d->siswa->id)); ?>" type="button"
                                            class="btn btn-sm btn-info mr-2" data-toggle="tooltip" data-placement="top"
                                            title="Profile Siswa" style="color:white">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a type="button" style="color:white" class="btn btn-sm btn-warning"
                                                    data-toggle="tooltip" data-placement="top" title="Lihat Kehadiran"
                                                    href="<?php echo e(route('dataKehadiran', $d->id)); ?>">
                                                    <i class="fas fa-chart-bar"></i>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sweet'); ?>
<script>

    $(document).ready(function () {
        $('#jadwal').DataTable();
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tutor/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/tutor/jadwal.blade.php ENDPATH**/ ?>