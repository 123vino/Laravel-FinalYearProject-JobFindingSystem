@extends('company.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="background-color: rgb(139, 77, 77)">
                Details Information of the Job:<strong> {{$post->jobName}}</strong>
            </div>
            <div class="card=body">
                <p>Job Description : {{$post->jobDescription}}</p>
                <p>Job Requirements : {{$post->jobRequirements}}</p>
                <p>Location : {{$post->location}}</p>
                <p>Skills : {{$post->skillLevel}}</p>
                <p>Working Experience : {{$post->workExperience}}</p>
                <p>Education : {{$post->education}}</p>
                <p>Salary : {{$post->salary}}</p>
                <p>Application Date: {{$post->appDate}}</p>
                <p>Application End Date: {{$post->enddate}}</p>
                <p>Tags for this job: {{$post->tags}}</p>
                <hr>
                <a class="btn btn-primary" href="{{ url('/post')  }}">Back</a>

            </div>
            <div class="text-center">

            </div>

        </div>
    </div>

@endsection