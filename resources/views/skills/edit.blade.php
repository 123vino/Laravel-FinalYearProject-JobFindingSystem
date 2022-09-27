

@extends('user.layout2Resume')
@section('content')
<div class="container">
    <form action="{{ route('skill.update',$skill)}}" method='POST'>
        @csrf
        @method('PUT')
        <h2>Skills Details for Computer Science</h2>
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
            <option {{ $skill->name == 'PHP'?'selected':''}} value="PHP">PHP</option>
            <option {{ $skill->name == 'Java'?'selected':''}}value="Java">Java</option>
            <option {{ $skill->name == 'JavaScript'?'selected':''}}value="JavaScript">JavaScript</option>
            <option {{ $skill->name == 'HTML'?'selected':''}}value="HTML">HTML</option>
            <option {{ $skill->name == 'CSS'?'selected':''}}value="CSS">CSS</option>
            <option {{ $skill->name == 'Laravel'?'selected':''}}value="Laravel">Laravel</option>
            <option {{ $skill->name == 'C'?'selected':''}}value="C">C</option>
            <option {{ $skill->name == 'C#'?'selected':''}}value="C#">C#</option>
            <option {{ $skill->name == 'C++'?'selected':''}}value="C++">C++</option>
            <option {{ $skill->name == 'Phyton'?'selected':''}}value="Phyton">Phyton</option>
            <option {{ $skill->name == 'MySQL'?'selected':''}}value="MySQL">MySQL</option>
            <option {{ $skill->name == 'AI/MachineLearning'?'selected':''}}value="AI/MachineLearning">AI/MachineLearning</option>
            <option {{ $skill->name == 'Django'?'selected':''}}value="Django">Django</option>
            <option {{ $skill->name == 'MySQL'?'selected':''}}value="MySQL">MySQL</option>
            <option {{ $skill->name == 'Oracle'?'selected':''}}value="Oracle">Oracle</option>
            <option {{ $skill->name == 'Azure'?'selected':''}}value="Azure">Azure</option>
            <option {{ $skill->name == 'AWS'?'selected':''}}value="AWS">AWS</option> 
            <option {{ $skill->name == 'Risk Analysis'?'selected':''}}value="Risk Analysis">Risk Analysis</option>
            <option {{ $skill->name == 'Malware Prevention'?'selected':''}}value="Malware Prevention">Malware Prevention</option>
            <option {{ $skill->name == 'Google Cloud Platform'?'selected':''}}value="Google Cloud Platform">Google Cloud Platform</option>
            <option {{ $skill->name == 'Illustrator'?'selected':''}} value="Illustrator">Illustrator</option>
            <option {{ $skill->name == 'Photoshop'?'selected':''}}value=" Photoshop"> Photoshop</option>
            <option {{ $skill->name == 'Acrobat'?'selected':''}}value=" Acrobat "> Acrobat</option>
        </select>
        <br><br>
        <label for="rating">Hard Skill Level:</label>
        <select name="rating" id="rating" value={{ $skill->rating}}>
            <option value="">---Select---</option>
            <option {{ $skill->rating == 'Novice'?'selected':''}} value="Novice">Novice</option>
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
