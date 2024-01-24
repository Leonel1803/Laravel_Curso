<x-layout>
    <h1>Crear un post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf <!--Esta directiva sirve para solucionar el error 419, esto es debido al CSRF y Laravel nos protege de problemas relacionados con esto-->
        @include('postms.form-fields') <!--Incluimos la plantilla ya hecha-->
        <button type="submit">Enviar</button>
    </form>
    <br>

    <a href="{{ route('blog7') }}">Regresar</a>
</x-layout>
