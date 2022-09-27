@extends('user.layout')
@section('content')
    <div class="container">
        <div class="container" >
            <img src="https://www.logodesign.net/logo/abstract-home-with-architecture-lines-432ld.png" alt="companylogo" align ="left"  width="335" height="280">
                 
                 <div class="row justify-content-left">
                  <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">Below is the job details for {{ $jobs->jobName }}</div>
                            <div class="card-body">
                                <p>
                                    <h4>Job Description</h4>
                                    {{ $jobs->jobDescription }}
                                </p>
                            </div>
                           
                        </div>
                       
                        <div class="card">
                           <div class="card-body">
                                <p>
                                    <h4>Job Requirements</h4>
                                    {{ $jobs->jobRequirements }}
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
                            <p>Company :{{ $jobs->company->comName }}</p>
                            <p>Address :{{ $jobs->location }}</p>
                            <p>Skill Required :{{ $jobs->skillLevel}}</p>
                            <p>Working Experience:{{ $jobs->workExperience}} years</p>
                            <p>Education:{{ $jobs->education}}</p>
                            <p>Salary:{{ $jobs->salary}}</p>
                            <p>Application Date:{{ $jobs->appDate}}</p>
                        </div>
                    </div>
            <br>
           
                @if(Auth::user())
                @if(!$jobs->checkApplication())
                <form action="{{ route('jobs.apply',$jobs->id) }}" method="post">
                    @csrf
                <button class="btn btn-warning">Apply</button>
                </form>
                @endif
                @endif  
                
                
            </div>
           </div>
           <br>
           <a class="btn btn-primary" href="{{ route('jobrecent')  }}">Back</a>
       {{--  <div class="row justify-content-left">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Below is the job details for {{ $jobs->jobName }}</div>
                    <div class="card-body">
                        <p>
                            <h4>Job Description</h4>
                            {{ $jobs->jobDescription }}
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
                <p>Company :<a href="{{ route('company.pro',$jobs->company->id) }}">{{ $jobs->company->comName }}</p></a>
                <p>Address :{{ $jobs->location }}</p>
                <p>Skill Required :{{ $jobs->skillLevel}}</p>
                <p>Working Experience:{{ $jobs->workExperience}} years</p>
                <p>Education:{{ $jobs->education}}</p>
                <p>Salary:{{ $jobs->salary}}</p>
                <p>Application Date:{{ $jobs->appDate}}</p>
            </div>
        </div>
        @if(Auth::user())
        @if(!$jobs->checkApplication())
        <form action="{{ route('jobs.apply',$jobs->id) }}" method="post">
            @csrf
        <button class="btn btn-warning">Apply</button>
        </form>
        @endif
        @endif
    </div>
   </div>
    
  
       
                {{--  <a class="btn btn-primary" href="{{ route('jobrecent')  }}">Back</a>--}}
@endsection