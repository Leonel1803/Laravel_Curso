<!--Esta es nuestra plantilla de HTML definida por componentes-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? '' }}</title> <!--El signo de interrogación da cabida a que la variable no tenga que estar definida desde que se declara-->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">

        <x-navigation></x-navigation>

        <pre>{{ $sum }}</pre>
        <pre>{{ $sum2 }}</pre>

        {{ $slot }}
    </body>
</html>