<ul>
    <li><a href="{{ route('welcome') }}">Home</a></li> <!--Esto es de forma blade, el motor de vistas de Laravel (recomendada en Laravel-->
    <li><a href="{{ route('contact') }}">Contacto</a></li>
    <li><a href="{{ route('blog') }}">Blog</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
</ul>  

<!--Esto es un elemento de PHP blade que nos servirá para tener una sola 
vista como navegador de páginas y poder insertar esta vista en las demás
-->