<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Appfast - Responsive OnePage HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/tema/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/tema/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/tema/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/tema/style.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="/tema/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/tema/css/responsive.css">
    <!-- Custom CSS -->
     <link rel="stylesheet" href="/tema/css/custom.css">

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <div id="preloader">
        <img class="preloader" src="tema/images/ajax-loader.gif" alt="">
    </div>
    <!-- END LOADER -->
    @include('base/header_page') 

    <div id="home" class="parallax first-section" style="background-image:url('tema/uploads/bimbel.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                </div>
                <div class="big-tagline">
                        <h2>Gabung bersama kami dan</h2>
                        <h2>menjadi juara!</h2>
                        <p class="lead"></p>
                        <a data-scroll href="#order" class="btn btn-light btn-radius btn-brd" style="font-weight:bold"> GABUNG SEKARANG </a>
                    </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    @include('base/features_page')    

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="/tema/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/tema/js/custom.js"></script>
	<script src="/tema/js/zenith.js"></script>
	<script>
		$('#default').zenith({
			layout: 'default' , 
			slideSpeed: 450, 
			autoplaySpeed: 2000
		});
	</script>

</body>
</html>