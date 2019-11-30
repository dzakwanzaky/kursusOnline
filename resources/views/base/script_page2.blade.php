<!DOCTYPE html>
<html lang="en">
<!-- SCRIPT PAGE BERISI LINK DAN SCRIPT -->
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Imam Courses</title>  
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
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>
 <!-- ALL JS FILES -->
 <body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <div id="preloader">
        <img class="preloader" src="tema/images/ajax-loader.gif" alt="">
    </div>
    <!-- NAVBAR -->
    <header class="top-bar">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="/landing">
                <img class="navbar-brand-full" src="{{('/tema/images/imam.png')}}" width="150" height="40" alt="imam Logo" href="/landing">
            </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a href="{{ url('/landing') }}" class="nav-link btn-login"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        LOGOUT
                        </a>
                    <form id="logout-form" action="{{ url('/landing') }}" method="GET" style="display: none;">
                      {{ csrf_field() }}
                </form>
              </li></ul>
                </div>
            </div>
        </nav>
    </header> 
 <script src="/tema/js/all.js"></script>
 
    <!-- ALL PLUGINS -->
    <script src="/tema/js/custom.js"></script>
	<script src="/tema/js/zenith.js"></script>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	<script>
		$('#default').zenith({
			layout: 'default' , 
			slideSpeed: 450, 
			autoplaySpeed: 2000
		});
	</script>
    @yield('content')
</body>
</html>