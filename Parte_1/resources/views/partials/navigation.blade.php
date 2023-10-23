<ul>
    <li><a href="{{ route('welcome') }}">Home</a></li> <!--Esto es de forma blade, el motor de vistas de Laravel (recomendada en Laravel-->
    <li><a href="{{ route('contact') }}">Contacto</a></li>
    <li><a href="{{ route('blog') }}">Blog</a></li>
    <li><a href="{{ route('blog2') }}">Blog2</a></li>
    <li><a href="{{ route('blog3') }}">Blog3</a></li>
    <li><a href="{{ route('blog4') }}">Blog4</a></li>
    <li><a href="{{ route('blog5') }}">Blog5</a></li>
    <li><a href="{{ route('blog6') }}">Blog6</a></li>
    <li><a href="{{ route('blog7') }}">Blog7</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('welcome2') }}">Home (usando plantillas herencia)</a></li>
    <li><a href="{{ route('welcome3') }}">Home (usando plantillas componentes)</a></li>
</ul>

<!--Esto es un elemento de PHP blade que nos servirá para tener una sola
vista como navegador de páginas y poder insertar esta vista en las demás
-->
