@extends('user.layout');

@section('content')

<section class="py-5">
   
    <div class="cointainer">
        <div class="row">
            
          </div>
            <div class="col-md-12">
                <div class="card">
                  <div class="card-body" style="background-color:lightblue">
                        <h4><b>My Profile Page</b></h4>
                        <hr>
                        <form action="{{ url('userprofile/'.$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control"  name="gender" value="{{$user->gender }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="text" class="form-control" name="age" value="{{ $user->age }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobileNo">Contact Number</label>
                                        <input type="text" class="form-control" name="mobileNo" value="{{ $user->mobileNo}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="tags">Tag</label>
                                    <select class="form-control multiple-select"  id="tags"name="tags[]" multiple >
                                        <option value="#ComputerScience">#ComputerScience</option>
                                        <option value="#Programming">#Programming</option>
                                        <option value="#WebDeveloper">#WebDeveloper</option>
                                        <option value="#MobileApplication">#MobileApplication</option>
                                    </select>
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
@section('jsplugins') 
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection

<div class="row">
    <img src="..." class="rounded float-left" alt="...">
    <div class="company-profile">
        <img src="" width="100%">
    </div>
    <div class="company-desc">
        <h1>{{ $company->comName }}</h1>
        <h5><b>Registration Number</b></h5>
        <p>{{ $company->comRegNum }}</p>
        <p>{{ $company->comProfile }}</p>
        <b>{{ $company->bussiNature }}</b>&nbsp&nbsp<b>{{ $company->comAddress }}</b>&nbsp&nbsp<b>{{ $company->comEmail}}</b>&nbsp&nbsp<b>{{ $company->comContact }}</b>
    </div>
</div>
<br><br>

<a class="btn btn-primary" href="{{ url('/') }}">Back</a>
</div>