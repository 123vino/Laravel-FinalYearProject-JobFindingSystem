@extends('user.layout2Resume')

@section('content')
<div class="container" style="text-align:justify;">
    <div class="text-right">
        <a class=" btn btn-primary" href=" {{route('resume.index')}} " role="button">Preview Resume</a>
    </div>
    
    <h2>Tell us  about you</h2>
  
     <form action="/user-detail" method="POST">
        @csrf
        <label for="fullname">Full Name :</label>
        <input type="text" name="fullname" placeholder="">
        <br><br>
        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="">
        <br><br>
        <label for="phone">Phone Number :</label>
        <input type="string" name="phone" placeholder="">
        <br><br>
        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="">
        <br><br>
        <label for="coursename">Coursename:</label>
        <input type="text" name="coursename" placeholder="EX:Software Engineer">
        <br><br>
        <label for="summary">Summary:(Explain about yourself in short) </label>
        <br>
        <textarea id="summary" name="summary" rows="4" cols="50"></textarea>
      
        <br><br>
           <input type="submit"  class="btn btn-success"  value="Save Biodata">
    </form>
    <br><br>
 
</div>
@endsection