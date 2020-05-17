<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard Admin</h1>
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
            <div class="container">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3><?php echo e(DB::table('model_invoice')->where('kategori','=','OFFLINE')->count()); ?></h3>

                                        <p>Pendaftaran Jadwal <br> Offline</p>
                                    </div>
                                    <div class="icon">
                                    <i class="far fa-calendar"></i>
                                    </div>
                                    <a href="/list_pendaftaranSiswa" class="small-box-footer">More info
                                    <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-orange">
                                    <div class="inner">
                                        <h3><?php echo e(DB::table('model_invoice')->where('kategori','=','ONLINE')->count()); ?></h3>

                                        <p>Pendaftaran Jadwal <br> Online</p>
                                    </div>
                                    <div class="icon">
                                    <i class="far fa-calendar"></i>
                                    </div>
                                    <a href="/jadwalMenungguOnline" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3><?php echo e(DB::table('model_siswas')->where('status','BELUM AKTIF')->count()); ?></h3>
                                        <p>Pendaftaran <br>
                                         Siswa</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <a href="/daftarSiswaBelumAktif" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3><?php echo e(DB::table('model_tutors')->where('status','BELUM AKTIF')->count()); ?></h3>

                                        <p>Pendaftaran <br> Tutor</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <a href="/daftarTutorBelumAktif" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                          
                          
                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box" style="background-color:#E5FA18">
                                    <div class="inner">
                                        <h3><?php echo e(DB::table('model_formulirs')->where('status','!=','BELUM AKTIF')->count()); ?></h3>

                                        <p>Pendaftaran <br> Tryout</p>
                                    </div>
                                    <div class="icon">
                                    <i class="fas fa-folder"></i>
                                    </div>
                                    <a href="/tryoutBelumAktif" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
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
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/dashboard_admin/admin.blade.php ENDPATH**/ ?>