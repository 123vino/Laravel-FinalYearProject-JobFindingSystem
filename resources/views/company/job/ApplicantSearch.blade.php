@extends('layouts.app')
@section('content')
  
  <div class= "panel panel-primary">
      <div class= "panel-heading">
          <h2 class ="text-center">Job Finder Search</h2>
      </div>
      <div class="panel-body">
          <div class="col-mod-3">
              <select class="form-control" name="skill" id="skill">
                <option selected ="false">
                    Skill
                </option>
              </select>
          </div>
          <br>
          <div class="col-mod-3">
            <select class="form-control" name="education" id="education">
              <option selected ="false">
                    Education
              </option>
            </select>
        </div>
        <br><br>
        <div class="col-mod-3">
            <button class="btn btn-primary" id="search" name="search">Search <i class="fa fa-search"></i></button>
        </div>
      </div>
  </div>
@endsection