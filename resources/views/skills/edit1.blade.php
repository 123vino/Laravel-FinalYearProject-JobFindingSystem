@extends('user.layout2Resume')
@section('content')
<div class="container">
    <form action="{{ route('skill.update', $skill)}}" method='POST'>
        @csrf
        @method('PUT')
        <label for="hardskills">Soft Skill:</label>
        <select name="hardskills" id="hardskills" value={{ $skill->hardskills }}>
           <option value="">---Select---</option>
           <option {{ $skill->hardskills == 'Teamwork & cooperation'?'selected':''}} value="Teamwork & cooperation">Teamwork & cooperation</option>
           <option {{ $skill->hardskills == 'Communication'?'selected':''}} value="Communication">Communication</option>
           <option {{ $skill->hardskills == 'Analysis'?'selected':''}} value="Analysis">Analysis</option>
           <option {{ $skill->hardskills == 'Creativity'?'selected':''}} value="Creativity">Creativity</option>
           <option {{ $skill->hardskills == 'Problem Solving'?'selected':''}} value="Problem Solving">Problem Solving</option>
           <option {{ $skill->hardskills == 'Adaptability'?'selected':''}} value="Adaptability">Adaptability</option>
           <option {{ $skill->hardskills == 'Multitasking'?'selected':''}} value="Multitasking">Multitasking</option>
           <option {{ $skill->hardskills == 'Leadership'?'selected':''}} value="Leadership">Leadership</option>
           <option {{ $skill->hardskills == 'Analytic Thinking'?'selected':''}} value="Analytic Thinking">Analytic Thinking</option>
         </select>
        
        <br><br>
        <label for="hardskillslevel">Soft Skill Level:</label>
        <select name="hardskillslevel" id="hardskillslevel" value={{ $skill->hardskillslevel}}>
            <option value="">---Select---</option>
            <option {{ $skill->hardskillslevel == 'Poor'?'selected':''}} value="Poor">Poor</option>
            <option {{ $skill->hardskillslevel == 'Fair'?'selected':''}} value="Fair">Fair</option>
            <option {{ $skill->hardskillslevel == 'Good'?'selected':''}} value="Good">Good</option>
            <option {{ $skill->hardskillslevel == 'Excellent'?'selected':''}} value="Excellent">Excellent</option>
          </select>
        <br><br>
        <label for="name">Hard Skill:</label>
        <select name="name" id="name" value={{ $skill->name }}>
            <option value="">---Select---</option>
            <option {{ $skill->name == 'Manufacturing Process'?'selected':''}}value="Manufacturing Process">Manufacturing Process</option>
            <option {{ $skill->name == 'Mathematics'?'selected':''}}value="Mathematics">Mathematics</option>
            <option {{ $skill->name == 'Construction'?'selected':''}}value="Construction">Construction</option>
            <option {{ $skill->name == 'Quality Control'?'selected':''}}value="Quality Control">Quality Control</option>
            <option {{ $skill->name == 'Robotics'?'selected':''}}value="Robotics">Robotics</option>
            <option {{ $skill->name == 'Programming'?'selected':''}}value="Programming">Programming</option>
            <option {{ $skill->name == 'Computer Science'?'selected':''}}value="Programming">Computer Science</option>
            <option {{ $skill->name == 'Structural Physics'?'selected':''}}value="Structural Physics">Structural Physics</option>
            <option {{ $skill->name == 'Nanotechnology'?'selected':''}}value="Nanotechnology">Nanotechnology</option>
            <option {{ $skill->name == 'Aeronautics'?'selected':''}}value="Aeronautics">Aeronautics</option>
            <option {{ $skill->name == 'Infrastructural Design'?'selected':''}}value="Infrastructural Design">Infrastructural Design</option>
        </select>
        <br><br>
        <label for="rating">Hard Skill Level:</label>
        <select name="rating" id="rating" value={{ $skill->rating}}>
            <option value="">---Select---</option>
            <option {{ $skill->rating == 'Novice'?'selected':''}} value="Beginner">Novice</option>
             <option {{ $skill->rating == 'Advanced Beginner'?'selected':''}} value=" Advanced Beginner">Advanced Beginner</option>
             <option {{ $skill->rating== 'Competent'?'selected':''}}value="Competent">Competent</option>
             <option {{ $skill->rating == 'Proficient'?'selected':''}}value=" Proficient"> Proficient</option>
             <option {{ $skill->rating  == 'Expert'?'selected':''}}value=" Expert"> Expert</option>
          </select>
        <br><br>
        <input type="submit" class="btn btn-success" value="Save Skill">
      
    </form>
 </div>
  
@endsection
