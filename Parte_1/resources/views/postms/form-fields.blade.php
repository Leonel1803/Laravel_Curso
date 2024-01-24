<label for="">
    Titulo
    <input type="text" name="title" value="{{ old('title', $post->title) }}"><!--old('title') es el valor de title antes de que se reseteara el formulario gracias al mensaje de rror que se puede llegar a dar-->
</label>
<br>
@error('title') <!--Verifica si hay un error relacionado con el campo title, si lo hay entonces ejecuta el html encasillado en el-->
    <small style="color: red">{{ $message }}</small><!--"message" solo esta disponible dento de error y es le que guarda el mensaje de error-->
    <br>
@enderror
<label for="">
    Body
    <textarea name="body" cols="30">{{ old('body', $post->body) }}</textarea><!--Nomralizamos agregando post->boy & title en los campos a llenar, igual que se muestra en el de editar; esto es porque queremos normalizar-->
</label>
<br>
@error('body')
    <small style="color: red">{{ $message }}</small>
    <br>
@enderror

<!--Ya que está normalizado, se utiliza esta plantilla de 'form-fielda' como plantilla para cualquier otro formulario que vayamos a necesitar--> 