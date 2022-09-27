@extends('company.dashboard');

@section('content')

   
    <div class="container"  HTML::style('css/profile1.css') >
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body" style="background-color:bisque">
                
                <form aaction="POST" href="{{ route('profile.com',$company->id)}}">
                    @csrf
                    @method('PUT')
                <div class="account-settings">
                    <div class="user-profile">
                        {{-- <div class="user-avatar">
                            <img src="https://icon-library.com/images/profile-image-icon/profile-image-icon-5.jpg" alt="Maxwell Admin">
                        </div> --}}
                        <br><br><br><br>
                        <label><h3><b>Company Name</b></h3></label><br>
                        <center>  <h4><b> {{$LoggedUserInfo['comName'] }}</b></h4> </center>
                        
                    </div>
                    {{--  <div class="about">
                        <label>About</label><br>
                        <h6> {{$LoggedUserInfo['comProfile'] }}</h6>
                    </div>--}}
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body" style="background-color:bisque">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h5 class="mb-2 text-primary">Company Details</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="comName">Company Name</label>
                            <input type="text" class="form-control" name="comName" value="{{$LoggedUserInfo['comName'] }}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="comRegNum">Company Registration Number</label>
                            <input type="text" class="form-control" name="comRegNum" value="{{$LoggedUserInfo['comRegNum'] }}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        
                        <div class="form-group">
                            <label for="comProfile">Company Profile</label>
                            <textarea id="comProfile" rows="4" type="text" class="form-control"  name="comProfile" required autocomplete="comProfile">{{$LoggedUserInfo['comProfile'] }}</textarea>
                            
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="comAddress">Company Address</label>
                            <input type="text" class="form-control" name="comAddress" value="{{$LoggedUserInfo['comAddress'] }}">
                        </div>
                      
                    </div>
                </div>
                <div class="row gutters">
                    <div class="form-group">
                        <label for="bussiNature">Business Nature</label>
                        <select class="form-control" id="skillLevel" name="skillLevel">
                           <option {{ $company->bussiNature == 'Sole proprietorship'?'selected' : ''}} value="Sole proprietorship">Sole proprietorship</option>
                            <option {{ $company->bussiNature == 'Partnership'?'selected' : ''}}  value="Partnership">Partnership</option>
                            <option {{ $company->bussiNature == 'Limited Liability Partnership'?'selected' : ''}} value="Limited Liability Partnership">Limited Liability Partnership</option>
                            <option {{ $company->bussiNature == 'Private limited company'?'selected' : ''}} value="Private limited company">Private limited company</option>
                            <option {{ $company->bussiNature == 'Public limited company'?'selected' : ''}} value="Public limited company">Public limited company</option>
                        </select>
                       
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="comEmail">Company Email</label>
                            <input type="text" class="form-control" name="comEmail" value="{{$LoggedUserInfo['comEmail'] }}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="comContact">Company Contact</label>
                            <input type="text" class="form-control" name="comContact" value="{{$LoggedUserInfo['comContact'] }}">
                        </div>
                    </div>
                   
                 {{--   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="zIp">Zip Code</label>
                            <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                        </div>
                    </div> --}} 
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        </div>
    </div>
@endsection
