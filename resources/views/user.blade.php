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
                        @foreach($users as $user)
                            @if($user['id'] == Auth::user()->id)
                        <p>Name: {{$user->name}}</p>
                            <p>Email: {{$user->email}}</p>
                            @endif
                            @endforeach

                    </div>

                </div>

                @if(Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
                    <br><h2>My videos:</h2><br>
                    @if($videos == null)
                        <p>You don't upload any video yet.</p>
                        <a href="{{route('addVideo')}}">Click here if you want to upload your first video</a>
                    @endif
                @foreach($videos as $video)

                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                        <video width="320" height="240" controls>
                            <source src="{{asset('storage/'.$video->route)}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                            </div>
                        <div class="p-4 tm-bg-gray tm-catalog-item-description">
                            <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$video->title}}</h3>
                            <p class="tm-catalog-item-text">{{$video->desc}}</p>
                            <p class="tm-catalog-item-text">{{$video->created_at}}</p>
                            <form method="get" action="{{route('delete/', $video->id)}}">
                                <p class="tm-catalog-item-text"><input type="submit" value="Delete ✗"></p>
                            </form>
                            <form method="get" action="{{route('edit/', $video->id)}}">
                                <p class="tm-catalog-item-text"><input type="submit" value="Edit ✍️"></p>
                            </form>
                        </div>
                        </div>
                @endforeach
                        @endif
            </div>
        </div>
    </div>
@endsection
