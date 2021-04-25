@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
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

<body>
        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <!--<div class="row">
                        <div class="col-12">
                            <div class="tm-categories-container mb-5">
                                <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                                <ul class="nav tm-category-list">
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">All</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Drone Shots</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Nature</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Actions</a></li>
                                    <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Featured</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>-->

                    <div class="row tm-catalog-item-list">
                            @foreach($videos as $video)
                            <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                                <div class="position-relative tm-thumbnail-container">
                                    <video width="320" height="240" controls>
                                        <source src="{{asset('storage/'.$video->route)}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
                                    <a href="{{route('video.show',$video->id)}}" class="position-absolute tm-img-overlay"></a>
                                        @endif
                                    @if(Auth::user()->role_id == 1)
                                        <img src="img/play-158609_1280.png" class="position-absolute tm-img-overlay">
                                    @endif
                                </div>
                                <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                    <h3 class="tm-text-primary mb-3 tm-catalog-item-title">{{$video->title}}</h3>
                                    @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
                                    <p class="tm-catalog-item-text">{{$video->desc}}</p>
                                    <p class="tm-catalog-item-text">{{$video->created_at}}</p>
                                    <div id="score">
                                        <a href="{{route('scores',$video->id)}}">★Put a score to this video</a><br>
                                    </div>
                                    @if($video['user_id'] == Auth::user()->id || Auth::user()->id == 3)
                                        <form method="get" action="{{route('delete/', $video->id)}}">
                                            <p class="tm-catalog-item-text"><input class="btn-primary" type="submit" value="Delete ✗"></p>
                                        </form>
                                        <form method="get" action="{{route('edit/', $video->id)}}">
                                            <p class="tm-catalog-item-text"><input class="btn-primary" type="submit" value="Edit ✍️"></p>
                                        </form>
                                    @endif
                                    @endif
                                </div>
                        </div>

                            @endforeach
                </main>



                <footer class="row pt-5">
                    <div class="col-12">
                        <p class="text-right">Copyright 2021 LVideo

                        - By <a href="" rel="nofollow" target="_parent">Sandra GM</a></p>
                    </div>
                </footer>
            </div> <!-- tm-content-container -->
        </div>
        </div>



</body>
@endsection
</html>
