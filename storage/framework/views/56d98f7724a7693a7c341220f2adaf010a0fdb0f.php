<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Testimoni Siswa</h1>
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


                            <form action="<?php echo e(url('testimoni/add')); ?>"> <button class=" btn btn-md btn-success"
                                    style="float:right">Tambah Testimoni</button></form>

                            <table class="table table-bordered table-striped table-responsive-md" id="program">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Isi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $testi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="text-align:center">
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($d->user->name); ?></td>
                                        <td><?php echo e($d->isi); ?></td>

                                        <td class="d-flex justify-content-center" style="display:block;margin:auto">
                                            <a class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Profil Siswa" style="color:white"
                                                href="<?php echo e(route('profileSiswaAdmin', $d->murid_id)); ?>">
                                                <i class="fas fa-user-graduate"></i>
                                            </a>
                                            <a href="<?php echo e(route('testimoni.edit',$d->id)); ?>"
                                                class="btn btn-sm btn-primary mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Edit Testimoni"><i
                                                    class="far fa-edit"></i></a>

                                            <form action="<?php echo e(route('testimoni.delete',$d->id)); ?>" data-toggle="tooltip"
                                                data-placement="top" title="Hapus Testimoni" class="destroy"
                                                onclick="return confirm('Anda yakin ingin menghapus data?')">
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
        $('#program').DataTable();
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $('.accept').submit(function (e) {
        e.preventDefault();
        swal({
            title: 'Apakah anda yakin untuk mengajukan jadwal?',
            text: "Data akan diajukan secara permanen!",
            icon: "warning",
            buttons: {
                cancel: "Batalkan!",
                confirm: "Lanjutkan!",
            },
        }).then((result) => {
            if (result.value) {
                swal(

                )
                this.submit();
            } else {
                swal("Dibatalkan", "Data masih belum diajukan", "error");
            }
        })
    });
</script>
<script>
    var isiPesan = '<?php echo e(Session::get('
    success ')); ?>';
    var exist = '<?php echo e(Session::has('
    success ')); ?>';
    if (exist) {
        swal(
            'Sukses!',
            isiPesan,
            'success'
        )
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/testimoni.blade.php ENDPATH**/ ?>