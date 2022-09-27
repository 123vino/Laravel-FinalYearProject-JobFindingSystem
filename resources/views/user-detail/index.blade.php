@extends('user.layout2Resume')

@section('content')


<h2>User Detail</h2>

  <div class="card">
    <div class="card-body">
    
    <h4 class="card-title"> {{$users->firstName}}&nbsp;&nbsp;{{$users->lastName}}</h4>
    <br>
    <h4>{{$users->email}}</h4>
    <br>
    <h4>{{$users->mobileNo}}</h4>
    <br>
    <h4>{{$users->address}}</h4>
    <br><br>
  {{--  <h4 class="card-title"> {{$details->summary}}</h4>--}}
         <br><br>
      {{-- <aclass="btnbtn-smbtn-primary"href="route('user-detail.edit',$details) " role="button">Edit</a>--}} 

     {{--('destroy', $details)" method="POST" style="display: inline">
            @csrf
            @method('DELETE')

            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
        </form>--}} 
    
    </div>
</div>

<div class="text-right mt-3">
    <a class="btn btn-primary " href=" {{route('education.index')}} " role="button">Next Section</a>
</div>

@endsection
