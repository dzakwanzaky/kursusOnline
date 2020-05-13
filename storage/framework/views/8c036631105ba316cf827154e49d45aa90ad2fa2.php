<?php $__env->startSection('content'); ?>
<style>
  .card {
    width: 69%;
    margin-left: 210px;

}
  .help-block {
    color: red;
    font-size: 15px;
    margin-left: 17em;
}
.has-error {
     color: red;
}
</style>
<link rel="stylesheet" href="<?php echo e(asset('/assets')); ?>/bootstrap/css/bootstrap.min.css">

<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
                      <div class="col-sm-6">
                         
                      </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/murid">Murid</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Ubah Kata Sandi
                                </li>
                            </ol>
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
              <form method="POST" action="<?php echo e(route('change.password')); ?>">
                        <?php echo csrf_field(); ?> 
   
                        
                          <p><center style="font-size:24px">Ubah Kata Sandi</center></p>
  <br>
  <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi Lama</label>
  
                            <div class="col-md-6<?php echo e($errors->has('current_password') ? ' has-error' : ''); ?>">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                            <?php if($errors->has('current_password')): ?>
                                            <span class="help-block"><?php echo e($errors->first('current_password')); ?></span>
                                        <?php endif; ?>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Kata Sandi Baru</label>
  
                            <div class="col-md-6<?php echo e($errors->has('new_password') ? ' has-error' : ''); ?>">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                            <?php if($errors->has('new_password')): ?>
                                            <span class="help-block"><?php echo e($errors->first('new_password')); ?></span>
                                        <?php endif; ?>
                        </div>
  
                       

                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Konfirmasi Kata Sandi Baru</label>
  
                            <div class="col-md-6<?php echo e($errors->has('new_confirm_password') ? ' has-error' : ''); ?>">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                            <?php if($errors->has('new_confirm_password')): ?>
                                            <span class="help-block"><?php echo e($errors->first('new_confirm_password')); ?></span>
                                        <?php endif; ?>
                        </div>
  

   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                               <center></center><button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin ingin merubah kata sandi Anda?')">
                                    Ubah Kata Sandi
                                </button></center>
                              
                            </div>
                        </div>
                    </form>
              <br>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content -->
    <script>
        //buat profile
        $(function () {
            $("#file").change(function () {
                readURL(this);
            });
        });


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    //alert(e.target.result);
                    $('#profile-picture').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
   
<script src="<?php echo e(asset('/assets')); ?>/js/bootstrap.min.js"></script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/baseey', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/changePassword.blade.php ENDPATH**/ ?>