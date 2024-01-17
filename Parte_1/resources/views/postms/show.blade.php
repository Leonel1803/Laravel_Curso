<x-layout :title="$post->title" :meta-descritpion="$post->body">
    <h1>Post title: {{$post->title}}</h1>
    <p>Post body: {{$post->body}}</p>
    <br>
    <h4>Fecha Creación: {{$post->created_at}}</h4>
    <h4>Fecha Modificación: {{$post->updated_at}}</h4>

    <a href="{{ route('blog7') }}">Regresar</a>
</x-layout>
