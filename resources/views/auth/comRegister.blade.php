@extends('layouts.headerB')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:gray"><h4><b>{{ __('Company Registration') }}</b></h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('auth.save')}}">
                        @csrf
                        {{--  @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif--}}
                        <div class="row mb-3">
                            <label for="comName" class="col-md-4 col-form-label text-md-end">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="comName" type="text" class="form-control @error('comName') is-invalid @enderror" name="comName" value="{{ old('comName') }}" required autocomplete="comName" autofocus>

                                @error('comName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="comRegNum" class="col-md-4 col-form-label text-md-end">{{ __('Registration Number') }}</label>

                            <div class="col-md-6">
                                <input id="comRegNum" type="text" class="form-control @error('comRegNum') is-invalid @enderror" name="comRegNum" value="{{ old('comRegNum') }}" required autocomplete="comRegNum">

                                @error('comRegNum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="comAddress" class="col-md-4 col-form-label text-md-end">{{ __('Company Address') }}</label>

                            <div class="col-md-6">
                                <input id="comAddress" type="text" class="form-control @error('comAddress') is-invalid @enderror" name="comAddress" value="{{ old('comAddress') }}" required autocomplete="comAddress">
                               @error('comAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="comProfile" class="col-md-4 col-form-label text-md-end">{{ __('Company Profile') }}</label>

                            <div class="col-md-6">
                              {{--   <input id="comProfile" type="text" class="form-control @error('comProfile') is-invalid @enderror" name="comProfile" value="{{ old('comProfile') }}" required autocomplete="comProfile">--}}
                               <textarea id="comProfile" rows="4" type="text" class="form-control @error('comProfile') is-invalid @enderror" name="comProfile" value="{{ old('comProfile') }}" required autocomplete="comProfile"></textarea>
                                @error('comProfile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="bussiNature" class="col-md-4 col-form-label text-md-end">{{ __('Bussiness Nature') }}</label>

                            <div class="col-md-6">
                                {{--  <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>--}}
                                <select class="form-control" id="bussiNature" name="bussiNature" required focus>
                                    <option value="">..Select..</option>   
                                    <option value="Sole proprietorship">Sole proprietorship</option>   
                                    <option value="Partnership"> Partnership</option>   
                                    <option value="Limited Liability Partnership">Limited Liability Partnership (LLP)</option>  
                                    <option value="Private limited company">Private limited company(Sdn. Bhd.)</option>       
                                    <option value="Public limited company">Public limited company (Berhad)</option>
                                </select>  
                                @error('bussiNature')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="comEmail" class="col-md-4 col-form-label text-md-end">{{ __('Company Email') }}</label>

                            <div class="col-md-6">
                                <input id="comEmail" type="email" class="form-control @error('comEmail') is-invalid @enderror" name="comEmail" value="{{ old('comEmail') }}" required autocomplete="comEmail">

                                @error('comEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="comContact" class="col-md-4 col-form-label text-md-end">{{ __('Company Contact') }}</label>

                            <div class="col-md-6">
                                <input id="comContact" type="string" class="form-control @error('comContact') is-invalid @enderror" name="comContact" value="{{ old('comContact') }}" required autocomplete="comContact">

                                @error("comContact")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3" >
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <p class="mb-0">Already have an account?Please click here for <a href="{{ route('auth.login') }}" class="text-black-50 fw-bold">Login</a></p>
                        </div>
              
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
