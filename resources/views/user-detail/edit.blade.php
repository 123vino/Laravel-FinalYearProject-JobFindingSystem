@extends('user.layout2Resume')
@section('content')

<div class="container">
    <h2>User details</h2>

     <form action="{{ route('user-detail.update', $userDetail)}}" method='POST'>
        @csrf
        @method('PUT')
        <label for="fullname">Full Name :</label>
        <input type="text" name='fullname' placeholder='fullname' value={{$userDetail->fullname}}>
        <br><br>
        <label for="email">Email :</label>
        <input type="email" name='email' placeholder='email' value={{$userDetail->email}}>
        <br><br>
        <label for="phone">Phone Number :</label>
        <input type="string" name='phone' placeholder='phone' value={{$userDetail->phone}}>
        <br><br>
        <label for="address">Address:</label>
        <input type="text" name='address' placeholder='address' value={{$userDetail->address}}>
        <br><br>
        <label for="summary">Summary:(Explain about yourself in short) </label>
        <br>
        <textarea id="summary" name="summary" rows="4" cols="50">{{$userDetail->summary}}</textarea>
        
        <br><br>
        <label for="coursename">Coursename:</label>
        <input type="text" name='coursename' placeholder='coursename' value={{$userDetail->coursename}}>
       
        <br><br>

        <input type="submit" class="btn btn-success" value="Save UserDetails">
     </form>

</div>
@endsection
