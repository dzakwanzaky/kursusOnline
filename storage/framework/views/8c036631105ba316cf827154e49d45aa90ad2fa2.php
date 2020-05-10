<?php $__env->startSection('content'); ?>
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
                          <p style="font-size:24px">Ubah Kata Sandi</p>
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
   
                         <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-danger"><?php echo e($error); ?></p>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
  <br>
  <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Masukan Kata Sandi Lama</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Masukan Kata Sandi Baru</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Konfirmasi Kata Sandi Baru</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                               <button type="submit" class="btn btn-primary" style="margin-left: 12em;" onclick="return confirm('Anda yakin ingin merubah kata sandi Anda?')">
                                    Ubah Kata Sandi
                                </button>
                              
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
 
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/changePassword.blade.php ENDPATH**/ ?>