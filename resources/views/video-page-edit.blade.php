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
                    <form method="post" action="{{route('edited')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="id" value="{{ $video->id }}"/>
					<div class="row mb-5 pb-5">
						<div class="col-xl-8 col-lg-7">
							<!-- Video description -->
							<div class="tm-video-description-box">
                                <h2 class="mb-5 tm-video-title"><textarea  cols="50" rows="1" name="title" >{{$video->title}}</textarea></h2>
                                <p class="mb-4"><textarea cols="100" rows="6" name="desc" >{{$video->desc}}</textarea></p>
                                <input class="btn-primary" type="submit" value="Ok">
                            </div>
						</div>
					</div>

                    </form>
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
