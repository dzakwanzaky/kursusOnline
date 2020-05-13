<?php if(session('success')): ?>
<div class="alert alert-success" role="alert">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<?php if(session('warning')): ?>
<div class="alert alert-warning" role="alert">
  <?php echo e(session('warning')); ?>

</div>
<?php endif; ?>
<?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/alert.blade.php ENDPATH**/ ?>