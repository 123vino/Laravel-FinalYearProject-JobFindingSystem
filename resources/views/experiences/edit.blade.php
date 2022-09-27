@extends('user.layout2Resume')
@section('content')

<div class="container">
    <h2>Experiences</h2>

     <form action="{{ route('experience.update', $experience)}}" method='POST'>
        @csrf
        @method('PUT')
        <label for="job_title">Work Title :</label>
        <input type="text" name='job_title' placeholder='job_title' value={{ $experience->job_title }}>
        <br><br>
        <label for="employer">Workplace :</label>
        <input type="text" name='employer' placeholder='employer' value={{ $experience->employer}}>
        <br><br>
        <label for="city">City :</label>
        <input type="text" name='city' placeholder='city' value={{ $experience->city}}>
        <br><br>
        <label for="Job Detail">Work Detail :</label>
        <br>
        <textarea id="job_detail" name="job_detail" rows="4" cols="50">
            {{ $experience->job_detail }}
        </textarea>
        <br><br>
        <label for="start_date">Start Date :</label>
        <input type="date" name='start_date' placeholder='Start Date'value={{ $experience->start_date }}>
        <br><br>
        <label for="end_date">End Date :</label>
        <input type="date" name='end_date'placeholder='End Date'value={{ $experience->end_date }}>
        <br><br>

        <input type="submit" class="btn btn-success" value="Save Experience">

    </form>

</div>


@endsection
