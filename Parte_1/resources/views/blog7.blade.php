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

        @if(session('status')) <!--Si es que el mensaje existe, se muestra-->
            <div class="status">
                {{ session('status') }} <!--Mostrar aviso de post creado-->
            </div>
        @endif

        <h1>Blog</h1>
        <a href="{{ route('post.create') }} ">Crear nuevo post</a>
        <br>
        @foreach($posts as $post)
            <div style="display: flex; align-items: baseline">
                <h4>{{ $post->title }}</h4>
                &nbsp;
                <a href="{{ route('post.edit', $post) }}">Editar Post</a>
            </div>
            <a href="{{ route('post.show', $post->id) }}">{{ $post->body }}</a>
        @endforeach
    </body>
</html>
