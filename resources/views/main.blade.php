<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<div class="flex-center position-ref mid-height">
    <div class="content">
        <div class="title m-b-md">
            Estamos en principal
        </div>

        <div class="links">
            <a href="/">Inicio</a>
            <a href="/noticias">Noticias</a>
            <a href="/articulos">Artículos</a>
            <a href="/contacta">Contacta</a>
            <a href="/about">About</a>
        </div>
    </div>
</div>
<div class="position-relative mt-3 container">
    <div class="text-center">
        <a class="btn btn-outline-primary mt-5 mr-1" href="/">Volver</a>
        <form action="/" method="post" class="d-inline">
            @csrf
            <input type="submit" class="btn btn-outline-primary mt-5 ml-1" value="Volver POST">
        </form>
    </div>
</div>
</body>
</html>
