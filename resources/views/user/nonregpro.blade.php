@extends("layouts.headerA")
@section('content')
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right:auto;
        width: 100%;
        height:290px;
    }
    #header {
        background-color:black;
        color:white;
        text-align:center;
        padding:5px;
       
    }
    #nav {
        line-height:30px;
        background-color:#eeeeee;
        height:300px;
        width:400px;
        float:left;
        padding:5px;
    }
    #section {
        position: center;
        width:350px;
        float:left;
        padding:10px;
       
    }
    #footer {
        background-color:black;
        color:white;
        clear:both;
        text-align:center;
        padding:5px;
    }
 </style>
<div class="container" style="background-color:white">
   
    <body>

        <div id="header">
        <h1>{{ $company->comName }}</h1>
        </div>
        
        <div id="nav">
            <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=873&q=80" alt="Paris" class="center">
        </div>
        
        <div id="section">
        <h1 ><b>About Us</b> </h1>
        <p>{{ $company->comProfile }}</p>
        <h3><i class="fa fa-briefcase">&nbsp&nbsp</i>Bussiness Nature </h3>
        <p>{{ $company->bussiNature }}</p>
        <h3> <i class=" fa fa-map-marker">&nbsp&nbsp</i>Location</h3>
        <p>{{ $company->comAddress }}</p>
        </div>
        
        <div id="footer">
            <h4> <i class="fa fa-address-book"></i>&nbsp&nbsp&nbsp<b>Contact Us</b> </h4>
            <br>
            <i class="fa fa-envelope"></i> {{ $company->comEmail}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-phone"></i>&nbsp{{ $company->comContact }}
        </div>
    </body>
</div>
<br>
<center><a class="btn btn-sm btn-primary" href=" {{url('/')}}">Back</a></center>

@endsection
