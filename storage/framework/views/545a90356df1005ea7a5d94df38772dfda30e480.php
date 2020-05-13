<?php echo $__env->make('base/header_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
    h2 {
        margin-left: 2em;

    }
</style>
    <div class="main">
            <div class="card">
              <div class="card-body">
              <h2 class="form-title">Pilih Metode Bimbingan</h2><br>
              <p class="loginhere" style="color: #4a4a4a; font-size: 16px">
                Pilih metode
              </p>
              <div class="form-group row"  style="display:block; margin-left:auto; margin-right:auto; text-align:center;">
                <div>
                  <a href="/paketProgramOffline" class="link link--btn register-page__btn">
                    <button type="submit" class="button">Offline</button>
                  </a>
                  <div>
                  <span style="text-align:center;color: #4a4a4a; font-size: 16px">Atau</span></div>
                  <a href="/paketProgramOnline" class="link link--btn register-page__btn">
                    <button type="submit" class="button2">Online</button>
                  </a>
                </div>
              </div>
              
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/metode.blade.php ENDPATH**/ ?>