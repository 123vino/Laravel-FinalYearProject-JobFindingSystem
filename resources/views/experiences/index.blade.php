@extends('user.layout2Resume')

@section('content')

<div class="container">
    <h2>Work Summary</h2>

    @foreach($experiences as $e)
    
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$e->job_title}} ({{$e->start_date}} to {{$e->end_date}})</h4>
            <ul>
                <li>{{ $e->employer}}</li>
                <li>{{ $e->city}}</li>
                <li>{{ $e->job_detail}}</li>
            </ul>
            <br>
            <a class="btn btn-sm btn-primary" href="{{ route('experience.edit',$e)}}" role="button">Edit</a>
             
            <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
    
                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
        </div>
    </div>
     @endforeach
     <div class="mt-2">
        <a href=" {{route('experience.create')}} ">+ Add Experience</a>
    </div>
    <div class="row mt-3">
        <div class="col text-left">
            <a class="btn btn-secondary" href="" role="button">Back</a>
        </div>
    
        <div class="col text-right">
            <a class=" btn btn-primary" href="  {{route('skill.index')}}" role="button">Next Section</a>
        </div>
    </div>
</div>

@endsection