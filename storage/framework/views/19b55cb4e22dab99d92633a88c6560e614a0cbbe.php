<!DOCTYPE html>
<html lang="en">
<!-- SCRIPT PAGE BERISI LINK DAN SCRIPT -->
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Inofa Course</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/tema/images/inofaLogo.png" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/tema/css/bootstrapp.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/tema/style3.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="/tema/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/tema/css/responsive.css">
    <!-- Custom CSS -->
     <link rel="stylesheet" href="/tema/css/custom.css">         
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</head>
 <!-- ALL JS FILES -->
 <body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <div id="preloader">
        <img class="preloader" src="tema/images/ajax-loader.gif" alt="">
    </div>
    
    <?php echo $__env->yieldContent('content'); ?>    
    <script src="/tema/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/tema/js/custom.js"></script>
	<script src="/tema/js/zenith.js"></script>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="/lte/plugins/bootstrap/js/bootstrap.min.js">
    <script src="js/main.js"></script>
	<script>
		$('#default').zenith({
			layout: 'default' , 
			slideSpeed: 450, 
			autoplaySpeed: 2000
		});
	</script>
<?php echo $__env->yieldContent('day'); ?>
</body>
</html><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/script_pageiniy.blade.php ENDPATH**/ ?>