@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tell us  about you</h2>
  
     <form action="/user-detail" method="POST">
        @csrf
        <label for="fullName">Full Name :</label>
        <input type="text" name="fullname" placeholder="fullname">
        <br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="email">
        <br><br>
        <label for="phone">Phone Number :</label>
        <input type="phone" name="phone" placeholder="phone">
        <br><br>
        <label for="address">Address:</label>
        <input type="address" name="address" placeholder="address">
        <br><br>
        <label for="summary">Summary :</label>
        <input type="summary" name="summary" placeholder="summary">
        <br><br>
           <input type="submit"  class="btn btn-success"  value="Save Biodata">
    </form>
    <br><br>
 
</div>


<div class="container">
   <h2>Skills Details</h2>
   <form action="/skill" method='POST'>
    @csrf
    <label for="name">Your Skill:</label>
    <select name="name" id="name">
      <option value="PHP">PHP</option>
      <option value="Laravl">Laravel</option>
      <option value="C++">C++</option>
      <option value="Phyton">Phyton</option>
    </select>
    <br><br>
    <label for="rating">Your Skill Level:</label>
    <select name="name" id="name">
      <option value="Beginner">Beginner</option>
      <option value="Intermediate">Intermediate</option>
      <option value="Expert">Expert</option>
   </select>
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
   <input type="submit" class="btn btn-success" value="Save Skills">
   </form>
</div>
<br><br>
<div class="container">
<h2>Education details</h2>
    <form action="/education" method='POST'>
        @csrf
        <label for="school_name">School/University Name:</label>
        <input type="text" name='school_name' placeholder=''>
        <br><br>
        <label for="year_finish">Location:</label>
        <input type="text" name='year_finish' placeholder=''>
        <br><br>
        <label for="higher_education"> Education level:</label>
        <select name="higher_education" id="higher_education">
          <option value="SPM">SPM</option>
          <option value="STPM">STPM</option>
          <option value="Foundation">Foundation</option>
          <option value="Diploma">Diploma</option>
          <option value="Degree">Degree</option>
          <option value="Master">Master</option>
        </select>
        <br><br>
        <label for="field_of_study">Field of Study:</label>
        <input type="text" name='field_of_study' placeholder=''>
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" 
         title="Ex: Bachelor in Computer Science(Software Engineering)(Hons)">Tips</button>
        <br><br>
        <label for="graduation_start_date">Start Date:</label>
        <input type="date" name='graduation_start_date' placeholder='Start Date'>
        <br><br>
        <label for="graduation_start_date">End Date:</label>
        <input type="date" name='graduation_end_date'placeholder='End Date'>
        <br><br>
        <input type="submit" class="btn btn-success" value="Save Education">
    </form>
</div>
<br><br>
<div class="container">
        <h2>Experience Details</h2>
    
         <form action="/experience" method='POST'>
            @csrf
     
            <label for="job_title">Job Title :</label>
            <input type="text" name='job_title' placeholder='job_title'>
            <br><br>
            <label for="employer">Workplace :</label>
            <input type="text" name='employer' placeholder='workplace'>
            <br><br>
            <label for="city">City :</label>
            <input type="text" name='city' placeholder='city'>
            <br><br>
            <label for="Job Detail">Job Detail :</label>
            <br>
            <textarea id="job_detail" name="job_detail" rows="4" cols="50">
            </textarea>
            
            <br><br>
            <label for="start_date">Start Date :</label>
            <input type="date" name='start_date' placeholder='Start Date'>
            <br><br>
            <label for="end_date">End Date :</label>
            <input type="date" name='end_date'placeholder='End Date'>
            <br><br>
            <input type="submit" class="btn btn-success" value="Save Experience">
    
        </form>
    
    </div>
</div>

@endsection