@extends('user.layout');

@section('content')

<section class="py-5">
   
    <div class="container"  HTML::style('css/profile1.css')>
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body" style="background-color:bisque">
                <form action="{{ url('userprofile/'.$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="account-settings">
                    <div class="user-profile">
                        {{--  <div class="user-avatar">
                            <img src="https://icon-library.com/images/profile-image-icon/profile-image-icon-5.jpg" alt="Maxwell Admin">
                        </div>--}}
                        <br><br><br><br>
                        <label><h3><b>Job Finder Name</b></h3></label>
                      <center>  <h4><b>{{ $user->firstName }}&nbsp; {{ $user->lastName }}</b></h4> </center>
                    </div>
                    {{-- <div class="about">
                        <label>About</label><br>
                    </div> --}}
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body" style="background-color:bisque">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h5 class="mb-2 text-primary">Personal Details</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" class="form-control"  name="gender" value="{{$user->gender }}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" name="age" value="{{ $user->age }}">
                        </div>
                    </div>
                </div>
                <div  class="row gutters">
                    <div class="form-group">
                        <label for="mobileNo">Contact Number</label>
                        <input type="text" class="form-control" name="mobileNo" value="{{ $user->mobileNo}}">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                           

                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                             <br><br>
                            <label for="summary">Summary:(Explain about yourself in short) </label>
                            <br>
                            <textarea id="summary" name="summary" rows="4" cols="50"></textarea>
                        </div>
                    </div>
                    {{--  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="tags">Job Keyword</label>
                            <select class="form-control multiple-select"  id="tags"name="tags[]" multiple >
                                <option value="">...Select Key Skill...</option>
                                <option value="ComputerScience">ComputerScience</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Electronic">Electronic</option>
                                <option value="Mechanical">Mechanical</option>
                                <option value="Civil ">Civil</option>
                                <option value="Administration">Administration</option>
                                <option value="Accountancy/Finance">Accountancy/Finance</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Art">Art</option>
                                <option value="Designing">Designing</option>
                                <option value="Photography">Photography</option>
                                <option value="Journalist">Journalist</option> 
                            </select>
                        </div> 
                    </div>--}}
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
@section('jsplugins') 
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
@endsection