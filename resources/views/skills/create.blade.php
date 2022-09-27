@extends('user.layout')
@section('content')
<div class="container">

    <h2>Skills Details for Computer Science</h2>
    <form action="/skill" method='POST'>
     @csrf
     <label for="hardskills">Soft Skill:</label>
     <select name="hardskills" id="hardskills">
       <option value="">---Select---</option>
       <option value="Teamwork & cooperation">Teamwork & cooperation.</option>
       <option value="Communication">Communication</option>
       <option value="Analysis">Analysis</option>
       <option value="Creativity">Creativity</option>
       <option value="Problem Solving">Problem Solving</option>
       <option value="Adaptability">Adaptability</option>
       <option value="Multitasking">Multitasking</option>
       <option value="Leadership">Leadership</option>
       <option value="Analytic Thinking">Analytic Thinking</option>
     </select>
     <br><br>
     <label for="hardskillslevel">Soft Skill Level:</label>
     <select name="hardskillslevel" id="hardskillslevel">
      <option value="">---Select---</option>
       <option value="Poor">Poor</option>
       <option value="Fair">Fair</option>
       <option value="Good">Good</option>
       <option value="Excellent">Excellent</option>
    </select>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" 
     title=
      "
(Novice) 
- Has minimal or textbook knowledge without connecting it to the practice
- Needs close supervision or guidance
      
(Advanced Beginner)
- Has basic knowledge of key aspects of the practice
- Straightforward tasks are likely to be done to an acceptable standard
- Is able to achieve some steps using own judgment, but needs supervision for the overall task
      
(Competent)
- Has good working and background knowledge of area of practice
- Results can be achieved for open tasks, though may lack refinement
- Is able to achieve most tasks using own judgement
     
( Proficient)
- Depth of understanding of discipline and area of practice
- Fully acceptable standard achieved routinely, results are also achieved for open tasks
- Able to take full responsibility for own work 
     
( Expert)
- Authoritative knowledge of discipline and deep tacit understanding across area of practice
- Excellence achieved with relative ease
- Able to take responsibility for going beyond existing standards 
   " >
    Skill Tips
   </button>
   <br><br>
   <label for="name">Hard Skill:</label>
   <select name="name" id="name">
     <option value="">---Select---</option>
     <option value="PHP">PHP</option>
     <option value="Java">Java</option>
     <option value="JavaScript">JavaScript</option>
     <option value="HTML">HTML</option>
     <option value="CSS">CSS</option>
     <option value="Phyton">Phyton</option>
     <option value="C">C</option>
     <option value="C#">C#</option>
     <option value="C++">C++</option>
     <option value="SQL">SQL</option>
     <option value="Laravel">Laravel</option>
     <option value="Django">Django</option>
     <option value="MySQL">MySQL</option>
     <option value="Oracle">Oracle</option>
     <option value="Azure">Azure</option>
     <option value="AWS">AWS</option> 
     <option value="Risk Analysis">Risk Analysis</option>
     <option value="Malware Prevention">Malware Prevention</option>
     <option value="Google Cloud Platform">Google Cloud Platform</option>
     <option value="AI/MachineLearning">AI/MachineLearning</option>
     <option value="Illustrator">Illustrator</option>
     <option value=" Photoshop"> Photoshop</option>
     <option value=" Acrobat "> Acrobat</option>
   </select>
   <br><br>
   <label for="rating">Hard Skill Level:</label>
   <select name="rating" id="rating">
    <option value="">---Select---</option>
    <option value="Beginner">Novice</option>
    <option value="Advanced Beginner">Advanced Beginner</option>
    <option value="Competent">Competent</option>
    <option value=" Proficient"> Proficient</option>
    <option value=" Expert"> Expert</option>
  </select>
  
    <br><br>
    <input type="submit" class="btn btn-success" value="Save Skills">
    </form>

    <br><br>
    <h2>Skills Details for Engineering</h2>
    <form action="/skill" method='POST'>
     @csrf
     <label for="hardskills">Soft Skill:</label>
     <select name="hardskills" id="hardskills">
       <option value="">---Select---</option>
       <option value="Teamwork & cooperation">Teamwork & cooperation.</option>
       <option value="Communication">Communication</option>
       <option value="Analysis">Analysis</option>
       <option value="Creativity">Creativity</option>
       <option value="Problem Solving">Problem Solving</option>
       <option value="Adaptability">Adaptability</option>
       <option value="Multitasking">Multitasking</option>
       <option value="Leadership">Leadership</option>
       <option value="Analytic Thinking">Analytic Thinking</option>
     </select>
     <br><br>
     <label for="hardskillslevel">Soft Skill Level:</label>
     <select name="hardskillslevel" id="hardskillslevel">
      <option value="">---Select---</option>
      <option value="Poor">Poor</option>
      <option value="Fair">Fair</option>
      <option value="Good">Good</option>
      <option value="Excellent">Excellent</option>
    </select>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" 
     title=
     "
(Novice) 
 - Has minimal or textbook knowledge without connecting it to the practice
 - Needs close supervision or guidance
 
 (Advanced Beginner)
 - Has basic knowledge of key aspects of the practice
 - Straightforward tasks are likely to be done to an acceptable standard
 - Is able to achieve some steps using own judgment, but needs supervision for the overall task
 
 (Competent)
 - Has good working and background knowledge of area of practice
 - Results can be achieved for open tasks, though may lack refinement
 - Is able to achieve most tasks using own judgement

 ( Proficient)
 - Depth of understanding of discipline and area of practice
 - Fully acceptable standard achieved routinely, results are also achieved for open tasks
 - Able to take full responsibility for own work 

 ( Expert)
 - Authoritative knowledge of discipline and deep tacit understanding across area of practice
 - Excellence achieved with relative ease
 - Able to take responsibility for going beyond existing standards 
 " >
    Skill Tips
   </button>
   <br><br>
   <label for="name">Hard Skill:</label>
   <select name="name" id="name">
     <option value="">---Select---</option>
     <option value="Manufacturing Process">Manufacturing Process</option>
     <option value="Mathematics">Mathematics</option>
     <option value="Construction">Construction</option>
     <option value="Quality Control">Quality Control</option>
     <option value="Robotics">Robotics</option>
     <option value="Programming">Programming</option>
     <option value="Programming">Computer Science</option>
     <option value="Structural Physics">Structural Physics</option>
     <option value="Nanotechnology">Nanotechnology</option>
     <option value="Aeronautics">Aeronautics</option>
     <option value="Infrastructural Design">Infrastructural Design</option>
   </select>
   <br><br>
   <label for="rating">Hard Skill Level:</label>
   <select name="rating" id="rating">
    <option value="">---Select---</option>
    <option value="Beginner">Novice</option>
    <option value="Advanced Beginner">Advanced Beginner</option>
    <option value="Competent">Competent</option>
    <option value=" Proficient"> Proficient</option>
    <option value=" Expert"> Expert</option>
  </select>
  
    <br><br>
    <input type="submit" class="btn btn-success" value="Save Skills">
    </form>
    <br><br>
    <h2>Skills Details for Business</h2>
    <form action="/skill" method='POST'>
     @csrf
     <label for="hardskills">Soft Skill:</label>
     <select name="hardskills" id="hardskills">
       <option value="">---Select---</option>
       <option value="Teamwork & cooperation">Teamwork & cooperation.</option>
       <option value="Communication">Communication</option>
       <option value="Analysis">Analysis</option>
       <option value="Creativity">Creativity</option>
       <option value="Problem Solving">Problem Solving</option>
       <option value="Adaptability">Adaptability</option>
       <option value="Multitasking">Multitasking</option>
       <option value="Leadership">Leadership</option>
       <option value="Analytic Thinking">Analytic Thinking</option>
    </select>
   
     <br><br>
     <label for="hardskillslevel">Soft Skill Level:</label>
     <select name="hardskillslevel" id="hardskillslevel">
      <option value="">---Select---</option>
       <option value="Poor">Poor</option>
       <option value="Fair">Fair</option>
       <option value="Good">Good</option>
       <option value="Excellent">Excellent</option>
    </select>
  
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" 
     title=
     "
     (Novice) 
 - Has minimal or textbook knowledge without connecting it to the practice
 - Needs close supervision or guidance
 
 (Advanced Beginner)
 - Has basic knowledge of key aspects of the practice
 - Straightforward tasks are likely to be done to an acceptable standard
 - Is able to achieve some steps using own judgment, but needs supervision for the overall task
 
 (Competent)
 - Has good working and background knowledge of area of practice
 - Results can be achieved for open tasks, though may lack refinement
 - Is able to achieve most tasks using own judgement

 ( Proficient)
 - Depth of understanding of discipline and area of practice
 - Fully acceptable standard achieved routinely, results are also achieved for open tasks
 - Able to take full responsibility for own work 

 ( Expert)
 - Authoritative knowledge of discipline and deep tacit understanding across area of practice
 - Excellence achieved with relative ease
 - Able to take responsibility for going beyond existing standards 
 " >
    Skill Tips
   </button>
  
   <br><br>
   <label for="name">Hard Skill:</label>
   <select name="name" id="name">
    <option value="">---Select---</option>
    <option value="Accounting">Accounting</option>
    <option value="Auditing">Auditing</option>
    <option value="Budgeting">Budgeting</option>
    <option value="Logistics">Logistics</option>
    <option value="Administrative">Administrative</option>
    <option value="Phyton">Marketing</option>
    <option value="Bussines Management">Bussines Management</option>
   </select>
   <br><br>
   <label for="rating">Hard Skill Level:</label>
   <select name="rating" id="rating">
    <option value="">---Select---</option>
    <option value="Beginner">Novice</option>
    <option value="Advanced Beginner">Advanced Beginner</option>
    <option value="Competent">Competent</option>
    <option value=" Proficient"> Proficient</option>
    <option value=" Expert"> Expert</option>
  </select>
  
    <br><br>
    <input type="submit" class="btn btn-success" value="Save Skills">
    </form>
    <br><br>
    <h2>Skills Details for Others</h2>
    <form action="/skill" method='POST'>
     @csrf
     <label for="hardskills">Soft Skill:</label>
     <select name="hardskills" id="hardskills">
       <option value="">---Select---</option>
       <option value="Teamwork & cooperation">Teamwork & cooperation.</option>
       <option value="Communication">Communication</option>
       <option value="Analysis">Analysis</option>
       <option value="Creativity">Creativity</option>
       <option value="Problem Solving">Problem Solving</option>
       <option value="Adaptability">Adaptability</option>
       <option value="Multitasking">Multitasking</option>
       <option value="Leadership">Leadership</option>
       <option value="Analytic Thinking">Analytic Thinking</option>
    </select>
   
     <br><br>
     <label for="hardskillslevel">Soft Skill Level:</label>
     <select name="hardskillslevel" id="hardskillslevel">
       <option value="">---Select---</option>
       <option value="Poor">Poor</option>
       <option value="Fair">Fair</option>
       <option value="Good">Good</option>
       <option value="Excellent">Excellent</option>
     </select>
  
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" 
     title=
     "
 (Novice) 
 - Has minimal or textbook knowledge without connecting it to the practice
 - Needs close supervision or guidance
 
 (Advanced Beginner)
 - Has basic knowledge of key aspects of the practice
 - Straightforward tasks are likely to be done to an acceptable standard
 - Is able to achieve some steps using own judgment, but needs supervision for the overall task
 
 (Competent)
 - Has good working and background knowledge of area of practice
 - Results can be achieved for open tasks, though may lack refinement
 - Is able to achieve most tasks using own judgement

 ( Proficient)
 - Depth of understanding of discipline and area of practice
 - Fully acceptable standard achieved routinely, results are also achieved for open tasks
 - Able to take full responsibility for own work 

 ( Expert)
 - Authoritative knowledge of discipline and deep tacit understanding across area of practice
 - Excellence achieved with relative ease
 - Able to take responsibility for going beyond existing standards 
" >
    Skill Tips
   </button>
  
   <br><br>
   <label for="name">Hard Skill:</label>
   <select name="name" id="name">
    <option value="">---Select---</option>
		<option value="Drawing">Drawing</option>
		<option value="Painting">Painting</option>
		<option value="Sculpting">Sculpting</option>
		<option value="Photography">Photography</option>
		<option value="Contemparary Art">Contemparary Art</option>
		<option value="Fine Art">Fine Art</option>
		<option value="Illustration">Illustration</option>
		<option value="Adobe Photoshop">Adobe Photoshop</option>
		<option value="Editing skills">Editing Skills</option>
   </select>
   <br><br>
   <label for="rating">Hard Skill Level:</label>
   <select name="rating" id="rating">
    <option value="">---Select---</option>
    <option value="Beginner">Novice</option>
    <option value="Advanced Beginner">Advanced Beginner</option>
    <option value="Competent">Competent</option>
    <option value=" Proficient"> Proficient</option>
    <option value=" Expert"> Expert</option>
  </select>
  
    <br><br>
    <input type="submit" class="btn btn-success" value="Save Skills">
    </form>

 </div>
  
@endsection