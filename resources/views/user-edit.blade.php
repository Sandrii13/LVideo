@extends('layouts.app')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LVideo</title>
        <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <!-- https://fonts.google.com/ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo-video-catalog.css">
    </head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Personal information') }}</div>

                    <div class="card-body">

                                <form method="post" action="{{route('user')}}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <input type="hidden" name="id" value="{{ $users->id }}"/>
                                    <p><textarea  cols="40" rows="1" name="name" >{{$users->name}}</textarea></p>
                                <p>Email: {{$users->email}}</p>
                                <input class="btn-primary" type="submit" value="Ok">
                                </form>


                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
