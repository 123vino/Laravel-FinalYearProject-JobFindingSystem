@extends('user.layout');

@section('content')
<div class="container">
    <div class="row">
        <h1>Recent Jobs</h1>
        <table class="table">
            <thead>
                <th>Company Name</th>
                <th>Job Name</th>
                <th>Location</th>
                <th>Skill</th>
                <th>Date</th>
                <th></th>
            </thead>
            <tbody>
              
                @foreach($posts as $job)
                <tr>
                    <td> {{$job->company->comName}}</td>
                    <td> {{$job->jobName}}</td>
                    <td> {{$job->location}}</td>
                    <td> {{$job->skillLevel}}</td>
                    <td> <i class="fa fa-clock"></i>{{$job->created_at}}</td>
                    <td>
                        <a href="{{ route('job.show',$job->id)}}">
                         <button class="btn btn-success btn-sm">Apply</button> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-felx justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection