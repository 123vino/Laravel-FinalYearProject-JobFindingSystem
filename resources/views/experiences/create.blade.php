@extends('user.layout2Resume')

@section('content')

<div class="container">
  <h2>Experience Details</h2>

   <form action="/experience" method='POST'>
      @csrf

      <label for="job_title">Work Title :</label>
      <input type="text" name='job_title' placeholder='job_title'>
      <br><br>
      <label for="employer">Workplace :</label>
      <input type="text" name='employer' placeholder='workplace'>
      <br><br>
      <label for="city">City :</label>
      <input type="text" name='city' placeholder='city'>
      <br><br>
      <label for="Job Detail">Work Detail :</label>
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
       {{--   <label for="higher_education">Choose your higher education level:</label>
        <select name="higher_education" id="higher_education">
          <option value="foundation">Foundation</option>
          <option value="diploma">Diploma</option>
          <option value="degree">Degree</option>
          <option value="master">Master</option>
        </select>--}}