<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
      
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Style & Common Css --> 
		<link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">
   
    <title>Company Side</title>
</head>
<body style="background-color: blueviolet">
  
    
    <nav class="navbar navbar-expand-lg navbar-black bg-black">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h5><b>JomOnBoard</b></h5></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">
                      Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('auth.login') }}">
                      Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.register')}}">
                      Register
                    </a>
                </li>
               
            </ul>
          
        </div>
      </nav>

      <br><br><br>
   <div class="container">
    @include('flash-message')
    @yield('content')
   </div>
      
</body>
   
</html>
    
