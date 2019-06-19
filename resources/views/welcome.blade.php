<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <h1>Welcome!!!</h1>
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="/principal">Principal</a>
                    <a href="/noticias">Noticias</a>
                    <a href="/articulos">Artículos</a>
                    <a href="/contacta">Contacta</a>
                    <a href="/about">About</a>
                </div>
            </div>
        </div>
    </body>
</html>
