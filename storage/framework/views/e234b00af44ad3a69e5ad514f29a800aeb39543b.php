<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pendaftaran Tryout Aktif</h1>
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
                                        <th>No Telepon</th>
                                        <th>Asal Sekolah</th>
                                        <th>Tryout</th>
                                        <th>Email</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                   
                                        <?php $no = 1; ?>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($d->nama_lengkap); ?></td>
                                        <td><?php echo e($d->no_telp); ?></td>
                                        <td><?php echo e($d->asal_sekolah); ?></td>
                                        <td><?php echo e($d->tryout->nama); ?></td>
                                        <td><?php echo e($d->email); ?></td>
                                        <td>
                                            <?php if($d->file==null): ?>
                                            <button name="status" class=" btn btn-sm btn-danger"
                                                style="text-align:center">BELUM UPLOAD</button>
                                            <?php else: ?>
                                            <a href="<?php echo e(url('/data_file/'.$d->file)); ?>" target="_blank">
                                                <?php echo e($d->file); ?>

                                            </a>
                                            <?php endif; ?>
                                        <td class="d-flex">
                                        <button class="btn btn-sm btn-success" value="<?php echo e($d->status); ?>">
                                        <?php echo e($d->status); ?> 
                                        </button>
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
<?php echo $__env->make('dashboard_admin/baseTryout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/pendaftaranTryoutAktif.blade.php ENDPATH**/ ?>