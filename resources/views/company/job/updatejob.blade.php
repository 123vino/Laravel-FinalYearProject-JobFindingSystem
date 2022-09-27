@extends('company.dashboard')
@section('content')
   @if($message = Session::get('success'))
        <div class = "alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <div class = "container-fluid">
        <div class="card">
            <div class ="card-header">
                List of jobs
            </div>
            <div class="card-body">
                <div class="text-right">
                    <a class="btn btn-primary mb-3" href="{{route('post.create')}}">Add new job</a>
                </div>
                <table class="table table-responsive table-bordered">

                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Job Name</th>
                        <th>Company Name</th>
                        <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                    @foreach ($posts as $post)


                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$post->jobName}}</td>
                            <td>{{$post->company->comName}}</td>
                            <td>
                               
                              <a class="btn btn-warning" href="{{ url('post/'.$post->id.'/edit') }}">Edit</a>
                             {{--  <a class="btn btn-danger" href="{{ url('post/'.$post->id.'/delete') }}">Delete</a> --}}
                            </td>
                        </tr>


                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



