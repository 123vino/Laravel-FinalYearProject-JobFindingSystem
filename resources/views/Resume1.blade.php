<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Sample Resume</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
<link rel="stylesheet" type="text/css" href="css/resume.css" media="all" />
</head>
<body>
<div id="doc2" class="yui-t7">
  <a class="btn btn-sm btn-primary" href=" {{route('skill.index')}} " role="button">Back</a>
  <div id="inner">
    <div id="hd">
      <div class="yui-gc">
        <div class="yui-u first">
            <h2>{{ucfirst($user->firstName)}}&nbsp;{{ucfirst($user->lastName)}}</h2>
            <br><br>
          
       </div>
        <div class="yui-u">
          <div class="contact-info">
            <h3>{{$user->mobileNo}}</h3>
            <br>
            <h3>{{$user->email}}</h3>
            <br>
            <h3>{{$user->address}}</h3>
          </div>
          <!--// .contact-info -->
        </div>
      </div>
      <!--// .yui-gc -->
    </div>
    <!--// hd -->
    <div id="bd">
      <div id="yui-main">
        <div class="yui-b">
          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Profile</h2>
            </div>
            <div class="yui-u">
                {{$user->summary}}
            </div>
          </div>
          <!--// .yui-gf -->
          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Skills</h2>
            </div>
            <div class="yui-u">
              <h3><b>Hard Skills</b></h3>
            </div>
            <br>
            <div class="yui-u">
                @foreach($user->skills as $skill)
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
              @foreach($user->skills as $skill)
              <h4>{{ $skill->hardskills }}</h4>
              <h4>Level:{{ $skill->hardskillslevel}}</h4>
              <br>
              @endforeach
          </div>
          </div>
          <!--// .yui-gf -->
          
          <!--// .yui-gf-->
          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Experience</h2>
            </div>
            <!--// .yui-u -->
            <div class="yui-u">
                @foreach($user->experiences as $work)
                <h4>Job Title:{{ $work->job_title }}</h4>
                <h4>Work Place:{{ $work->employer }}</h4>
                <h4>Work Detail:{{ $work->job_detail }}</h4>
                <h4>Start Date:{{ $work->start_date }}</h4>
                <h4>End Date:{{ $work->end_date }}</h4>
                <br>
                @endforeach
                
            </div>
            <!--// .yui-u -->
          </div>
          <!--// .yui-gf -->
          <div class="yui-gf last">
            <div class="yui-u first">
              <h2>Education</h2>
            </div>
            <div class="yui-u">
                @foreach($user->education as $e)
                <h4>Level Of Education:{{ $e->higher_education }}</h4>
                <h4>School Name:{{ $e->school_name }}</h4>
                <h4>Field of study:{{ $e->field_of_study }}</h4>
                <h4>Start Date:{{ $e->graduation_start_date }}</h4>
                <h4>Date End:{{ $e->graduation_end_date }}</h4>
                <br>
                @endforeach
                
            </div>
          </div>
          <!--// .yui-gf -->
        </div>
        <!--// .yui-b -->
      </div>
      <!--// yui-main -->
    </div>
    <!--// bd -->
    <div id="ft">
     
    </div>
    <!--// footer -->
  </div>
  <!-- // inner -->
</div>
<!--// doc -->

</html>
