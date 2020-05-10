<?php echo $__env->make('base/header_pageo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
  <style type="text/css">
    h2 {
        margin-left: 3em;

    }
    labell {
        font-size: 17px;

    }
    .help-block {
    color: red;
}
.has-error {
     color: red;
}
  
</style>
    <div class="main">
            <div class="card">
              <div class="card-body">
                <form class="signup-form" role="form" method="POST" action="<?php echo e(route('register.store')); ?>">
                    <?php echo e(csrf_field()); ?>


                    <h2 class="form-title">Daftar Akun Murid</h2>
                    
                    
                        <labell for="name">Nama Lengkap</labell>
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <div class="form-title">
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Masukan nama Anda" autofocus>

                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                               <?php echo e($errors->first('name')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>



                    
                        <labell for="phone">No Telepon</labell>
                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                        <div class="form-title">
                            <input id="phone" type="phone" class="form-control" name="phone"  placeholder="Masukan no telp Anda" value="<?php echo e(old('phone')); ?>">

                            <?php if($errors->has('phone')): ?>
                                <span class="help-block">
                               <?php echo e($errors->first('phone')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    
                        <labell for="email">Email</labell>
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <div class="form-title">
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"  placeholder="Masukan email Anda" value="<?php echo e(old('email')); ?>">

                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                               <?php echo e($errors->first('email')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                   
                      <labell for="password">Kata Sandi</labell>
                       <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                      <div class="input-group">
                      <input id="password" type="password" name="password" class="form-control" data-toggle="password" placeholder="Masukan kata sandi Anda" value="<?php echo e(old('password')); ?>">

                            
                      <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </div>



                        </div>
                        <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                <?php echo e($errors->first('password')); ?>

                                </span>
                            <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <labell for="password-confirm">Konfirmasi Kata Sandi</labell>
                         <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                      <div class="input-group">
                      <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" data-toggle="password" placeholder="Masukan ulang kata sandi Anda">
                      
                      <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </div>
                  </div>
                      <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                <?php echo e($errors->first('password_confirmation')); ?>

                                </span>
                            <?php endif; ?>
                  </div>

                    <div class="col-md-6">
                        <input id="role" type="text" class="form-control" name="role" required style="display:none" value="siswa">

                        <?php if($errors->has('role')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('role')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>
                    <br>
                                
                    <div class="form-group">
                        <button  type="submit" class="btn btn-masuk" style="border-radius:50px; margin-left:auto; margin-right:auto;">
                            Daftar
                        </button>
                    </div>
                </form>
                <p class="loginhere">
                Sudah punya akun ?<a href="/login" class="loginhere-link"> Masuk Sekarang</a>
                </p>
            </div>
        </div>
    </div>

<script type="text/javascript">

    window.onload=function(){
      

!function(a){a(function(){a('[data-toggle="password"]').each(function(){var b = a(this); var c = a(this).parent().find(".input-group-text"); c.css("cursor", "pointer").addClass("input-password-hide"); c.on("click", function(){if (c.hasClass("input-password-hide")){c.removeClass("input-password-hide").addClass("input-password-show"); c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash"); b.attr("type", "text")} else{c.removeClass("input-password-show").addClass("input-password-hide"); c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye"); b.attr("type", "password")}})})})}(window.jQuery);


    }

</script>


  
  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "zkou4dej"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>
</form>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/registerSiswa_page.blade.php ENDPATH**/ ?>