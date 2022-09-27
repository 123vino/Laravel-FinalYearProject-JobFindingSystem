@extends('company.dashboard')
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
    <h5>Choose the category to search applicant</h5>
    <br><br><br>
        <div class="container">
          <div class="vertical-center">
            <a class="btn btn-primary mb-3" href="{{route('searchuser1')}}">Engineering</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br>
            <a class="btn btn-danger mb-3" href="{{route('searchuser')}}">Computer Science</a>
          </div>
        </div>
    <br><br>  
        <div class="container">
          <div class="vertical-center">
            <a class="btn btn-success mb-3" href="{{route('searchuser2')}}">Bussiness</a>&nbsp;&nbsp;&nbsp;&nbsp; 
            <br><br>
            <a class="btn btn-warning mb-3" href="{{route('searchuser3')}}">Others</a>
          </div>
        </div>
    </center>
  </body>
@endsection



