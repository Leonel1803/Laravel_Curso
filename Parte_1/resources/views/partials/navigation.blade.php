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
<link rel="stylesheet" href="css/navigation.css">
<script src="js/navigation.js"></script>
@vite([/*'resources/css/app.css' Ya no lo estamos usando ahorita*/'resources/css/app.scss', 'resources/js/app.js']) <!--Hacemos referencia con Vite a nuestros archivos css o js que deseemos-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Blog</a></li>
            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Contact us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  </nav> <!--Snipet de bootstrap-->

<!--Esto es un elemento de PHP blade que nos servirá para tener una sola
vista como navegador de páginas y poder insertar esta vista en las demás
-->
