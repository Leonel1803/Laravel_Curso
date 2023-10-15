<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="antialiased">
        @include('partials.navigation') <!--Inyectamos la vista navigation que está dentro de la carpeta 'partials'-->
        <h1>Blog</h1>
        @dump($posts)
        @foreach($posts as $post)
            <h4>{{ $post['title'] }}</h4>
        @endforeach
    </body>
</html>
