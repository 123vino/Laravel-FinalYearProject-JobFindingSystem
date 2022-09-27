@extends('user.layout2Resume')

@section('content')

<div class="container">
    <h2>Education Summary</h2>

    @foreach($education as $e)
    
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $e->school_name }},{{ $e->year_finish }},{{ $e->higher_education}},{{ $e->field_of_study}}, {{ $e->graduation_start_date}}, {{ $e->graduation_end_date}}</h4>
            <br><br>
            <a class="btn btn-sm btn-primary" href="{{ route('education.edit',$e)}}" role="button">Edit</a>
            <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
    
                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
    
         
        </div>
       
    </div>
    @endforeach
    

<a  href=" {{route('education.create')}} " role="button">+ Add Education</a>

<div class="row mt-3">
    <div class="col text-left">
        <a class="btn btn-secondary" href="" role="button">Back</a>
    </div>

    <div class="col text-right">
        <a class=" btn btn-primary" href=" {{route('experience.index')}} " role="button">Next Section</a>
    </div>
</div>


@endsection
