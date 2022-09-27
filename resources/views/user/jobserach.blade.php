@extends('layouts.app')
@section('content')


<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
        <div class="span12">
            <form method="GET" action="{{ route('search') }}" class="form-inline" >
                <input name="query" class="span5" type="text"  placeholder="Keywords: Ruby, Rails, Django" >
                <input name="query" class="span5" type="text"  placeholder="Location: City, State, Zip">
                <button type="submit" class="btn btn-primary"> <i class="icon-search icon-white"></i></button>
            </form>
        </div>
    </div>
</div>

@endsection