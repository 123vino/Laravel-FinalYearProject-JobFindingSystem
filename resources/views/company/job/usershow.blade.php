@extends('company.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                Details Information of the Job User:<strong> {{$user->firstName}}</strong>{{$user->lastName}}</strong>
            </div>
            <div class="card=body">
                <p>Gender: {{$user->gender}}</p>
                <p>Age: {{$user->age}}</p>
                <p>Address : {{$user->address}}</p>
                <p>Address : {{$user->mobileNo}}</p>
                <p>Skill Level : {{$user->skills->skillLevel}}</p>
                <p>Working Experience : {{$user->experience->workExperience}}</p>
                <p>Education : {{$user->education->education}}</p>
              
                <hr>
                <a class="btn btn-primary" href="{{ url('/post')  }}">Back</a>

            </div>
            <div class="text-center">

            </div>

        </div>
    </div>

@endsection