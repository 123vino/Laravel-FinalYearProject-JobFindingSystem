<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jom On Board(J.O.B)</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- All Plugin Css --> 
    <link rel="stylesheet" href="css/plugins.css">
    
    <!-- Style & Common Css --> 
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <!-- Navigation Start  -->
	    <nav class="navbar navbar-default navbar-sticky bootsnav">
	    
			<div class="container">      
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					{{--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>--}}
					<a class="navbar-brand" href="index.html"><img src="img/logo.png" width="55" height="50" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="index.html">Home</a></li> 
							<li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('register') }}">Register</a></li>
							<li><a href="{{ url('/company') }}">Companies</a></li> 
							<li><a href="{{ route('logout') }}">Logout</a></li> 
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse</a>
								<ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
									<li class="active"><a href="browse-job.html">Browse Jobs</a></li>
									<li><a href="company-detail.html">Job Detail</a></li>
									<li><a href="resume.html">Resume Detail</a></li>
								</ul>
							</li>
						</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- Navigation End  -->
        <main class="py-4">
            @yield('content')
        </main>

		
</body>
</html>
