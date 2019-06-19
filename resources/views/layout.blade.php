<!DOCTYPE html>
<html lang="es">
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
    <header>
        <div class="row align-items-center justify-content-center p-2">
            <div class="col-4 text-center">
                <img src="img/logo.png" alt="" class="logo img-fluid">
            </div>
            <div class="col-8">
                <h1 class="display-4 text-dark font-weight-bold">Empresa de animales</h1>
            </div>
        </div>
    </header>
    <nav class="menu">
        @yield('menu_superior')
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="central p-3">
                    @yield('contenido_central')
                </div>
            </div>
            <div class="col-4">
                <div class="derecha p-3">
                    @yield('contenido_derecha')
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <h5 class="font-weight-bold mt-3 text-center"><a href="https://josandreu.com" target="_blank">JosAndreu 2019©</a></h5>
        </div>
    </footer>
</body>
</html>
