@extends('company.dashboard');

@section('content')

<section class="py-5">
  
    <div class="cointainer">
        <div class="row">
            
          </div>
            <div class="col-md-12">
                <div class="card" style="background-color:lightblue">
                  <div class="card-body">
                        <h4>Company Profile Page</h4>
                        <hr>
                        <form action="POST" href="{{ route('com.profile',$company->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="comName" value="{{$LoggedUserInfo['comName'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Company Registration Number</label>
                                        <input type="text" class="form-control" name="comRegNum" value="{{$LoggedUserInfo['comRegNum'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Company Address</label>
                                        <input type="text" class="form-control" name="comAddress" value="{{$LoggedUserInfo['comAddress'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Company Profile</label>
                                        <input type="text" class="form-control" name="comProfile" value="{{$LoggedUserInfo['comProfile'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Business Nature</label>
                                        <input type="text" class="form-control" name="bussiNature" value="{{$LoggedUserInfo['bussiNature'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Company Email</label>
                                        <input type="text" class="form-control" name="comEmail" value="{{$LoggedUserInfo['comEmail'] }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Company Contact</label>
                                        <input type="text" class="form-control" name="comContact" value="{{$LoggedUserInfo['comContact'] }}">
                                    </div>
                                </div>
                                
                            </div>
                            <br><br>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection