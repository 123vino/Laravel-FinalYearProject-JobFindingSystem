@extends('layouts.headerA')

@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="span6">
                <form action="{{ route('searchjob')}}" method="GET">
                    <div class ="form-group">
                    <h3><b>Search Result</b></h3>
                    <label><b>Salary</b> </label>
                    <select class="js-example-basic-single"  name="salary">
                        <option selected disabled value="0">...Select Salary...</option>
			                    <option value="< RM1000"> < RM 1000 </option>
                                <option value="RM1000 to RM2000">RM 1000 to RM 2000</option>
                                <option value="RM2000 to RM3000">RM 2000 to RM 3000</option>
                                <option value="RM3000 to RM4000">RM 3000 to RM 4000</option>
								<option value="RM4000 to RM5000">RM4000 to RM5000</option>
								<option value="> RM5000">> RM 5000</option>
                      </select>
                      &nbsp;&nbsp;
                      <label><b>Job Keyword</b> </label>
                      <select class="js-example-basic-single" name="tags">
                        <option value="">...Select Key Skill...</option>
						<option value="ComputerScience">ComputerScience</option>
						<option value="Information Technology">Information Technology</option>
						<option value="Electronic">Electronic</option>
					    <option value="Mechanical">Mechanical</option>
						<option value="Civil ">Civil</option>
						<option value="Administration">Administration</option>
						<option value="Accountancy">Accountancy</option>
					    <option value="Marketing">Marketing</option>
						<option value="Art">Art</option>
						<option value="Designing">Designing</option>
						<option value="Photography">Photography</option>
						<option value="Hotel/Restaurant">Hotel/Restaurant</option>
						<option value="Journalist">Journalist</option>
                      </select>
                      &nbsp;&nbsp;
                      <label><b>Location</b> </label>
                      <select class="js-example-basic-single" name="location">
                        <option value="">...Select...</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Putrajaya">Putrajaya</option>
                        <option value="Penang">Penang</option>
                        <option value="Johor">Johor</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Terengganu">Terengganu</option>
                        <option value="Malacca">Malacca</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                        <option value="Pahang">Pahang</option>
                        <option value="Sabah">Sabah</option>
                        <option value="Sarawak">Sarawak</option>
                        <option value="Labuan">Labuan</option>
                      </select>
                    </div> 
                    <br><br>
                <div class ="form-group">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                 </form>
            </div>
        </div>
    </div>
    
</div>
<br>
<div class="container">
    <div class="row justify-content">
        @foreach ($posts as $post)
        <div class="card" style="width: 18rem;">
            <img src="https://www.mintformations.co.uk/blog/wp-content/uploads/2020/05/shutterstock_583717939.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              
              <label><b>Company Name</b></label>
              <p class="card-text">{{ $post->company->comName }}</p>
              <label><b>Job Name</b></label>
              <p class="card-text">{{ $post->jobName }}</p>
              <label><b>Location</b></label>
              <p class="card-text">{{ $post->location }}</p>
              <a href="{{ route('jobprofile',$post->id) }}" class="btn btn-primary">View Job</a>
            </div>
          </div>
          &nbsp;&nbsp;
          @endforeach
    </div>
</div>

@endsection