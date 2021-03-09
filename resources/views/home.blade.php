@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}<br><br>

                    <a href="{{route('addVideo')}}">ADD A VIDEO</a><p> -> You only can add a video if you are a loader</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
