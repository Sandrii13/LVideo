@extends('layouts.app')
@section('content')
<style>
    .star{width: 60px;}
    .bg1{background-color: #e6b0aa;}
    .bg2{background-color: #f5cba7;}
    .bg3{background-color: #f9e79f;}
    .bg4{background-color: #abebc6;}
    .bg5{background-color: #aed6f1;}
</style>
   <div class="container d-flex justify-content-center mt-100">
        <div class="row">
            <div class="col-12">
                <div class="card2">
                    <div class="card-body text-center">
                        <form action="{{route('score.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="video_id" value="{{$video->id}}">
                        <h3 class="mt-1">What do you think about this post? Let us know!</h3><br>
                        <span class="col-12 p-0 rating">
                            <div class="bg1">
                                <input id="radio1" required type="radio" name="rating" value="1">
                                <label for="radio1"><img class="star" src="{{asset('img/1star.png')}}" alt="1star"></label><br>
                            </div>
                            <div class="bg2">
                                <input id="radio2" required type="radio" name="rating" value="2">
                                <label for="radio2"><img class="star" src="{{asset('img/2star.png')}}" alt="2star"></label><br>
                            </div>
                            <div class="bg3">
                                <input id="radio3" required type="radio" name="rating" value="3">
                                <label for="radio3"><img class="star" src="{{asset('img/3star.png')}}" alt="3star"></label><br>
                            </div>
                            <div class="bg4">
                                <input id="radio4" required type="radio" name="rating" value="4">
                                <label for="radio4"><img class="star" src="{{asset('img/4star.png')}}" alt="4star"></label><br>
                            </div>
                            <div class="bg5">
                                <input id="radio5" required type="radio" name="rating" value="5">
                                <label for="radio5"><img class="star" src="{{asset('img/5star.png')}}" alt="5star"></label><br>
                            </div>
                        </span><br>
                            <input type="submit" class="btn-primary" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
