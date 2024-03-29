<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Tutor Aktif</h1>
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
                            <table class="table table-bordered table-striped table-responsive-md" id="datakaryawan">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <?php $no = 1; ?>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($d->tutor->name); ?></td>
                                        <td><?php echo e($d->jenis_kelamin); ?></td>
                                        <td><?php echo e($d->kota); ?> <?php echo e($d->kecamatan); ?> <?php echo e($d->provinsi); ?> </td>
                                        <td>
                                            <button id="status" name="status" class="btn btn-sm btn-success"
                                                type="submit" style="text-align:center">
                                                <?php echo e($d->status); ?></button>
                                        </td>
                                        <td class="text-center d-flex">
                                            <form action="<?php echo e(route('statusTutor', $d->id)); ?>"
                                                enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <input style="display:none" value="TIDAK AKTIF" id="status"
                                                    name="status"></input>
                                                <a id="status" name="status" class="btn btn-sm btn-info mr-2"
                                                    data-toggle="tooltip" data-placement="top" title="Detail Tutor"
                                                    style="color:white" href="<?php echo e(route('profileTutorAdmin', $d->id)); ?>"><i
                                                        class="fas fa-info-circle"></i></a>
                                              
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    data-toggle="tooltip" data-placement="top" title="Nonaktifkan Tutor"
                                                    style="text-align:center" onclick="return confirm('Anda yakin mau menonaktifkan tutor?')"><i class="far fa-trash-alt"></i></button>

                                        </td>
                                        </form>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sweet'); ?>
<script>
    $(document).ready(function () {
        $('#datakaryawan').DataTable({
            "autoWidth": false
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard_admin/baseTutor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/daftarTutor.blade.php ENDPATH**/ ?>