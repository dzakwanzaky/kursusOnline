<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Presensi Les</h1>
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
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('absen.update', $d->id)); ?>" method="post" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

			<?php echo e(method_field('PUT')); ?>

              <div class="form-group"> <!-- Date input -->
                <label  class="control-label" for="tanggal">Date</label>
                <input class="form-control" id="tanggal" name="tanggal" placeholder="MM/DD/YYY" type="text"/>
              </div>
              <div class="form-group">
              <label for="name" >Waktu Mulai</label>
              <input class="form-control" id="single-input" name="waktu_mulai" value="">
              </div>
              <div class="form-group">
						    <label for="name">Waktu Selesai :</label>
                <input class="form-control" id="single-input-2" name="waktu_selesai" value="">
					    </div>
              <div class="form-group">
						    <label for="">Saran, Kritikan dan Masukkan :</label>
						    <input type="text" class="form-control" id="report" name="report">
					    </div>

              <input type="text" class="form-control" id="kehadiran" name="kehadiran" value="HADIR" style="display:none"></input>
              <div class="form-group"> 
                        <a>
                            <button type="submit" style="float:right" class="btn btn-md btn-success" >Submit</button>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </form>
                </div>
              </div>
            </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('sweet'); ?>
  <script>
   $(document).ready(function(){
      var date_input=$('input[name="tanggal"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'dd MM yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
      
  
    })
  </script>
  <script>
var input = $('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});
var input = $('#single-input-2').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
});
  </script>

 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/presensi.blade.php ENDPATH**/ ?>