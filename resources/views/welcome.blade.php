<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>UAMbnb</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>


        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        {{-- <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> --}}
    </head>

    <body class="antialiased">
        <div style="height: 1980ox"></div>

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light" style="background-color: #af1818;">
                <div class="container section">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/images/UAMbnbLogo.png" {{-- EDITAR --}}
                        style="width:40px; border-radious:30%;" />
                        <b style="color: white">UAMbnb</b>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">

                            </li>

                            @guest {{-- Si está autenticado --}}

                            @else

                                <li><a class="dropdown-item" href="/properties"> Ver inmuebles</a></li>
                                <li><a class="dropdown-item" href="/home"> Ver mis inmuebles</a></li>
                                <li><a class="dropdown-item" href="/properties/create">Crear inmueble</a></li>

                            @endguest


                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <a class="nav-link active" href="{{ route('home') }}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                    </li>


                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            <i class="fa-solid fa-user"></i>
                                            {{ __('Perfil') }}
                                        </a>

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-door-open"></i>
                                            {{ __('Cerrar sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>

            <div class="container">
                <h1 class="text-center"><strong> ¡Bienvenido a UAM BNB! </strong></h1>
                <p class="text-muted text-center">El mejor lugar para estar en la casa de tus sueños de vacaciones</p>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" {{-- style="width: 800px" --}}>
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                    <div class="carousel-inner" style="height: 450px">
                        <div class="carousel-item active">
                            <img src="/images/casaCampo.jpg" class="d-block w-100" alt="fot1" style="height: 450px">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/edificio.jpg" class="d-block w-100" alt="fot2" style="height: 450px">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/Mansion.jpg" class="d-block w-100" alt="fot3" style="height: 450px">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/images/CasaSF.jpg" class="d-block w-100" alt="fot3" style="height: 450px">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                    <br>
                    <br>
                    <br>
                </div>

            </div>

            <div class="container">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15896.807228198284!2d-75.49323974999999!3d5.07101465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1650999532860!5m2!1ses!2sco" width="1118" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class="card-header">
                    <h4 class="text-center">En <strong>UAMbnb</strong> podrás encontrar una opción diferente para hospedarte en residencias de usuarios ¡como tú!.
                        <br> Estos espacios estan hechos para recibirte de la mejor manera</h4>
                        <p class="text-muted">Empieza a planear mas viajes desde hoy.
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">¿Buscas hospedaje?</h5>
                          <p class="card-text">Mira el mejor apartamento para ti aquí</p>
                          <a href="/properties" class="btn btn-primary">Ver apartamentos</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Arrendienda tu choza</h5>
                          <p class="card-text">Registrate aquí y empiza a generar ingresos con tus inmuebles.</p>
                          <a href="/properties/create" class="btn btn-primary">Arrendar</a>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
            <br><br><br>
            <br><br><br>
            @include('layouts.subview-footer')

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    </body>
</html>
