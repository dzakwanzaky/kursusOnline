<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard | Admin</title>
  <link rel="shortcut icon" href="/tema/images/inofaLogo.png" type="image/x-icon"/>

  <!-- DataTable -->  
  <link rel="stylesheet" href="<?php echo e(asset('/lte/plugins/datatables/dataTables.bootstrap4.css')); ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('/lte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/lte/plugins/fontawesome-free/css/all.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/lte/dist/css/adminlte.css')); ?>">
  <!-- Icons-->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- HEADER -->
<?php echo $__env->make('dashboard_admin/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main Sidebar Container -->
<?php echo $__env->make('dashboard_admin/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
  <!-- Content Wrapper. Contains page content -->
  <?php echo $__env->yieldContent('content'); ?> 
    <!-- /.content -->
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<!-- Main Footer -->
<?php echo $__env->make('dashboard_admin/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo e(asset('/lte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('/lte/dist/js/adminlte.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('/lte/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('/lte/plugins/datatables/dataTables.bootstrap4.js')); ?>"></script>

<?php echo $__env->yieldContent('sweet'); ?>
<?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH C:\Users\ASUS\Pictures\baru\baru\resources\views/dashboard_admin/base.blade.php ENDPATH**/ ?>