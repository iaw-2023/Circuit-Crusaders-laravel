<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('base.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <title>MotoMami</title>
    <!-- Podríamos poner barra de navegación-->
  </head>
    <body class="font-sans antialiased">
      <div class="container-fluid" style="background:#ffb727">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="motos">
                  <img style="width: 50%;" src="https://i.ibb.co/W2Pmn2H/logomotomami.png" alt="Bootstrap" >
                </a>
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="motos">Motos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="estilos">Estilos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cliente">Cliente</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pedidos">Pedidos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="reportes">Reportes</a>
                  </li>
                  <li class="nav-item min-h-screen bg-gray-100 dark:bg-gray-900">
                    @include('layouts.navigation')
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>