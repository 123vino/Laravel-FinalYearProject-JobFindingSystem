@extends('user.layout2Resume')
@section('content')

<div class="container">
    <h2>Education details</h2>

     <form action="{{ route('education.update', $education)}}" method='POST'>
        @csrf
        @method('PUT')
        <label for="school_name">School/University:</label>
        <input type="text" name='school_name' placeholder='school name'size="25" value={{ $education->school_name }}>
        <br><br>
        <label for="year_finish">Location:</label>
        <input type="text" name='year_finish' placeholder='location' value={{ $education->year_finish }}>
        <br><br>
        <label for="higher_education">Education Level</label>
        <select name="higher_education" id="higher_education" >
          <option value="">---Select---</option>
          <option {{ $education->higher_education == 'SPM'?'selected':''}}value="SPM">SPM</option>
          <option {{ $education->higher_education == 'STPM'?'selected':''}}value="STPM">STPM</option>
          <option {{ $education->higher_education == 'Matriculation'?'selected':''}}value="Matriculation">Matriculation</option>
          <option {{ $education->higher_education == 'Foundation'?'selected':''}}value="Foundation">Foundation</option>
          <option {{ $education->higher_education == 'Diploma'?'selected':''}}value="Diploma">Diploma</option>
          <option {{ $education->higher_education == 'Degree'?'selected':''}}value="Degree">Degree</option>
          <option {{ $education->higher_education == 'Master'?'selected':''}}value="Master">Master</option>
          <option {{ $education->higher_education == 'PHD'?'selected':''}}value="PHD">PHD</option>
        </select>
        <br><br>
        <label for="field_of_study">Field of Study:</label>
        <input type="text" name='field_of_study' placeholder='' value={{ $education->field_of_study }}>
        <br><br>
        <label for="graduation_start_date">Start Date:</label>
        <input type="date" name='graduation_start_date' placeholder='Start Date'value={{ $education->graduation_start_date }}>
        <br><br>
        <label for="graduation_end_date">End Date:</label>
        <input type="date" name='graduation_end_date'placeholder='End Date'value={{ $education->graduation_end_date }}>
        <br><br>

        <input type="submit" class="btn btn-success" value="Save Education">

    </form>

</div>


@endsection
