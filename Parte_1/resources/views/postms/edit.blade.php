<x-layout :title="$post->title" :meta-descritpion="$post->body">
    <h1>Formulario de edición</h1>
    <form action="{{ route('post.update', $post) }}" method="POST">
        @csrf @method('PATCH')<!--Esta directiva sirve para solucionar el error 419, esto es debido al CSRF y Laravel nos protege de problemas relacionados con esto-->
        @include('postms.form-fields')<!--Incluimos la plantilla del formulario pre-hecho-->
        <button type="submit">Enviar</button>
    </form>
    <br>

    <a href="{{ route('blog7') }}">Regresar</a>
</x-layout>
