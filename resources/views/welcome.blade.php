<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LVideo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito';
                background-image: url("{{asset('img/home.gif')}}");
                background-repeat: no-repeat;
                background-size: 60%;
                background-position-x: center;
                background-color: #243046;
            }
            .txt{
                font-size: 2vw;
                color: white;
            }
        </style>
    </head>
    <body class="container-fluid d-flex align-items-center justify-content-center">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline txt">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline txt">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline txt">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
