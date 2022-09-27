@extends('layouts.headerB')

@section('content')
<div class="container">
 <div class="row justify-content-center">
        <div class="col-md-8" >
            
            <div class="card">
                <div class="card-header" style="background-color:gray"><p style="color:black" ><b>{{ __('Company Login') }}</b></p></div>

                <div class="card-body">

                    <form method="POST" action="{{ route('auth.check')}}">
                        @csrf
                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }};
                            </div>
                        @endif
                        {{--@if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif--}}
                       <div class="row mb-3">
                            <label for="comEmail" class="col-md-4 col-form-label text-md-end">{{ __('Company Email') }}</label>

                            <div class="col-md-6">
                                <input id="comEmail" type="email" class="form-control @error('comEmail') is-invalid @enderror" name="comEmail" value="{{ old('comEmail') }}" required autocomplete="comEmail" autofocus>

                                @error('comEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      {{--  <div class="row mb-0">
                            @if (Route::has('password.request'))
                                   <a class="btn btn-link-black" href="{{ route('password.request') }}">
                                       {{ __('Forgot Your Password?') }}
                                   </a>
                           @endif
                        </div>--}}
                        
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                       
                       {{--  <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                       <br>
                        <div  class="col-md-6 offset-md-4">
                            <p class="mb-0">Don't have an account?Please click here for <a href="{{ route('auth.register') }}" class="text-black-50 fw-bold">Registration.</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>
<body>

<div class="container">
   <div class="row" style="margin-top:45px">
      <div class="col-md-4 col-md-offset-4">
           <h4>Login | Custom Auth</h4><hr>
           <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label>Company Email</label>
                 <input type="text" class="form-control" name="comEmail" placeholder="Enter email address" value="{{ old('comEmail') }}">
                 <span class="text-danger">@error('comEmail'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Enter password">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Sign In</button>
              <br>
              <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
           </form>
      </div>
   </div>
</div>
    
</body>
</html>--}}
