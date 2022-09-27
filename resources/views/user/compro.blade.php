@extends("user.layout")
@section('content')

<div class="container">
    <div class="row">
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
    <a class="btn btn-primary" href="{{ route('job.show',$company->id)}}">Back</a>
    </div>
</div>
@endsection