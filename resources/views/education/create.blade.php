@extends('user.layout2Resume')

@section('content')
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
          <option value="">---Select---</option>
          <option value="SPM">SPM</option>
          <option value="STPM">STPM</option>
          <option value="STPM">Matriculation</option>
          <option value="Foundation">Foundation</option>
          <option value="Diploma">Diploma</option>
          <option value="Degree">Degree</option>
          <option value="Master">Master</option>
          <option value="PHD">PHD</option>
        </select>
        <br><br>
        <label for="field_of_study">Field of Study:</label>
        <input type="text" name='field_of_study' placeholder='Ex:Degree in Software Engineering'>
        
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

</div>


@endsection
