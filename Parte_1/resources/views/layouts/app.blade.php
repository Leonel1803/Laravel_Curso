<!--Esta es nuestra plantilla de HTML definida por herencias-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        
        @include('partials.navigation') <!--Inyectamos la vista navigation que está dentro de la carpeta 'partials'-->

        @yield('content') <!--va a ser el nombre del contenido variable, al cual nos vamos a referir desde otras vistas para poder cambiar su contenido dependiendo de lo especificado-->
    </body>
</html>