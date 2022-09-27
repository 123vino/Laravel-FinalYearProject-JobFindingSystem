@extends('company.dashboard')

@section('content')
<div class="container">
	<a class="btn btn-primary" href="{{ url('post') }}">Back</a>    
    <div class="row justify-content-center">
	    <div class="col-md-8"> 
		   <div class="card card-default">  
                <div class="card-header" style="background-color: rgb(152, 99, 123)"><h3 class="h3 text-center text-info">Edit the Job</h3></div>
                <div class="card-body" style="background-color: bisque">
                  <form method="POST" action= "{{url('post/'.$post->id)}}">
                	{{ csrf_field() }} 
					  
					  @method('PUT')
                    {{--   <div class="form-group">
					    <label for="com_id">Com Id</label>
					    <input type="text" class="form-control" id="com_id" name="com_id" placeholder="">
					  </div>--}}
                  	 <div class="form-group">
					    <label for="jobName">Job Name</label>
					    <input type="text" class="form-control" id="jobName" name="jobName" value="{{ $post->jobName}}">
					  </div>
					  <div class="form-group">
					    <label for="jobDescription">Job Description</label>
					    <textarea class="form-control" id="jobDescription" rows="5" name="jobDescription">{{ $post->jobDescription}}</textarea>
					  </div>
					  <div class="form-group">
					    <label for="jobRequirements">Job Requirements</label>
					    <textarea class="form-control" id="jobRequirements" rows="5" name="jobRequirements">{{ $post->jobRequirements}}</textarea>
					  </div>
					  <div class="row">
                        <div class="form-group col-md-6">
						    <label for="address">Location</label>
							<select class="form-control" id="address" name="address" >
								<option selected disabled value="0">...Select...</option>
								<option {{ $post->address == 'Kuala Lumpur'?'selected' : ''}}value="Kuala Lumpur">Kuala Lumpur</option>
								<option {{ $post->address == 'Selangor'?'selected' : ''}}value="Selangor">Selangor</option>
								<option {{ $post->address == 'Putrajaya'?'selected' : ''}}value="Putrajaya">Putrajaya</option>
								<option {{ $post->address == 'Penang'?'selected' : ''}}value="Penang">Penang</option>
								<option {{ $post->address == 'Johor'?'selected' : ''}}value="Johor">Johor</option>
								<option {{ $post->address == 'Perlisr'?'selected' : ''}}value="Perlis">Perlis</option>
								<option {{ $post->address == 'Kedah'?'selected' : ''}}value="Kedah">Kedah</option>
								<option {{ $post->address == 'Kelantan'?'selected' : ''}}value="Kelantan">Kelantan</option>
								<option {{ $post->address == 'Terengganu'?'selected' : ''}}value="Terengganu">Terengganu</option>
								<option {{ $post->address == 'Malacca'?'selected' : ''}}value="Malacca">Malacca</option>
								<option {{ $post->address == 'Negeri Sembilan'?'selected' : ''}}value="Negeri Sembilan">Negeri Sembilan</option>
								<option {{ $post->address == 'Pahang'?'selected' : ''}}value="Pahang">Pahang</option>
								<option {{ $post->address == 'Sabah'?'selected' : ''}}value="Sabah">Sabah</option>
								<option {{ $post->address == 'Sarawak'?'selected' : ''}}value="Sarawak">Sarawak</option>
								<option {{ $post->address == 'Labuan'?'selected' : ''}}value="Labuan">Labuan</option>
							  </select>
						  </div>
						  <div class="form-group col-md-6">
							<label for="salary">Salary</label>
						    <select class="form-control" id="salary" name="salary">
						    	<option selected disabled value="0">...Select Salary...</option>
								<option {{ $post->salary == '< RM1000'?'selected' : ''}}value="RM1000">< RM 1000</option>
							    <option {{ $post->salary == 'RM1000 to RM2000'?'selected' : ''}} value=" RM1000 to RM2000">RM 1000 to RM 2000</option>
								<option {{ $post->salary == 'RM2000 to RM3000'?'selected' : ''}}value="RM2000 to RM3000">RM2000 to RM3000</option>
								<option {{ $post->salary == 'RM3000 to RM4000'?'selected' : ''}}value="RM3000 to RM4000">RM 3000 to RM 4000</option>
								<option {{ $post->salary == 'RM4000 to RM5000'?'selected' : ''}}value="RM4000 to RM5000">RM4000 to RM5000</option>
								<option value="> RM5000">> RM 5000</option>
						    </select>
						   
						  </div>
						   <div class="form-group col-md-6">
						    <label for="skillLevel">Skill for Computer Science </label>
						    <select class="form-control multiple-select"  id="skillLevel2" name="skillLevel[]" multiple value="{{ $post->skillLevel}}">
								    <option value="">---Select---</option>
								    <option {{ $post->skillLevel == 'PHP'?'selected':''}} value="PHP">PHP</option>
									<option {{ $post->skillLevel == 'Java'?'selected':''}}value="Java">Java</option>
									<option {{ $post->skillLevel == 'JavaScript'?'selected':''}}value="JavaScript">JavaScript</option>
									<option {{ $post->skillLevel == 'HTML'?'selected':''}}value="HTML">HTML</option>
									<option {{ $post->skillLevel == 'CSS'?'selected':''}}value="CSS">CSS</option>
									<option {{ $post->skillLevel == 'C'?'selected':''}}value="C">C</option>
									<option {{ $post->skillLevel == 'C#'?'selected':''}}value="C#">C#</option>
									<option {{ $post->skillLevel == 'C++'?'selected':''}}value="C++">C++</option>
									<option {{ $post->skillLevel == 'Phyton'?'selected':''}}value="Phyton">Phyton</option>
									<option {{ $post->skillLevel == 'MySQL'?'selected':''}}value="MySQL">MySQL</option>
									<option {{ $post->skillLevel == 'Laravel'?'selected':''}}value="Laravel">Laravel</option>
									<option {{ $post->skillLevel == 'Django'?'selected':''}}value="Django">Django</option>
									<option {{ $post->skillLevel == 'Oracle'?'selected':''}}value="Oracle">Oracle</option>
									<option {{ $post->skillLevel == 'Azure'?'selected':''}}value="Azure">Azure</option>
									<option {{ $post->skillLevel == 'AWS'?'selected':''}}value="AWS">AWS</option> 
									<option {{ $post->skillLevel == 'AI/Machine Learning'?'selected':''}}value="AI/MachineLearning">AI/MachineLearning</option>
									<option {{ $post->skillLevel == 'Risk Analysis'?'selected':''}}value="Risk Analysis">Risk Analysis</option>
									<option {{ $post->skillLevel == 'Malware Prevention'?'selected':''}}value="Malware Prevention">Malware Prevention</option>
									<option {{ $post->skillLevel == 'Google Cloud Platform'?'selected':''}}value="Google Cloud Platform">Google Cloud Platform</option>
									<option {{ $post->skillLevel == 'Illustrator'?'selected':''}}value="Illustrator">Illustrator</option>
									<option {{ $post->skillLevel == 'Photoshop'?'selected':''}}value=" Photoshop"> Photoshop</option>
									<option {{ $post->skillLevel == 'Acrobat'?'selected':''}}value=" Acrobat "> Acrobat</option>
									
						    </select>
							
							</div>
							<div class="form-group col-md-6">
								<label for="appDate">Application Date</label>
                                <input type="date" class="form-control" id="appDate" name="appDate"  value="{{ $post->appDate}}">
								
							</div>
                            <div class="form-group col-md-6">
                                <label for="skillLevel">Skill for Engineer </label>
								<select class="form-control multiple-select"  id="skillLevel3" name="skillLevel[]" multiple value="{{ $post->skillLevel}}">
								
									<option value="">---Select---</option>
									<option {{ $post->skillLevel == 'Manufacturing Process'?'selected':''}}value="Manufacturing Process">Manufacturing Process</option>
									<option {{ $post->skillLevel == 'Mathematics'?'selected':''}}value="Mathematics">Mathematics</option>
									<option {{ $post->skillLevel == 'Construction'?'selected':''}}value="Construction">Construction</option>
									<option {{ $post->skillLevel == 'Quality Control'?'selected':''}}value="Quality Control">Quality Control</option>
									<option {{ $post->skillLevel == 'Robotics'?'selected':''}}value="Robotics">Robotics</option>
									<option {{ $post->skillLevel == 'Programming'?'selected':''}}value="Programming">Programming</option>
									<option {{ $post->skillLevel == 'Computer Science'?'selected':''}}value="Programming">Computer Science</option>
									<option {{ $post->skillLevel== 'Structural Physics'?'selected':''}}value="Structural Physics">Structural Physics</option>
									<option {{ $post->skillLevel == 'Nanotechnology'?'selected':''}}value="Nanotechnology">Nanotechnology</option>
									<option {{ $post->skillLevel == 'Aeronautics'?'selected':''}}value="Aeronautics">Aeronautics</option>
									<option {{ $post->skillLevel == 'Infrastructural Design'?'selected':''}}value="Infrastructural Design">Infrastructural Design</option>
										 {{--  @foreach ($categories as $category)
											<option value="{{$category->id}}">{{$category->category_name}}</option>
										@endforeach--}}
								</select>
                            </div>
							<div class="form-group col-md-6">
                                <label for="enddate">Application End Date</label>
                                <input type="date" class="form-control" id="enddate" name="enddate"  value="{{ $post->enddate}}">
                            </div>
					  </div>
					  <div class="row">
						  <div class="form-group col-md-6">
							<label for="skillLevel">Skill for Business</label>
							<select class="form-control multiple-select"  id="skillLevel"name="skillLevel[]" multiple value="{{ $post->skillLevel}}">
								<option value="">---Select---</option>
								<option {{ $post->skillLevel == 'Accounting'?'selected':''}}value="Accounting">Accounting</option>
								<option {{ $post->skillLevel == 'Accounting'?'selected':''}}value="Auditing">Auditing</option>
								<option {{ $post->skillLevel == 'Budgeting'?'selected':''}}value="Budgeting">Budgeting</option>
								<option {{ $post->skillLevel== 'Logistics'?'selected':''}}value="Logistics">Logistics</option>
								<option {{ $post->skillLevel == 'Administrative'?'selected':''}}value="Administrative">Administrative</option>
								<option {{ $post->skillLevel == 'Marketing'?'selected':''}}value="Phyton">Marketing</option>
								<option {{ $post->skillLevel == 'Bussiness Management'?'selected':''}}value="Bussiness Management">Bussiness Management</option>
							</select>
						  </div>
						  <div class="form-group col-md-6">
							<label for="workExperience">Years of Experience</label>
						    <select class="form-control" id="workExperience" name="workExperience" id="workExperience">
						    	<option value="no Experience">No Experience</option>
								<option {{ $post->workExperience == '1'?'selected' : ''}} value="1">1 year</option>
								<option {{ $post->workExperience == '2'?'selected' : ''}} value="2">2 years</option>
								<option {{ $post->workExperience == '3'?'selected' : ''}}value="3">3 years</option>
								<option {{ $post->workExperience == '> 3'?'selected' : ''}}value="> 3"> > 3 years</option>
						    </select>
						   
						  </div>
						
						  <div class="form-group col-md-6">
                            <label for="skillLevel">Skill for Others</label>
							<select class="form-control multiple-select"  id="skillLevel4"name="skillLevel[]" multiple value="{{ $post->skillLevel}}">
								<option value="">---Select---</option>
								<option {{ $post->skillLevel == 'Drawing'?'selected':''}} value="Drawing">Drawing</option>
								<option {{ $post->skillLevel == 'Painting'?'selected':''}} value="Painting">Painting</option>
								<option {{ $post->skillLevel == 'Sculpting'?'selected':''}}value="Sculpting">Sculpting</option>
								<option {{ $post->skillLevel == 'Photography'?'selected':''}}value="Photography">Photography</option>
								<option {{ $post->skillLevel == 'Contemparary Art'?'selected':''}}value="Contemparary Art">Contemparary Art</option>
								<option {{ $post->skillLevel == 'Fine Art'?'selected':''}}value="Fine Art">Fine Art</option>
								<option {{ $post->skillLevel == 'Illustration'?'selected':''}}value="Illustration">Illustration</option>
								<option {{ $post->skillLevel == 'Adobe Photoshop'?'selected':''}}value="Adobe Photoshop">Adobe Photoshop</option>
								<option {{ $post->skillLevel == 'Editing skills'?'selected':''}}value="Editing skills">Editing Skills</option>
							</select>

							
						  </div>
						  <div class="form-group col-md-6">
							<label for="location">Address</label>
							<input type="text" class="form-control" id="location" name="location" value="{{ $post->location}}">
						  </div>
						  <div class="form-group col-md-6">
							<label for="education">Education Level</label>
						    <select class="form-control" id="education" name="education" id="education">
						    	<option selected disabled value="0">...Select Education</option>
								<option {{ $post->education == 'Diploma'?'selected' : ''}} value="Diploma">Diploma</option>
							    <option {{ $post->education == 'Degree'?'selected' : ''}} value="Degree">Degree</option>
								<option  {{ $post->education == 'Master'?'selected' : ''}}value="Master">Master</option>
								<option  {{ $post->education == 'PHD'?'selected' : ''}}value="PHD">PHD</option>
						    </select>
						    
						  </div>
						  <div class="form-group col-md-6">
							<label for="tags">Job Keyword</label>
							<select class="form-control multiple-select"  id="tags"name="tags[]" multiple value="{{ $post->tags}}">
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