@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h1>Add new video:</h1>
                    <form action="{{route('saveVid')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    Title<br>
                        <input type="text" name="title" value="" class="form form-control" required><br>
                        Description
                        <input type="text" name="desc" value="" class="form form-control" required><br>
                        Add video
                        <input type="file" name="video"><br><br>
                        <input type="submit" value="Save"><br><br>
                    </form>
            </div>
        </div>
    </div>
@endsection
