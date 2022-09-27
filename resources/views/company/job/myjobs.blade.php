@extends('user.layout')
@section('content')
 

    <div class = "container-fluid">
        <div class="card">
            <div class ="card-header" style="background-color: rgb(139, 77, 77)" >
               <h4><b> List of Applied jobs</b></h4>
            </div>
            <div class="card-body">
                <div class="text-right">
                   
                </div>
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
                    @foreach ($userjobs->posts as $post)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$post->jobName}}</td>
                            <td>{{$post->company->comName}}</td>
                            <td>
                                <form action="{{route('applied/job/destroy', $post->id)}}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                        
                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



