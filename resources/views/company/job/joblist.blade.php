@extends('company.dashboard')
@section('content')
     <div class = "container-fluid">
        <div class="card">
            <div class ="card-header" style="background-color: rgb(139, 77, 77)" >
              <h4><b> Job Applicants</b></h4>
            </div>
            <div class="card-body" >
                <table class="table table-responsive table-bordered">
                   <thead style="background-color: rgb(188, 141, 162)">
                    <tr>
                        <th>No</th>
                        <th>Job Name</th>
                        <th>Company Name</th>
                        <th>Action</th>
                     </tr>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                    @foreach ($applicants as $applicant)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$applicant->jobName}}</td>
                            <td>{{$applicant->company->comName}}</td>
                            <td>
                            <a class="btn btn-primary" href="{{url('/applicants',$applicant->id)}}">Applicants</a>
                             
                               {{--   <a class="btn btn-danger" href="{{ url('post/'.$post->id.'/delete') }}">Delete</a> --}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



