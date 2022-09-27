@extends('layouts.headerA')
@section('content')

    <div class="container" >
    <img src="https://www.logodesign.net/logo/abstract-home-with-architecture-lines-432ld.png" alt="companylogo" align ="left"  width="345" height="250">
         
         <div class="row justify-content-left">
          <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Below is the job details for {{ $posts->jobName }}</div>
                    <div class="card-body">
                        <p>
                            <h4>Job Description</h4>
                            {{ $posts->jobDescription }}
                        </p>
                    </div>
                   
                </div>
                <br>
                <div class="card">
                   <div class="card-body">
                        <p>
                            <h4>Job Requirements</h4>
                            {{ $posts->jobRequirements }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-right">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Short Info</div>
                <div class="card-body">
                    <p>Company :{{ $posts->company->comName }}</p>
                    <p>Address :{{ $posts->location }}</p>
                    <p>Skill Required :{{ $posts->skillLevel}}</p>
                    <p>Working Experience:{{ $posts->workExperience}} years</p>
                    <p>Education:{{ $posts->education}}</p>
                    <p>Salary:{{ $posts->salary}}</p>
                    <p>Application Date:{{ $posts->appDate}}</p>
                </div>
            </div>
    <br>
   
       {{--  @if(Auth::user())
        @if(!$jobs->checkApplication())
        <form action="{{ route('jobs.apply',$jobs->id) }}" method="post">
            @csrf
        <button class="btn btn-warning">Apply</button>
        </form>
        @endif
        @endif  --}}
        
        <h6>For now you are not allowed to apply because you were not register yet.Please click <a href = "{{ route('register') }}">here</a>/<a href="{{ url('/') }}">back</a> to get register.</h6>
    </div>
   </div>
   <br>
   <a class="btn btn-primary" href="{{ route('searchjob')  }}">Back</a>
    
@endsection



