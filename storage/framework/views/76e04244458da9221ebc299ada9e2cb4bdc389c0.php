<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Jadwal Aktif</h1>
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
                        <div class="card-body table-responsive-m" style="overflow-x:auto;">
                            <table class="table table-bordered table-striped table-responsive-md" id="siswa">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">

                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Nama Tutor</th>
                                        <th rowspan="2">Nama Siswa</th>
                                        <th rowspan="2">Program</th>
                                        <th rowspan="2">Kelas</th>
                                        <th rowspan="2">Mata Pelajaran</th>
                                        <th colspan="2" style="border-bottom:1px solid;border-bottom-color:#dee2e6">Sesi </th>
                                        <th rowspan="2">Status</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>1</th>
                                        <th>2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($d->tutor->name); ?></td>
                                        <td><?php echo e($d->jadwal->name); ?></td>
                                        <td><?php echo e($d->invoice->program->program); ?></td>
                                        <td><?php echo e($d->invoice->kelas->kelas); ?></td>
                                        <td><?php echo e($d->mapel->mapel); ?></td>
                                        <td><?php echo e($d->hari1); ?> <?php echo e($d->waktu_hari1); ?></td>
                                        <td id="hari2td"><?php echo e($d->hari2); ?> <?php echo e($d->waktu_hari2); ?></td>
                                        <td>
                                            <a class=" btn btn-sm btn-success" style="color:white;">
                                                <span><?php echo e($d->status); ?></span>
                                            </a>
                                        </td>
                                        <td class="d-flex">
                                            <a class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Profil Siswa" style="color:white"
                                                href="<?php echo e(route('profileSiswaAdmin', $d->murid_id)); ?>">
                                                <i class="fas fa-user-graduate"></i>
                                            </a>
                                            <a class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Profil Tutor" style="color:white"
                                                href="<?php echo e(route('profileTutorAdmin', $d->tutor_id)); ?>">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                                </i></a>
                                            <form action="<?php echo e(route('pendaftaranSiswa.update', $d->id)); ?>" method="post"
                                                enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('PUT')); ?>

                                                <input type="text" class="form-control" id="tutor_id" name="tutor_id"
                                                    style="display:none" value="<?php echo e($d->tutor_id); ?>">
                                                <button type="submit" value="TIDAK AKTIF" id="status" name="status"
                                                    class=" btn btn-sm btn-danger mr-1" data-toggle="tooltip"
                                                    data-placement="top" title="Non Aktifkan Jadwal" onclick="return confirm('Anda yakin ingin menonaktifkan jadwal?')"><i
                                                        class="fas fa-trash"></i>

                                            </form>
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
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sweet'); ?>
<script>
    $(document).ready(function () {
        $('#siswa').DataTable({
            "autoWidth": false
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard_admin/baseJadwal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/jadwalAktif.blade.php ENDPATH**/ ?>