<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->
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
                                            <h1 class="m-0 text-dark">Detail Tutor</h1>
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
        <?php $no = 1; ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-user mr-2"></i>Foto Profile

                                <hr class="photo">
                                <div class="d-flex justify-content-center" style="overflow-x:auto;">
                                    <?php if($d->foto==null): ?>
                                    <img class="navbar-brand-full" src="<?php echo e(('/tema/images/user.png')); ?>" width="300px"
                                        alt="upload foto" style="display:block; margin-left:auto; margin-right:auto;">
                                    <?php else: ?>
                                    <a href="<?php echo e(url('/data_file/'.$d->foto)); ?>" target="_blank">
                                        <img width="250px" src="<?php echo e(url('/data_file/'.$d->foto)); ?>"
                                            style="display:block; margin-left:auto; margin-right:auto;">
                                    </a>
                                    <?php endif; ?>
                                </div>
                                <hr class="photo">
                                <h4 class="font-weight-normal" style="text-align:center"><?php echo e($d->tutor->name); ?>

                                </h4>
                                <h6 class="font-weight-normal" style="text-align:center"><?php echo e($d->tutor->email); ?>

                                    </h4>
                                    <h6 class="font-weight-normal" style="text-align:center">
                                        <?php echo e($d->tutor->phone); ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <table class="w-100 table-responsive-md">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Alamat
                                                <input type="text" class="form-control"
                                                    value="<?php echo e($d->provinsi); ?> <?php echo e($d->kabupaten); ?> <?php echo e($d->kecamatan); ?>"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Jenis Kelamin
                                                <input type="text" class="form-control" value="<?php echo e($d->jenis_kelamin); ?>"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            </th>
                                        </tr>
                                        <tr>
                                           
                                          
                                            <th>
                                                Pendidikan
                                                <input type="text" class="form-control" value="<?php echo e($d->pendidikan); ?>"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            </th>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       
                                        <tr>
                                            <th>
                                            Preferensi Mata Pelajaran
                                          <br>
                                            <?php $__currentLoopData = $matpel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                                            <input type="text" class="form-control"
                                                    value="<?php echo e($d->mapel); ?>"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Preferensi Program
                                                <br>
                                                <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                &nbsp;&nbsp;
                                                <input type="text" 
                                                    value="<?php echo e($d->program); ?>"
                                                    style="width:7%;background:white;border:none" disabled>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </th>
                                        </tr>

                                        <tr>
                                            <th>
                                                Preferensi Kelas
                                                <br>
                                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                &nbsp;&nbsp;
                                                <input type="text" 
                                                    value="<?php echo e($d->kelas); ?>"
                                                    style="width:7%;background:white;border:none" disabled>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="form-group">
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4>Jadwal Tutor</h4>
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
                                        <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td><?php echo e($d->jadwal->name); ?></td>
                                            <td><?php echo e($d->invoice->kelas->kelas); ?></td>
                                            <td><?php echo e($d->mapel->mapel); ?></td>
                                            <td><?php echo e($d->hari1); ?> <?php echo e($d->waktu_hari1); ?></td>
                                            <td id="hari2td"><?php echo e($d->hari2); ?> <?php echo e($d->waktu_hari2); ?></td>
                                            <td>
                                                <?php if($d->status== 'MENUNGGU'): ?>
                                                <a class=" btn btn-sm btn-primary" style="color:white;">
                                                    <span><?php echo e($d->status); ?></span>
                                                </a>
                                                <?php elseif($d->status== 'DIPILIH TUTOR'): ?>
                                                <a class=" btn btn-sm btn-warning" style="color:white;">
                                                    <span><?php echo e($d->status); ?></span>
                                                </a>
                                                <?php elseif($d->status== 'AKTIF'): ?>
                                                <a class=" btn btn-sm btn-success" style="color:white;">
                                                    <span><?php echo e($d->status); ?></span>
                                                    <?php else: ?>
                                                    <a class=" btn btn-sm btn-secondary" style="color:white;">
                                                        <span><?php echo e($d->status); ?></span>
                                                    </a>
                                                    <?php endif; ?>
                                            </td>
                                            <td>
                                                <a type="button" style="color:white" class="btn btn-sm btn-warning"
                                                    data-toggle="tooltip" data-placement="top" title="Lihat Kehadiran"
                                                    href="<?php echo e(route('kehadiranTutor', $d->id)); ?>">
                                                    <i class="fas fa-chart-bar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>

<!-- /.content-header -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sweet'); ?>
<script>
    $(document).ready(function () {
        $('#jadwal').DataTable({
            "autoWidth": false
           });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/dashboard_admin/profileTutor.blade.php ENDPATH**/ ?>