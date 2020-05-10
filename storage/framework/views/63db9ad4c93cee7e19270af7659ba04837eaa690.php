<?php echo $__env->make('base/header_pageo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
        <br>
        <br>
        <br>
        <br>
            <div class="card">
                <div class="card-header"><?php echo e(__('Verifikasi Email Anda')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Sebelum melanjutkan, silakan periksa email Anda untuk melakukan verifikasi. ')); ?>

                    <?php echo e(__('Jika Anda tidak menerima email')); ?>,
                    <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('klik disini untuk mengirim ulang')); ?></button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base/script_pageiniy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/auth/verify.blade.php ENDPATH**/ ?>