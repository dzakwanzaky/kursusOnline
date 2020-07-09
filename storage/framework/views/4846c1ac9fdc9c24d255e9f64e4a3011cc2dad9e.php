<?php $__env->startSection('content'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('/assets/css/toastr.min.css')); ?>">
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kehadiran Les</h1>
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
              <div class="card-body">
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
              
                <?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $no = 1; ?>
                <form action="<?php echo e(route('absen.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

              <button class="btn btn-sm btn-success" style="color:white;float:right" href="<?php echo e(url('presensi')); ?>">+ Presensi</button>
              <input type="text" value="<?php echo e($d->id); ?>" name="id_jadwal" style="display:none">    
              </form>          
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <br>
              <br>
                <thead class="thead-dark">
                    <tr>
                        <th>Pertemuan Ke</th>
                        <th>Tanggal</th>
                        <th>Materi</th> 
                        <th>Kehadiran</th>  
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                        <tr>
                           <td><?php echo e($no++); ?></td>
                           <td><?php echo e($d->tanggal); ?></td>
                           <td><?php echo e($d->materi); ?></td>
                          <td><?php echo e($d->kehadiran); ?> </td>       
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
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
<script src="<?php echo e(asset('/assets/js/toastr.min.js')); ?>"></script>
<script>
    <?php if(Session::has('success')): ?>
    toastr.success("<?php echo e(Session::get('success')); ?>")
    <?php endif; ?>
</script>
  <?php $__env->stopSection(); ?>
  
<?php echo $__env->make('murid/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/murid/kehadiranLes.blade.php ENDPATH**/ ?>