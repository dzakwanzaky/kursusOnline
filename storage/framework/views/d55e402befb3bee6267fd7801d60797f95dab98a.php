<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/assets')); ?>/bootstrap/css/bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoice</h1>
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
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>No. Invoice</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Program</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tagihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php $no = 1; ?>
                        <td><?php echo e($no++); ?>. </td>
                        <td># 
                        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($i->invoice); ?>

                  
                        </td>
                        <td><?php echo e(Auth::user()->name); ?></td>
                        <td><?php echo e($i->kelas->kelas); ?> <?php echo e($i->program->program); ?> </td>
                        <td><?php echo e($i->program->program); ?></td>
                        <td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($a->kecamatan); ?>, <?php echo e($a->kabupaten); ?>, <?php echo e($a->provinsi); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                        <?php $__currentLoopData = $alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <a class=" btn btn-sm btn-danger" style="color:white;">
                            <span> <?php echo e($a->status); ?></span>
                          </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                      <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($i->file==null): ?>
                        <a class="btn btn-sm btn-success" style="color:white;" target="_blank" data-toggle="modal" data-target="#importExcel">
                        <span class="fa fa-upload"></span>
                    </a>
                      <?php else: ?>
                      <p>Terupload</p>
                      <?php endif; ?>
                 
                        </td>
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="/unggah" enctype="multipart/form-data">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Bukti</h5>
                            </div>
                            <div class="modal-body">
                        
                              <?php echo e(csrf_field()); ?>

                        
                              <label>Pilih file</label>
                              <div class="form-group">
                                <input type="file" name="file" required="required">
                              </div>
                        
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Upload</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>


                        <td>
                          <a  href="<?php echo e(route('invoicePDF', $i->id_murid)); ?>" target="_blank" class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-download"></span>
                          </a>
                        </td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
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
      <script src="<?php echo e(asset('/assets')); ?>/js/bootstrap.min.js"></script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/invoice.blade.php ENDPATH**/ ?>