<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <!--
        <ul>
            <li><a href="<?= route('welcome');?>">Home</a></li> Esto es de forma PHP (no recomendada en Laravel)
            <li><a href="<?= route('contact');?>">Contacto</a></li>
            <li><a href="<?= route('blog');?>">Blog</a></li>
            <li><a href="<?= route('about');?>">About</a></li>
        </ul>
        <h1>Welcome</h1>
        <ul>
            <li><a href="{{ route('welcome') }}">Home</a></li> <!--Esto es de forma blade, el motor de vistas de Laravel (recomendada en Laravel
            <li><a href="{{ route('contact') }}">Contacto</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
        </ul>
        -->
        @include('partials.navigation') <!--Inyectamos la vista navigation que está dentro de la carpeta 'partials'-->
        <h1>Welcome</h1>
    </body>
</html>
