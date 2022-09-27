@extends('user.layout')
@section('content')
<style>
  .container {
    height: 100px;
  
   
  }
  
  .vertical-center {
    margin: 0;
   
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  </style>
<body>
  <center>
    <h5>Choose the category to add your skills</h5>
    <br><br><br>
        <div class="container">
          <div class="vertical-center">
            <a class="btn btn-primary mb-3" href="{{url('/skillcreate2')}}">Engineering</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger mb-3" href="{{route('skill.create')}}">Computer Science</a>
          </div>
        </div>
    <br><br>  
        <div class="container">
          <div class="vertical-center">
            <a class="btn btn-success mb-3" href="{{url('/skillcreate3')}}">Bussiness</a>&nbsp;&nbsp;&nbsp;&nbsp; <a class="btn btn-warning mb-3" href="">Others</a>
          </div>
        </div>
    </center>
  </body>
@endsection



