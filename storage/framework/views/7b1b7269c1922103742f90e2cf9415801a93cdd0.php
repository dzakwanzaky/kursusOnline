<?php $__env->startSection('content'); ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 id="div1" name="div1" class="m-0 text-dark">Daftar Mata Pelajaran</h1>
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
              <div class="card-body table-responsive-sm" style="overflow-x:auto;">
              <table class="table table-bordered table-striped table-responsive-md" id="siswa">
              <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('tambahMapel', $d->id)); ?>"
              class="btn btn-md btn-success" style="float:right">Tambah Mata Pelajaran</a> 
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <br>
              <br>
              <thead class="thead-dark">
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                      
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>   
                    <td><?php echo e($no++); ?></td>
                        <td><?php echo e($d->mapel); ?></td>
                        <td class="d-flex">
                        <a type="button" class="btn btn-sm btn-primary mr-2" href="<?php echo e(route('mapel.edit',$d->id)); ?>">Edit</a>

                          <form action="<?php echo e(route('mapel.destroy', $d->id)); ?>" method="post" class="destroy">
                          <?php echo e(csrf_field()); ?>

                          <?php echo e(method_field('DELETE')); ?>   
                          <button type="submit" class="btn btn-sm btn-danger mr-2" style="color:white" onclick="return confirm('Anda yakin akan menghapus soal?')">Hapus</button>
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

  
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  <?php $__env->stopSection(); ?>
  <?php $__env->startPush('script'); ?>
  <script>
         $(document).ready( function () {
           $('#siswa').DataTable({
            "autoWidth": false
           });
           });
      </script>
  <?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\baru\baru\resources\views/dashboard_admin/daftarMapel.blade.php ENDPATH**/ ?>