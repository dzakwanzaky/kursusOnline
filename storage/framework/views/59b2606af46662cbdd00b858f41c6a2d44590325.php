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

  <title>Dashboard | Murid</title>
  <link rel="shortcut icon" href="/tema/images/inofaLogo.png" type="image/x-icon"/>
  <!-- DataTable -->  
  <link rel="stylesheet" href="<?php echo e(asset('/lte/plugins/datatables/dataTables.bootstrap4.css')); ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('/lte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/lte/plugins/fontawesome-free/css/all.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('/lte/dist/css/adminlte.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/lte/dist/css/adminlte.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Clockpicker and minified CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/lte/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.css')); ?>">
    

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- HEADER -->
<?php echo $__env->make('murid/header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Main Sidebar Container -->
<?php echo $__env->make('murid/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <?php echo $__env->yieldContent('content'); ?>        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
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
<?php echo $__env->make('murid/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo e(asset('/lte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('/lte/dist/js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(asset('/lte/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('/lte/plugins/datatables/dataTables.bootstrap4.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('/lte/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('/lte/plugins/datatables/dataTables.bootstrap4.js')); ?>"></script>
<!--- Time Picker -->
<script src="<?php echo e(asset('/lte/plugins/clockpicker-gh-pages/assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('/lte/plugins/clockpicker-gh-pages/assets/js/highlight.min.js')); ?>"></script>
<script src="<?php echo e(asset('/lte/plugins/clockpicker-gh-pages/dist/jquery-clockpicker.min.js')); ?>"></script>

<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>
<link href="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet"/>


<?php echo $__env->yieldContent('sweet'); ?>
</body>
</html>
<?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/murid/basee.blade.php ENDPATH**/ ?>