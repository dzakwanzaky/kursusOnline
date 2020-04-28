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
                                            <h1>Tambah Mata Pelajaran</h1>
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
                                    <form method="POST" action="<?php echo e(route('mapel.store')); ?>"
                                        enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>

                                        <input style="display:none" id="id_program" name="id_program"
                                            value="<?php echo e($id); ?>"></input>

                                        <div class="form-group">
                                            <label for="">Mata Pelajaran :</label>
                                            <input type="text" class="form-control" id="mapel" name="mapel" required>
                                        </div>


                                        <button type="submit" class="btn btn-primary d-block"
                                            style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;"
                                            onclick="return confirm('Anda yakin data sudah benar?')">
                                            Simpan
                                        </button>
                                </div>

                                </form>
                            </div>


                        </div>
                        <!-- /.col-md-6 -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>



        <!-- /.content -->



    </div>
    </div>
    

    <!-- /.content-header -->
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('script'); ?>
    <script>
        $('#add').click(function () {
            var html = ` <div class="form-group">
                        <label for="">Mata Pelajaran :</label>
                        <input type="text" class="form-control" id="mapel" name="mapel[]" style="float:left;width:95%" required>
                        <button type="button" name="remove" id="" class="btn btn-danger btn-md remove" style="float:right"><i class="far fa-trash-alt"></i></button>
                        
                    </div>  `
            $('#body').append(html);


        });
        $(document).on('click', '.remove', function () {
            $(this).closest("div").remove();
        });
    </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\baru\baru\resources\views/dashboard_admin/tambahMapel.blade.php ENDPATH**/ ?>