<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">


                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('registerForm'))
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                            @endif
                            @if (Route::has('loginForm'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('loginForm') }}">Iniciar seción</a>
                                </li>
                            @endif
                            @if (Route::has('registerForm'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('registerForm') }}">Register</a>
                                </li>
                            @endif
                        @else
                            @if (Route::has('register'))
                                <div class="ms-auto">
                                    <a class="navbar-brand" href="{{ url('/home') }}">
                                        {{ config('app.name', 'Laravel') }}
                                    </a>
                                </div>
                            @endif
                            @if (Route::has('register'))
                                <div class="ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('carrito') }}">Carrito</a>
                                    </li>
                                </div>
                            @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @role('admin')
                                    <a class="dropdown-item" href="{{ route('show.user.table') }}">
                                        Usuarios
                                    </a>
                                    <a class="dropdown-item" href="{{ route('show.product.table') }}">
                                        Productos
                                    </a>
                                    @endrole
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
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

        <main class="py-4" id="app">
            @yield('content')
        </main>
    </div>
</body>

</html>
