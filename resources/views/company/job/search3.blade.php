@extends('company.dashboard')
@section('content')

  <div class="container">
	<div class="row">
        <div class="span6">
            <form action="{{ route('searchuser2')}}" method="GET">
				<div class ="form-group">
                <h2>Search for Business</h2>
				<br><br>
				<label>Skill Name </label>
				<select class="js-example-basic-single"  name="skillName">
					<option value="">---Select---</option>
					<option value="Accounting">Accounting</option>
					<option value="Auditing">Auditing</option>
					<option value="Auditing">Budgeting</option>
					<option value="Logistics">Logistics</option>
					<option value="Administrative">Administrative</option>
					<option value="Phyton">Marketing</option>
					<option value="Bussines Management">Bussines Management</option>
				</select>
				  &nbsp;&nbsp;
				  <label> Skill Level </label>
				  <select class="js-example-basic-single" name="skillLevel">
					<option value="">---Select---</option>
					<option value="Beginner">Novice</option>
					<option value="Advanced Beginner">Advanced Beginner</option>
					<option value="Competent">Competent</option>
					<option value=" Proficient"> Proficient</option>
					<option value=" Expert"> Expert</option>
				  </select>
				</div> 
			<div class ="form-group">
				  <button class="btn btn-outline-dark" type="submit">Search</button>
				</div>
		     </form>
        </div>
    </div>
</div>

<br>
<div class="container">
<div class="row justify-content-center">
		<table class="table table-responsive table-bordered">

			<thead style="background-color: rgb(139, 77, 77)">
			<tr>
				<th scope="col">No</th>
                <th scope="col">Job Finder Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Email Address</th>
                <th scope="col">Skill Name</th>
                <th scope="col">Level</th>
				<th scope="col">View Applicant</th>
           </tr>
			</thead>
			<tbody style="background-color: white">
			<?php $i=1 ?>
			@foreach ($skills as $skill)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$skill->user->firstName}}</td>
					<td>{{$skill->user->mobileNo}}</td>
					<td>{{$skill->user->email}}</td>
					<td>{{$skill->name}}</td>
					<td>{{$skill->rating}}</td>
					<td><a href="{{url('/userResume',$skill->user->id)}}">View Applicant</p></a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
    </div>
</div>
<br><br>
<a class="btn btn-sm btn-primary" href=" {{route('searchindex')}} " role="button">Back</a>
@endsection

