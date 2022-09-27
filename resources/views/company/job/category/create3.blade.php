@extends('company.dashboard')

@section('content')
<div class="container">
	<a class="btn btn-primary" href="{{ url('post') }}">Back</a>    
    <div class="row justify-content-center">
	    <div class="col-md-8"> 
		   <div class="card card-default">  
                <div class="card-header" style="background-color: rgb(152, 99, 123)"><h3 class="h3 text-center text-info">Create Job for Business</h3></div>
                <div class="card-body" style="background-color: bisque">
                  <form method="POST" action= "{{ route('post.store') }}">
                  	@csrf
                    {{--   <div class="form-group">
					    <label for="com_id">Com Id</label>
					    <input type="text" class="form-control" id="com_id" name="com_id" placeholder="">
					  </div>--}}
                  	 <div class="form-group">
					    <label for="jobName">Job Name</label>
					    <input type="text" class="form-control" id="jobName" name="jobName" placeholder="">
					  </div>
					  <div class="form-group">
					    <label for="jobDescription">Job Description</label>
					    <textarea class="form-control" id="jobDescription" rows="5" name="jobDescription"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="jobRequirements">Job Requirements</label>
					    <textarea class="form-control" id="jobRequirements" rows="5" name="jobRequirements"></textarea>
					  </div>
					  <div class="row">
                        <div class="form-group col-md-6">
						    <label for="location">Location</label>
							<select class="form-control" id="location" name="location">
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
						  <div class="form-group col-md-6">
						    <label for="salary">Job Salary</label>
						    <select class="form-control" id="salary" name="salary" id="salary">
						    	<option selected disabled value="0">...Select Salary...</option>
			                    <option value="< RM1000"> < RM 1000 </option>
                                <option value="RM1000 to RM2000">RM 1000 to RM 2000</option>
                                <option value="RM2000 to RM3000">RM 2000 to RM 3000</option>
                                <option value="RM3000 to RM4000">RM 3000 to RM 4000</option>
								<option value="RM4000 to RM5000">RM4000 to RM5000</option>
								<option value="> RM5000">> RM 5000</option>
						    </select>
						  </div>
						  {{--  <div class="form-group col-md-6">
						    <label for="softskills">Soft Skill </label>
						    <select class="form-control multiple-select"  id="softskills"name="softskills[]" multiple>
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
							</div> --}}
							<div class="form-group col-md-6">
								<label for="skillLevel">Hard Skill </label>
								<select class="form-control multiple-select"  id="skillLevel" name="skillLevel[]" multiple>
									<option value="">---Select---</option>
                                    <option value="Accounting">Accounting</option>
									<option value="Auditing">Auditing</option>
									<option value="Budgeting">Budgeting</option>
                                    <option value="Logistics">Logistics</option>
                                    <option value="Administrative">Administrative</option>
                                    <option value="Phyton">Marketing</option>
                                    <option value="Bussines Management">Bussines Management</option>
									
										 {{--  @foreach ($categories as $category)
											<option value="{{$category->id}}">{{$category->category_name}}</option>
										@endforeach--}}
								</select>
							</div>
                            <div class="form-group col-md-6">
                                <label for="appDate">Application Date</label>
                                <input type="date" class="form-control" id="appDate" name="appDate">
                            </div>
							<div class="form-group col-md-6">
								<label for="tags">Job Keyword</label>
                                    <select class="form-control multiple-select"  id="tags"name="tags[]" multiple>
                                        <option value="Administration/Human Resources">Administration/Human Resources</option>
                                        <option value="Accountancy/Finance">Accountancy/Finance</option>
										<option value="Marketing">Marketing</option>
                                    </select>
                            </div>
							<div class="form-group col-md-6">
								<label for="enddate">Application End Date</label>
								<input type="date" class="form-control" id="enddate" name="enddate">
						    </div>
					  </div>
					  <div class="row">
						  {{--  <div class="form-group col-md-6">
						   
						  </div>--}}
						  <div class="form-group col-md-6">
							<label for="workExperience">Years of Experience</label>
						    <select class="form-control" id="workExperience" name="workExperience" id="workExperience">
						    	<option selected disabled value="0">...Select Experience...</option>
								<option value="no experience">No experience</option>
			                    <option value="1">1 year</option>
                                <option value="2">2 years</option>
                                <option value="3">3 years</option>
                                <option value="> 3">> 3 years</option>
						    </select>
						  </div>
						  <div class="form-group col-md-6">
							<label for="location">Address</label>
							<input type="text" class="form-control" id="location" name="location">
						  </div>
						  <div class="form-group col-md-6">
						    <label for="education">Education Level</label>
						    <select class="form-control" id="education" name="education" id="education">
						    	<option selected disabled value="0">...Select Education</option>	
								<option value="Diploma">Diploma</option>
								 <option value="Degree">Degree</option>
			                   	<option value="Master">Master</option>
                                <option value="PHD">PHD</option>
						    </select>
						  </div>
                        </div>
                        <br><br>
				       <button type="submit" class="btn btn-info">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jsplugins') 
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection





























