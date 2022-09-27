<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>{{ucfirst($users->details->fullname)}}</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href= "{{ asset('css/resume2.css')}} " media="all" />

</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1>{{ucfirst($users->details->fullname)}}</h1>
					<h2>{{ucfirst($users->details->coursename)}}</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3>{{$users->details->email}}</h3>
						<h3>{{$users->details->phone}}</h3>
                       <h3>{{$users->details->address}}</h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
                          {{$users->details->summary}}
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						
							<div class="yui-u first">
							  <h2>Skills</h2>
							</div>
							<div class="yui-u">
							  <h3><b>Hard Skills</b></h3>
							</div>
							<br>
							<div class="yui-u">
								@foreach($users->skills as $skill)
								<h4>{{ $skill->name }}</h4>
								<h4>Level:{{ $skill->rating}}</h4>
								<br>
								@endforeach
							</div>
							<div class="yui-u">
							  <h3><b>Soft Skills</b></h3>
							</div>
							<br>
							<div class="yui-u">
							  @foreach($users->skills as $skill)
							  <h4>{{ $skill->hardskills }}</h4>
							  <h4>Level:{{ $skill->hardskillslevel}}</h4>
							  <br>
							  @endforeach
						  </div>
					</div>
						  <!--// .yui-gf -->
						  
						  <!--// .yui-gf-->
						
                  {{--   <div class="yui-gf">
						<div class="yui-u first">
							<h2>Technical</h2>
						</div>
						<div class="yui-u">
							<ul class="talent">
								<li>XHTML</li>
								<li>CSS</li>
								<li class="last">Javascript</li>
							</ul>

							<ul class="talent">
								<li>Jquery</li>
								<li>PHP</li>
								<li class="last">CVS / Subversion</li>
							</ul>

							<ul class="talent">
								<li>OS X</li>
								<li>Windows XP/Vista</li>
								<li class="last">Linux</li>
							</ul>
						</div>
					</div><!--// .yui-gf-->--}}

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

					<div class="yui-u">
                        @foreach($users->experiences as $work)
                          <h4>Job Title:{{ $work->job_title }}</h4>
                          <h4>Work Place:{{ $work->employer }}</h4>
                          <h4>Work Detail:{{ $work->job_detail }}</h4>
                          <h4>Start Date:{{ $work->start_date }}</h4>
                           <h4>End Date:{{ $work->end_date }}</h4>
                        @endforeach
							
					</div>
                  </div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
                          @foreach($users->education as $e)
                          <h4>Level Of Education:{{ $e->higher_education }}</h4>
                          <h4>School Name:{{ $e->school_name }}</h4>
                          <h4>Field of study:{{ $e->field_of_study }}</h4>
                          <h4>Start Date:{{ $e->graduation_start_date }}</h4>
                          <h4>Date End:{{ $e->graduation_end_date }}</h4>
                          @endforeach
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p>Jonathan Doe &mdash; <a href="mailto:name@yourdomain.com">name@yourdomain.com</a> &mdash; (313) - 867-5309</p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>


