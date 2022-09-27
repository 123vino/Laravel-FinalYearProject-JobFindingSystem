@extends('company.dashboard')
@section('content')
   <div class = "container-fluid">
        <div class="card">
            <div class ="card-header" style="background-color: rgb(139, 77, 77)" >
               <h4><b> List of jobs</b></h4>
            </div>
            <div class="card-body" style="background-color:bisque">
                <div class="text-right">
                    <a class="btn btn-primary mb-3" href="{{route('jobindex')}}">Add new job</a>
                </div>
                <table class="table table-responsive table-bordered" style="background-color:black">

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
                    @foreach ($posts as $post)
                        <tr style="color:white">
                            <td>{{$i++}}</td>
                            <td>{{$post->jobName}}</td>
                            <td>{{$post->company->comName}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('post.show',$post->id)}}">More Detail</a>
                               <a class="btn btn-warning" href="{{ url('post/'.$post->id.'/edit') }}">Edit</a>
                               <form action="{{route('post.destroy', $post->id)}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                    
                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                            </form>
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



