<x-layout>
    <h1>Crear un post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf <!--Esta directiva sirve para solucionar el error 419, esto es debido al CSRF y Laravel nos protege de problemas relacionados con esto-->
        <label for="">
            Titulo
            <input type="text" name="title" value="{{ old('title') }}"><!--old('title') es el valor de title antes de que se reseteara el formulario gracias al mensaje de rror que se puede llegar a dar-->
        </label>
        <br>
        @error('title') <!--Verifica si hay un error relacionado con el campo title, si lo hay entonces ejecuta el html encasillado en el-->
            <small style="color: red">{{ $message }}</small><!--"message" solo esta disponible dento de error y es le que guarda el mensaje de error-->
            <br>
        @enderror
        <label for="">
            Body
            <textarea name="body" cols="30">{{ old('body') }}</textarea>
        </label>
        <br>
        @error('body')
            <small style="color: red">{{ $message }}</small>
            <br>
        @enderror
        <button type="submit">Enviar</button>
    </form>
    <br>

    <a href="{{ route('blog7') }}">Regresar</a>
</x-layout>