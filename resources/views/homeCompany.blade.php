@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Company Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hai {{ $data->comName }} You are logged in as Company') }}
                    <br><br>
                    {{ __('Hello') }} {{ $data->comName }}  {{ __('Welcome to J.O.B') }}
                          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
