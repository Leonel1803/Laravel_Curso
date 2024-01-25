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
@vite(['resources/css/app.css', 'resources/js/app.js']) <!--Hacemos referencia con Vite a nuestros archivos css o js que deseemos-->

<div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">WebApp</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>                    
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>    
              <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div> <!--Snipet de bootstrap-->

<!--Esto es un elemento de PHP blade que nos servirá para tener una sola
vista como navegador de páginas y poder insertar esta vista en las demás
-->
