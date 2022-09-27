@extends('user.layout2Resume')

@section('content')

<div class="container">
    <h2>Skill Summary</h2>

    @foreach($skills as $e)
    
    <div class="card">
        <div class="card-body">
            <h3>Hard Skill</h3> 
            <h4 class="card-title">{{$e->name}} ({{$e->rating}})</h4>
            <br>
             <h3>Soft Skill</h3>
            <h4 class="card-title">{{$e->hardskills}} ({{$e->hardskillslevel}})</h4>
            <br><br>
            <a class="btn btn-sm btn-primary" href="{{ route('skill.edit',$e)}}" role="button">Computer Science</a>&nbsp;
            <a class="btn btn-sm btn-primary" href="{{ route('skill1.edit',$e)}}" role="button">Engineer Edit</a>&nbsp;
            <a class="btn btn-sm btn-primary" href="{{ route('skill2.edit',$e)}}" role="button">Bussiness Edit</a>&nbsp;
            <a class="btn btn-sm btn-primary" href="{{ route('skill3.edit',$e)}}" role="button">Other</a>
            <form action="{{route('skill.destroy', $e)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
    
                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
            </form>
        </div>
        
    </div>
    @endforeach
    <div class="mt-2">
        <a href="{{ route('skill.create')}}">+ Add Skill</a>
    </div>
    
</div>
<div class="row mt-3">
    <div class="col text-left">
        <a class="btn btn-secondary" href="" role="button">Back</a>
    </div>

    <div class="text-right">
        <a class=" btn btn-primary" href=" {{route('resume.index')}} " role="button">Preview Resume</a>
    </div>
    
</div>




 <!-- Modal -->
{{--  <div class="modal fade " id="modelId" tabindex="-1" role="dialog"
    aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Preview Resume</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <iframe width='100%' height='900'  src="{{route('resume.index')}}"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <a name="" id="" class="btn btn-primary" href="#"
                    role="button">Download</a>
            </div>
        </div>
    </div>
</div>--}}
@endsection
