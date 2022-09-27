<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jom On Board(J.O.B)</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- All Plugin Css --> 
		<link rel="stylesheet" href="css/plugins.css">
		
		<!-- Style & Common Css --> 
		<link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/search.css">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    </head>
	
    <body>
	
		<!-- Navigation Start  -->
		<nav class="navbar navbar-default navbar-sticky bootsnav" style="background-color: black ">

			<div class="container">      
				<!-- Start Header Navigation -->
				<div class="navbar-header" >
					{{--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button> <a class="navbar-brand" href="index.html"><img src="img/logo.png" width="55" height="50" class="logo" alt=""></a>--}}
					<a class="navbar-brand" href="#"><h5><b>JomOnBoard</b></h5></a>
					
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ route('login') }}">Login</a></li>
							<li><a href="{{ route('register') }}">Register</a></li>
							<li><a href="{{ url('/company') }}">Company</a></li> 
						
						</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
			</div>
		</nav>
		<!-- Navigation End url(img/slider-01.jpg)no-repeat -->
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<section class="main-banner" style="background-color: blueviolet ">
			<div class="container">
				<div class="caption">
					<h2>Welcome To </h2>
					<br>
					<h2> Job On Board (J.O.B)</h2>
					<br>
					<h4 style="color:white">Start to build your career from here</h4>
				  	 <fieldset>
						<form action="{{ route('searchjob')}}" method="GET">
				
						  
						   <div class="col-md-3 col-sm-3 no-pad">
							<label for="salary">Monthly Salary</label>
								<select class="selectpicker border-right" name= "salary">
									<option selected disabled value="0">...Select Monthly Salary...</option>
			                        <option value="< RM1000"> < RM 1000 </option>
                                    <option value="RM1000 to RM2000">RM 1000 to RM 2000</option>
                                    <option value="RM2000 to RM3000">RM 2000 to RM 3000</option>
                                    <option value="RM3000 to RM4000">RM 3000 to RM 4000</option>
								    <option value="RM4000 to RM5000">RM4000 to RM5000</option>
								    <option value="> RM5000">> RM 5000</option>
								</select>
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<label for="tags">Job Keyword</label>
								<select class="selectpicker border-right" id="tags"name="tags">
									<label for="tags">Job Keyword</label>
										
											<option value="">...Select Key Skill...</option>
											<option value="ComputerScience">ComputerScience</option>
											<option value="Information Technology">Information Technology</option>
											<option value="Electronic">Electronic</option>
											<option value="Mechanical">Mechanical</option>
											<option value="Civil ">Civil</option>
											<option value="Administration">Administration</option>
											<option value="Accountancy">Accountancy</option>
											<option value="Marketing">Marketing</option>
											<option value="Art">Art</option>
											<option value="Designing">Designing</option>
											<option value="Photography">Photography</option>
											<option value="Hotel/Restaurant">Hotel/Restaurant</option>
										    <option value="Journalist">Journalist</option>
										
								</select>
							
							</div>
							<div class="col-md-3 col-sm-3 no-pad">
								<label for="location">Location</label>
								<select class="selectpicker border-right" id="location"name="location">
									  <option value="">...Select...</option>
									  <option value="Kuala Lumpur">Kuala Lumpur</option>
									  <option value="Selangor">Selangor</option>
									  <option value="Putrajaya">Putrajaya</option>
									  <option value="Penang">Penang</option>
									  <option value="Johor">Johor</option>
									  <option value="Perlis">Perlis</option>
									  <option value="Kedah">Kedah</option>
									  <option value="Kelantan">Kelantan</option>
									  <option value="Terengganu">Terengganu</option>
									  <option value="Malacca">Malacca</option>
									  <option value="Negeri Sembilan">Negeri Sembilan</option>
									  <option value="Pahang">Pahang</option>
									  <option value="Sabah">Sabah</option>
									  <option value="Sarawak">Sarawak</option>
									  <option value="Labuan">Labuan</option>
							   </select>
							</div>
							<br>
							<div class="col-md-2 col-sm-2 no-pad">
								<input type="submit" class="btn seub-btn" value="submit" />
							</div>
						
					</form>
				
				</div>
			</div>
		</fieldset>
			<br><br><br><br><br><br><br><br>
			{{--  <section class="search-sec">
			
			     <div class="container">
					<form action="{{ route('searchjob')}}" method="GET" novalidate="novalidate">
						<div class="row">
							<div class="col-lg-12">
								
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-12 p-0">
										<label for="salary">Monthly Salary</label>
										<select class="form-control " id="salary"name="salary">
											<option value="">...Select Monthly Salary...</option>
											<option value="< 1000"> < 1000 </option>
											<option value="1000-2000">1000-2000</option>
											<option value="2000-3000">2000-3000</option>
											<option value="> 3000"> > 3000</option>
										</select>
									</div>
								
									<div class=" col-md-3 ">
										<label for="tags">Job Keyword</label>
										<select class="form-control " id="tags"name="tags">
											<option value="">...Select Key Skill...</option>
											<option value="ComputerScience">ComputerScience</option>
											<option value="Information Technology">Information Technology</option>
											<option value="Electronic">Electronic</option>
											<option value="Mechanical">Mechanical</option>
											<option value="Civil ">Civil</option>
											<option value="Administration">Administration</option>
											<option value="Accountancy">Accountancy</option>
											<option value="Marketing">Marketing</option>
											<option value="Art">Art</option>
											<option value="Designing">Designing</option>
											<option value="Photography">Photography</option>
											<option value="Hotel/Restaurant">Hotel/Restaurant</option>
										<option value="Journalist">Journalist</option>
										</select>
									</div>
									<br>
									<div class="col-lg-3 col-md-3 col-sm-12 p-0">
										<button type="submit" class="btn btn-danger wrn-btn">Search</button>
									</div>
								</div>
							
							</div>
						</div>
						
						{{--  <div class="col-md-6 col-sm-6 no-pad">
							<input type="submit" class="btn seub-btn" value="submit" />
						</div>
					</form>
				</div>
			
			</section> --}}
			
			
			@section('jsplugins') 
                  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                  <script>
                  CKEDITOR.replace( 'article-ckeditor' );
                   </script>
           @endsection
		</section>
		
	       {{--  }<section class="features">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
						<h3>Create An Account</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
						<h3>Search Desired Job</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
						<h3>Send Your Resume</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-dial"></span></span>
						<h3>Create An Account</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-search"></span></span>
						<h3>Search Desired Job</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true" class="icon-printer"></span></span>
						<h3>Send Your Resume</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			
			</div>
		</section>--}}
		
		<section class="counter" style="background-color: black">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="counter-text">
						<span aria-hidden="true" class="icon-briefcase"></span>
						<h3>{{ $allPosts }}</h3>
						<p>Jobs Posted</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="counter-text">
						<span class="box1"><span aria-hidden="true" class="icon-expand"></span></span>
						<h3>{{ $allCompanies }}</h3>
						<p>All Companies</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="counter-text">
						<span class="box1"><span aria-hidden="true" class="icon-profile-male"></span></span>
						<h3>{{ $allUsers}}</h3>
						<p>Total Members</p>
					</div>
				</div>
				
			
			</div>
		</section>
		
		<section class="jobs" style="background-color: blueviolet" >
			<div class="container" style="background-color:white">
				<div class="row heading">
					<h3>Find Popular Jobs</h3>
					<p>Below is the recently added jobs</p>
				</div>
				<div class="companies">
					<div class="row">
						<h3>Recent Jobs</h3>
						
						<table class="table">
							<thead>
								
							</thead>
							<tbody>
							  
								@foreach($jobs as $job)
								<tr>
									<div class="row">
                                    <div class="col-md-2 col-sm-2">
										<div class="company-logo">
											<img src="img/apple.png" class="img-responsive" alt="" />
										</div>
									</div>
									<div class="col-md-10 col-sm-10">
										<div class="company-content">
											<h3>{{$job->company->comName}}<span class="part-time"><a href="{{ route('nonregjob',$job->id)}}" class="btn btn-danger" ><b>View Job</b></a></span></h3>
											<p><span class="company-name"> {{$job->jobName}}<i class="fa fa-briefcase"></i>{{$job->skillLevel}}</span><span class="company-location"><i class="fa fa-map-marker"></i>  {{$job->location}}</span><span class="package"><i class="fa fa-clock"></i>{{$job->created_at}}</span></p>
										</div>
									</div>
								</div>
							    </tr>
								@endforeach
							</tbody>
						
					</div>
					{{-- <div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/google.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>IOS Developer<span class="full-time">Full Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Google</span><span class="company-location"><i class="fa fa-map-marker"></i> 07th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/microsoft.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3><span class="part-time">Part Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Microsoft</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$20,000-$52,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/apple.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>UI/UX Designer<span class="freelance">Freelance</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Apple</span><span class="company-location"><i class="fa fa-map-marker"></i> 7th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$22,000-$50,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/wipro.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>IOS developer<span class="internship">Intership</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Wipro</span><span class="company-location"><i class="fa fa-map-marker"></i> 8th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$52,000</span></p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="company-list">
						<div class="row">
							<div class="col-md-2 col-sm-2">
								<div class="company-logo">
									<img src="img/twitter.png" class="img-responsive" alt="" />
								</div>
							</div>
							<div class="col-md-10 col-sm-10">
								<div class="company-content">
									<h3>Marketing Holder<span class="full-time">Full Time</span></h3>
									<p><span class="company-name"><i class="fa fa-briefcase"></i>Twitter</span><span class="company-location"><i class="fa fa-map-marker"></i> 4th Avenue, New York, NY, United States</span><span class="package"><i class="fa fa-money"></i>$24,000-$48,000</span></p>
								</div>
							</div>
						</div>
					</div>--}}
				</div> 
				{{--<input type="button" class="btn brows-btn" value="Brows All Jobs" />--}}
				
			</div>
			<br><br><br><br>
		</section>
		<h3>Feature Company</h3><br>
		<div class="container">
			<div class="row">
				@foreach($companies as $company)
                <div class="col-md-3">
					<div class ="card" style="width: 1%rem;">
						<br>
						<div class="card-body">
							<h5 class="card-title">{{ $company->comName }}</h5>
							<p class="card-text">{{ $company->comAddress}}</p>
							<a href="{{ route('noreg.pro',$company->id) }}" class="btn btn-primary">Visit Company</a>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		{{-- <section class="testimonials dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<div class="pic">
									<img src="img/client-1.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">williamson</h3>
								<span class="post">Web Developer</span>
							</div>

							<div class="testimonial">
								<div class="pic">
									<img src="img/client-2.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>
							
							<div class="testimonial">
								<div class="pic">
									<img src="img/client-3.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>
							
							<div class="testimonial">
								<div class="pic">
									<img src="img/client-4.jpg" alt="">
								</div>
								<p class="description">
									" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam unde voluptatum? "
								</p>
								<h3 class="testimonial-title">kristiana</h3>
								<span class="post">Web Designer</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		
		{{--  <section class="pricind">
			<div class="container">
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cog" aria-hidden="true"></i>
							<h3>Professional</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>3 Designs</li>
							<li>3 PSD Designs</li>
							<li>4 color Option</li>
							<li>10GB Disk Space</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>10<sub>/Month</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Sign Up</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
							<h3>Standard</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>3 Designs</li>
							<li>3 PSD Designs</li>
							<li>4 color Option</li>
							<li>10GB Disk Space</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>110<sub>/Month</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Sign Up</button>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="package-box">
						<div class="package-header">
							<i class="fa fa-cube" aria-hidden="true"></i>
							<h3>Premium</h3>
						</div>
						<div class="package-info">
							<ul>
							<li>3 Designs</li>
							<li>3 PSD Designs</li>
							<li>4 color Option</li>
							<li>10GB Disk Space</li>
							<li>Full Support</li>
							</ul>
						</div>
						<div class="package-price">
							<h2><sup>$ </sup>170<sub>/Month</sub></h2>
						</div>
						<button type="submit" class="btn btn-package">Sign Up</button>
					</div>
				</div>
			</div>
		</section>--}}
		
		{{--  <section class="membercard dark">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-1.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar3.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Sazzel Shi</h5>
									<p class="text-muted">UX/ Designer</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-2.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar2.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Daniel Dezox</h5>
									<p class="text-muted">CEO Founder</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="left-widget-sidebar">
							<div class="card-widget bg-white user-card">
								<div class="u-img img-cover" style="background-image: url(img/bg-3.jpg);background-size:cover;"></div>
								<div class="u-content">
									<div class="avatar box-80">
										<img class="img-responsive img-circle img-70 shadow-white" src="img/avatar1.jpg" alt="">
										<i class="fa fa-circle-o fa-green"></i>
									</div>
									<h5>Silp Sizzer</h5>
									<p class="text-muted">Human Resource</p>
								</div>
								<div class="user-social-profile">
									<ul>
										<li><a href=""><i class="fa fa-facebook"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href=""><i class="fa fa-twitter"></i></a></li>
										<li><a href=""><i class="fa fa-instagram"></i></a></li>
										<li><a href=""><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>--}}


	{{-- <section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
					<h2>Want More Job & Latest Job? </h2>
					<p>Subscribe to our mailing list to receive an update when new Job arrive!</p>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Type Your Email Address...">
						<span class="input-group-btn">
							<button type="button" class="btn btn-default">subscribe!</button>
						</span>
					</div>
					</div>
				</div>
			</div>
		</section> --}}
			
		<!-- footer start -->
		<br><br>
		<footer>
			{{--  }<div class="container">
				<div class="col-md-3 col-sm-6">
					<h4>Featured Job</h4>
					<ul>
						<li><a href="#">Browse Jobs</a></li>
						<li><a href="#">Premium MBA Jobs</a></li>
						<li><a href="#">Access Database</a></li>
						<li><a href="#">Manage Responses</a></li>
						<li><a href="#">Report a Problem</a></li>
						<li><a href="#">Mobile Site</a></li>
						<li><a href="#">Jobs by Skill</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Latest Job</h4>
					<ul>
						<li><a href="#">Browse Jobs</a></li>
						<li><a href="#">Premium MBA Jobs</a></li>
						<li><a href="#">Access Database</a></li>
						<li><a href="#">Manage Responses</a></li>
						<li><a href="#">Report a Problem</a></li>
						<li><a href="#">Mobile Site</a></li>
						<li><a href="#">Jobs by Skill</a></li>
					</ul>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Reach Us</h4>
					<address>
					<ul>
					<li>1201, Murakeu Market, QUCH07<br>
					United Kingdon</li>
					<li>Email: Support@job.com</li>
					<li>Call: 044 123 458 65879</li>
					<li>Skype: job@skype</li>
					<li>FAX: 123 456 85</li>
					</ul>
					</address>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<h4>Drop A Mail</h4>
					<form>
						<input type="text" class="form-control input-lg" placeholder="Your Name">
						<input type="text" class="form-control input-lg" placeholder="Email...">
						<textarea class="form-control" placeholder="Message"></textarea>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				
				
			</div>
			<div class="copy-right">
			 <p>&copy;Copyright 2018 Jober Desk | Design By <a href="https://themezhub.com/">ThemezHub</a></p>
			</div>--}}
		</footer>
		 
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
	
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
   $(".multiple-select").select2({
     //maximumSelectionLength: 2
   });
</script>

</html>
