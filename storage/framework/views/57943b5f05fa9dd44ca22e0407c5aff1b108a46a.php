<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 id="div1" name="div1" class="m-0 text-dark">Daftar Soal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                    <ol class="breadcrumb float-md-right" style="font-size:14px">
                        <li class="breadcrumb-item">
                            <a href="/daftarTryout">Daftar Tryout</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Daftar Soal
                        </li>
                    </ol>
                </div>
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
                            <table class="table table-bordered table-striped table-responsive-md" id="siswa">
                                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('tambahSoal', $d->id)); ?>" class="btn btn-md btn-success"
                                    style="float:right">Tambah Soal</a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <br>
                                <br>
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Soal</th>
                                        <th rowspan="2">Gambar</th>
                                        <th colspan="5" style="border-bottom:1px solid;border-bottom-color:#f4f4f5">
                                            Option</th>
                                        <th rowspan="2">Jawaban</th>
                                        <th rowspan="2">Pembahasan</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase;">
                                        <th>A</th>
                                        <th>B</th>
                                        <th>C</th>
                                        <th>D</th>
                                        <th>E</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($d->nomor_soal); ?></td>
                                        <td><?php echo $d->soal; ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/data_file/'.$d->file)); ?>" target="_blank">
                                                <img width="50px" src="<?php echo e(url('/data_file/'.$d->file)); ?>">
                                            </a>
                                        </td>
                                        <td><?php echo e($d->option_a); ?></td>
                                        <td><?php echo e($d->option_b); ?></td>
                                        <td><?php echo e($d->option_c); ?></td>
                                        <td><?php echo e($d->option_d); ?></td>
                                        <td><?php echo e($d->option_e); ?></td>
                                        <td><?php echo $d->jawaban; ?></td>
                                        <td><?php echo $d->pembahasan; ?></td>
                                        <form action="<?php echo e(route('soal.destroy', $d->id)); ?>" method="post"
                                                class="destroy">
                                        <td class="d-flex">
                                           
                                                <a type="button" class="btn btn-sm btn-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit Soal"
                                                    href="<?php echo e(route('soal.edit',$d->id)); ?>"><i class="far fa-edit"></i></a>
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                                <button type="submit" class="btn btn-sm btn-danger mr-2"
                                                    style="color:white" data-toggle="tooltip" data-placement="top" title="Hapus Soal"
                                                    onclick="return confirm('Anda yakin akan menghapus soal?')"><i class="far fa-trash-alt"></i></button>
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
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script>
    $(document).ready(function () {
        $('#siswa').DataTable({
            "autoWidth": false
        });

        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/daftarSoal.blade.php ENDPATH**/ ?>