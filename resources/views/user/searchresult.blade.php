@extends('layouts.app')
@section('content')


<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
        <h2>Filter Job Finder</h1>
            <div class ="form-inline">
                <div class ="form-group">
                    <label> Keyword </label>
                    <input type="text" name="title" form ="form-control">
                </div>
                <div class ="form-group">
                    <label> Keyword </label>
                    <input type="text" name="title" form ="form-control">
                </div>
                <div class ="form-group">
                    <button class="btn btn-outline-dark">Search</button>
                </div>

            </div>
            <form method="GET" action="{{ route('searchuser') }}" class="form-inline" >
                <input name="query" class="span5" type="text"  placeholder="Keywords: Ruby, Rails, Django" >
                <input name="query" class="span5" type="text"  placeholder="Location: City, State, Zip">
                <button type="submit" class="btn btn-primary"> <i class="icon-search icon-white"></i></button>
            </form>
       
    </div>
    <div class="search-results-container container">
        <h1>Search Results For Jobs</h1>
       {{--   <p class="search-results-count">{{ $skills->total() }} result(s) for '{{ request()->input('query') }}'</p>--}}

       {{--  @if ($skills->total() > 0)--}}
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Company Address</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $skill)
                    <tr>
                        {{--  <th><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></th>--}}
                        <td>{{ $skill->name }}</td>
                        <td>{{ $skill->rating}}</td>
                        <td>{{ $skill->name}}</td>
                      
                       {{--  <td>{{ str_limit($product->description, 80) }}</td>
                        <td>{{ $product->presentPrice() }}</td>
                        --}} 
                    </tr>
                @endforeach
            </tbody>
        </table>

       {{--   {{ $products->appends(request()->input())->links() }}--}}
       {{--  @endif--}}
    </div> <!-- end search-results-container -->
</div>

@endsection