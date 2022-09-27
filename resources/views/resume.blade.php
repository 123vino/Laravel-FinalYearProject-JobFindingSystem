<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resume</title>
    
    <style>
      body {
          font-size: 17px;

      }

      h2 {
          font-weight: 100;
          padding: 20px 0;
          border-top: 1px solid black;
          border-bottom: 1px solid black;
      }

      .container {
          width: 70%;
          margin: 0 auto;
      }
  </style>
</head>
<body>
  <div class="container">
    <h2>Resume</h2>

    <section class="heading">
        
        <h2>{{ucfirst($user->details->fullname)}}</h2>

        <p>Email: {{$user->details->email}}</p>
        <p>Phone: {{$user->details->phone}}</p>
        <p>Address: {{$user->details->phone}}</p>
    </section>
    <section class="education">
      <h2>Education</h2>
      @foreach($user->education as $e)
      <h4>Level Of Education:{{ $e->higher_education }}</h4>
      <h4>School Name:{{ $e->school_name }}</h4>
      <h4>Field of study:{{ $e->field_of_study }}</h4>
      <h4>Start Date:{{ $e->graduation_start_date }}</h4>
      <h4>Date End:{{ $e->graduation_end_date }}</h4>
      @endforeach
    </section>
    <section class="work">
      <h2>Work History</h2>
      @foreach($user->experiences as $work)
      <h4>Job Title:{{ $work->job_title }}</h4>
      <h4>Work Place:{{ $work->employer }}</h4>
      <h4>Work Detail:{{ $work->job_detail }}</h4>
      <h4>Start Date:{{ $work->start_date }}</h4>
      <h4>End Date:{{ $work->end_date }}</h4>
      @endforeach
    </section>
    <section class="skills">
      <h2>My Skills</h2>
      @foreach($user->skills as $skill)
      <h4>Skill:{{ $skill->name }}</h4>
      <h4>Skill Level:{{ $skill->rating}}</h4>
      
      @endforeach
    </section>
  
  </div>
  
</body>
</html>