<?php 
	use App\Models\Post; 
	use App\Models\User; 
	
?>
@extends('company.dashboard')
@section('content')
<div class='container-fluid'>
    <div class="row jusify-content-center">
        
            <div class="card">
                <div class ="card-header" style="background-color: rgb(139, 77, 77)" >
               {{--  @foreach($applicants as $applicant)--}} 
              
                <div class="card-header"><b><h3>{{ $applicants->jobName }}</h3></b></div>
              
                <h6>Below shows list of applicants for this job :</h6>
                </div>
                 <div class="card-body">
                    <table class="table table-responsive table-bordered">
                        <?php $i=1 ?>
                        <thead style="background-color: rgb(188, 141, 162)">
                            <th>No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </thead>
                      {{--    @foreach($users as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$user->firstName }}</td>
                            <td>{{$user->lastName }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->mobileNo }}</td>
                        </tr>--}}
                      {{--  @foreach(Post::where('id', '=', $applicant->post_id)->get() as $job)
                            @foreach(User::where('id', '=', $applicant->user_id)->get() as $user)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    
                                    <td>{{date('d-M-Y', strtotime($job->updated_at))}}</td>
                                    <td>{{ $user->firstName }}</td>
                                    <td>{{ $user->lastName }}</td>
                                    <td>{{date('d-M-Y', strtotime($applicant->created_at))}}</td>
                                    <td>
                                        <a href='/users/public_profile/{{$applicant->user_id}}' style="color: blue; text-decoration: underline;">View CV</a> | 
                                        <a href='/users/public_profile/{{$applicant->user_id}}' style="color: blue; text-decoration: underline;">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach --}}
                   {{--   @endforeach--}}
                         @foreach($applicants->users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{$user->firstName }}</td>
                                <td>{{$user->lastName }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{$user->mobileNo }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{url('/userResume',$user->id)}}">Resume</a>
                                </td>
                            </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- @endforeach   --}}
            </div>
        
    </div>
</div>
@endsection


