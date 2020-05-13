<?php $__env->startSection('content'); ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 id="div1" name="div1" class="m-0 text-dark">Manajemen Tryout</h1>
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
              <div class="card-body table-responsive-m"  style="overflow-x:auto;" >
             <form action="<?php echo e(route('tambahTryout')); ?>"> <button class=" btn btn-md btn-success" style="float:right">Tambah Tryout</button></form>
              <br>
              <br>
              <table class="table table-bordered table-striped table-responsive-md" id="siswa" style="overflow-x:auto;"> 
              <thead class="thead-dark">
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                        <th>No.</th>
                        <th>Nama Tryout</th>
                        <th>Jumlah Soal</th>
                        <th>Program</th>
                        <th>Mata Pelajaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                      
                    <?php $no = 1; ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>   
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($d->nama); ?></td>
                        <td><?php echo e($d->jumlah_soal); ?></td>
                        <td><?php echo e($d->program->program); ?></td>
                        <td><?php echo e($d->mapel->mapel); ?></td>
                        <td class="text-center">
                            <form action="<?php echo e(route('tryout.destroy', $d->id)); ?>" method="post" class="destroy">
                            <a type="button" class="btn-sm btn-info mr-2"  data-toggle="tooltip" data-placement="top" title="Lihat Soal" href="<?php echo e(route('daftarSoal', $d->id)); ?>"><i class="far fa-eye"></i></a>
                            <a type="button" class="btn-sm btn-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit Tryout" href="<?php echo e(route('tryout.edit',$d->id)); ?>"><i class="far fa-edit"></i></a>
                              <?php echo e(csrf_field()); ?>

                              <?php echo e(method_field('DELETE')); ?>       
                            <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Tryout" style="color:white" onclick="return confirm('Anda yakin akan menghapus tryout?')"><i class="far fa-trash-alt"></i></button>
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
  <?php $__env->startSection('sweet'); ?>
  <script>
         $(document).ready( function () {
           $('#siswa').DataTable({
            "autoWidth": false
          });
        });

        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
      </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard_admin/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/dashboard_admin/daftarTryout.blade.php ENDPATH**/ ?>