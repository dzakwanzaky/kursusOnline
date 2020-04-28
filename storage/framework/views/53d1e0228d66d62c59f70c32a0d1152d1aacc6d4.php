<?php echo $__env->make('base/header_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
 <style type="text/css">
    h2 {
        margin-left: 5em;

    }
    labell {
        font-size: 17px;

    }
    .daftar {
        font-weight: bolder;
    }
</style>
    <div class="main">
    <div class="card">
              <div class="card-body">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <h2 class="form-title">Masuk Akun</h2>
                <br>

                <labell for="email">Email</labell>
                <div class="form-textbox">
                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Masukan email Anda">

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div><br>

                <labell for="pass">Kata Sandi</labell>
                <div class="input-group">
                      <input id="password" type="password" name="password" class="form-control" data-toggle="password" placeholder="Masukan kata sandi Anda">
                      <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </div>

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div><br>

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
  
                <div class="form-textbox">
                    <button type="submit" class="btn-masuk">
                        <?php echo e(__('Masuk')); ?>

                    </button>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>></input>
                        <label class="form-check-label" for="remember">Ingat saya ?</label>
                        <a href="<?php echo e(url('/password/reset')); ?>" style="font-weight: inherit;color: #408ABD;;"> | Lupa Kata Sandi</a>
                </div>
            </form>

            <p class="loginhere">
                Belum punya akun ?<a href="/registerPilih" class="signuphere-link"> Daftar Sekarang</p></a>
            </p>
        </div>
    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\baru\baru\resources\views/auth/login.blade.php ENDPATH**/ ?>