<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manajemen Paket</h1>
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

  
                            <form action="<?php echo e(route('tambahPaket')); ?>"> <button class=" btn btn-md btn-success"
                                    style="float:right">Tambah Paket</button></form>

                            <table class="table table-bordered table-striped table-responsive-md" id="program">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>No.</th>
                                        <th>Nama Paket</th>
                                        <th>Program</th>
                                        <th>Kategori</th>
                                        <th>Jumlah Mata Pelajaran </th>
                                        <th>Jumlah Pertemuan</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($d->nama_paket); ?></td>
                                        <td><?php echo e($d->program); ?></td>
                                        <td><?php echo e($d->kategori); ?></td>
                                        <td><?php echo e($d->jumlah_mapel); ?> Mata Pelajaran</td>
                                        <td><?php echo e($d->jumlah_pertemuan); ?> Pertemuan</td>
                                        <td><?php echo e($d->harga); ?></td>

                                        <td class="d-flex">
                                        <a href="<?php echo e(route('paket.edit',$d->id)); ?>" class="btn btn-sm btn-primary mr-2"
                                        data-toggle="tooltip"
                                                data-placement="top" title="Edit Paket"><i class="far fa-edit"></i></a>
                                            <form action="<?php echo e(route('paket.destroy', $d->id)); ?>" method="post" data-toggle="tooltip"
                                                data-placement="top" title="Hapus Paket"
                                                class="destroy" onclick="return confirm('Anda yakin ingin menghapus data?')"> 
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                                <button type="submit" class="btn btn-sm btn-danger mr-2"
                                                    style="color:white"><i class="far fa-trash-alt"></i></button>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sweet'); ?>
<script>
    $(document).ready(function () {
        $('#program').DataTable({
            "autoWidth": false
          });
        });

    $(function () {
          $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\now\kursusOnline2\resources\views/dashboard_admin/manajemenPaket.blade.php ENDPATH**/ ?>