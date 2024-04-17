{{-- <ul>
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
</ul> --}} <!--Navegacioón sin TailwindCSS-->

<nav
  class="relative flex w-full flex-wrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:py-4">
  <div class="flex w-full flex-wrap items-center justify-between px-3">
    <nav class="w-full rounded-md" aria-label="breadcrumb">
      <ol class="list-reset ms-2 flex">
        <li>
          <a
            href="{{ route('welcome') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Home</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('contact') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Contacto</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('blog') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Blog</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('blog2') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Blog2</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('blog3') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Blog3</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('blog4') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Blog4</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('blog5') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Blog5</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('blog6') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Blog6</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('blog7') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Blog7</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('about') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >About</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('welcome2') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Home (usando plantillas herencia)</a
          >
        </li>
        <li>
          <span class="mx-2 text-black/60 dark:text-white/60">/</span>
        </li>
        <li>
          <a
            href="{{ route('welcome3') }}"
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80"
            >Home (usando plantillas componentes)</a
          >
        </li>
      </ol>
    </nav>
  </div>
</nav>

<link rel="stylesheet" href="css/navigation.css">
<script src="js/navigation.js"></script>
@vite([/*'resources/css/app.css' Ya no lo estamos usando ahorita*/'resources/css/app.scss', 'resources/js/app.js']) <!--Hacemos referencia con Vite a nuestros archivos css o js que deseemos-->

{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
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
  </nav> <!--Snipet de bootstrap--> --}}

  <h1 class="text-3xl font-mono underline">
    Hello world!
  </h1> <!--Snipet de Tailwind-->

<!--Esto es un elemento de PHP blade que nos servirá para tener una sola
vista como navegador de páginas y poder insertar esta vista en las demás
-->
