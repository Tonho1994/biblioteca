<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="utf-8">
    <meta name="description" content="Libros, comics, independientes y más">
    <meta name="keywords" content="gratis,libros,comics,manga, libros independientes">
    <meta name="author" content="Antonio Morales y Guillermo Zamorano">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('img/libro.png') }}" />

    <title>Mi Biblioteca Digital @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    <div  class="container-fluid"  id="app">


        <nav style=" height: 130px;"class="navbar navbar-expand-lg navbar-light bg-white shadow-lg-nav nav-down-corners">
            <div class="container ">
                <a class="navbar-brand mr-auto" href="{{ url('/') }}">
                    <img src="{{ asset('img/libro_head.png') }}" width="60" height="60" class="align-center mr-auto" alt="">
                    Mi Biblioteca Virtual
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ml-auto">
                                <a class="nav-link naveStyle " href="{{ route('login') }}">{{ __('Inicia Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item ml-auto">
                                    <a class="nav-link naveStyle " href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropleft ml-auto">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->user }} <span class="caret"></span>
                                    <img class="avatar align-center" src="{{ asset('img/avatar.svg') }}" alt="">
                                </a>


                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Cerrar Sesion') }}
                                    </a>

                                    <a class="dropdown-item " href="{{ route('home') }}">
                                                {{ __('Configuración') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark rounded-pill">
            <a class="navbar-brand " href="{{ route('home') }}">
                <img src="{{ asset('img/libro.svg') }}" width="30" height="30" class="align-center mr-auto" alt="">
                    Home
            </a>

            <div class="collapse navbar-collapse navbar-nav " id="navbarSupportedContent">
                <a class="nav-item nav-link" href="{{ url('/cientificos') }}">Científicos</a>
                <a class="nav-item nav-link" href="{{ url('/literatura') }}">Literatura</a>
                <a class="nav-item nav-link" href="{{ url('/comics') }}">Comics</a>
                <a class="nav-item nav-link" href="{{ url('/manga') }}">Manga</a>
                <a class="nav-item nav-link" href="{{ url('/independientes') }}">Independientes</a>
                <a class="nav-item nav-link" href="{{ url('/quienes_somos') }}">¿Quienes somos?</a>
            </div>
            <form class="collapse navbar-collapse form-inline" id="navbarSupportedContent">
                <input class="form-control mr-sm-2 form-inline ml-auto" type="search" placeholder="Ingresa Título | Escritor" aria-label="Search">
            </form>
            <div>
                <button class="collapse navbar-collapse btn btn-outline-light my-2 my-sm-0 rounded-pill  " type="submit" id="navbarSupportedContent">Buscar</button>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>


        <main class=" py-4">
            @yield('content')
        </main>


        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg-foot nav-up-corners">

            <a class="navbar-brand " href="https://www.facebook.com">
                <img src="{{ asset('img/facebook.svg') }}" width="30" height="30" class="align-center mr-auto" alt="">
            </a>
            <a class="navbar-brand " href="https://www.twitter.com">
                <img src="{{ asset('img/twitter.svg') }}" width="30" height="30" class="align-center mr-auto" alt="">
            </a>

            <div class="container-fluid in-line justify-content-end">
                <ul class="nav ">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Massive Dinamics Inc.</a>
                    </li>
                </ul>
            </div>

        </nav>


    <div>
</body>
</html>
