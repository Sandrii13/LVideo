@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LVideo</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">

</head>

<body >
	<div class="tm-page-wrap mx-auto">


		<!-- Page content -->
		<div class="container-fluid">
			<div class="mx-auto tm-content-container">
				<main>
					<div class="row mb-5 pb-4">
						<div class="col-12">
							<!-- Video player 1422x800 -->
							<video width="1875" height="800" controls autoplay>
							  <source src="{{asset('storage/'.$video->route)}}" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</div>
					<div class="row mb-5 pb-5">
						<div class="col-xl-8 col-lg-7">
							<!-- Video description -->
							<div class="tm-video-description-box">
								<h2 class="mb-5 tm-video-title">{{$video->title}}</h2>
								<p class="mb-4">{{$video->desc}}</p>
                            </div>
						</div>
						<div class="col-xl-4 col-lg-5">
							<!-- Share box -->
							<div class="tm-bg-gray tm-share-box">
								<h6 class="tm-share-box-title mb-4">Created at: {{$video->created_at}}</h6>

								<p class="mb-4">Author: {{$video->user_id}}</p>
                                <!--<p class="mb-4">Author: {$score->score}}</p>-->
								<a href="#" class="tm-bg-white px-5 mb-4 d-inline-block tm-text-primary tm-likes-box tm-liked">
									<i class="fas fa-heart mr-3 tm-liked-icon"></i>
									<i class="far fa-heart mr-3 tm-not-liked-icon"></i>
								</a>
								<div>
                                    <button class="btn  p-0 tm-btn-animate" ><a href="/home">Go back</a></button>
								</div>
							</div>
						</div>
					</div>

				</main>

                <footer class="row pt-5">
                    <div class="col-12">
                        <p class="text-right">Copyright 2021 LVideo

                            - By <a href="" rel="nofollow" target="_parent">Sandra GM</a></p>
                    </div>
                </footer>
			</div>
		</div>
	</div>

</body>
@endsection
</html>
