@extends('user.layout')
@section('content')
<div class="container">
    <h2>Skills Details</h2>
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
       <option value="Beginner">Novice</option>
       <option value="Advanced Beginner">Advanced Beginner</option>
       <option value="Competent">Competent</option>
       <option value=" Proficient"> Proficient</option>
       <option value=" Expert"> Expert</option>
    </select>
    <br><br>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" 
     title=
     "
 (Beginner) 
 -Has basic knowledge of key aspects of the practice.
 -Straightforward tasks are likely to be done to an acceptable standard
 -Is able to achieve some steps using own judgment, but needs supervision for the overall task 
 
 (Intermediate)
 - Has good working and background knowledge of area of practice
 - Has 2 - 3 years working experience
 -  Able to achieve most tasks using own judgement
 
 (Expert)
 - Excellence achieved with relative ease
 - Has more than 8 years working experience
 - Able to take responsibility for going beyond existing standards and creating own interpretations" >
    Skill Tips
   </button>
  
   <br><br>
   <label for="name">Hard Skill:</label>
   <select name="name" id="name">
     <option value="">---Select---</option>
     <option value="Accounting">Accounting</option>
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
 </div>
  
@endsection