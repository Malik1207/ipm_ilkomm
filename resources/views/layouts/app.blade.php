<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav id="main-navbar" class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <span class="d-none">ILKOOM</span>
                    <img src="{{ asset('img/ilkoom_logo.png') }}" alt="ilkom" class="main-logo d-none d-md-inline" />
                    <img src="{{ asset('img/ilkoom_logo.png') }}" alt="ilkom" class="small-logo d-inline d-md-none" />
                    {{ config('') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link p-4 active " href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-4" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-4" href="#">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-4" href="#">Gallery</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link p-4" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link p-4" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-0">
            @yield('content')
        </main>

        <footer id="main-footer" class="text-white bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center text-md-start">
                        <a href="index.html">
                            <img src="{{ asset('img/ilkoom_logo.png') }}" class="small-logo" alt="ilkoom logo">
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <h5>Community</h5>

                        <ul class="list-unstyled">
                            <li><a href="#">Activity</a></li>
                            <li><a href="#">Members</a></li>
                            <li><a href="#">Group</a></li>
                            <li><a href="#">Forums</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-center">
                        <h5>Our Service</h5>

                        <ul class="list-unstyled">
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Help/Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-center text-md-start">
                        <h5>Contact Us</h5>

                        <div class="text-nowrap">
                            <i class="fas fa-envelope fa-fw me-2"></i>
                            abdmalik1207@gmail.com
                        </div>
                        <div class="text-nowrap">
                            <i class="fas fa-phone fa-fw me-2"></i>
                            (021) 1234567
                        </div>
                        <div class="text-nowrap">
                            <i class="fas fa-globe fa-fw me-2"></i>
                            www.ilkoom.com
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mt-0">
                    <div class="col-md-3 me-md-auto text-center text-md-start">
                        <small>&copy; ILKOOM {{ date("Y") }}</small>
                    </div>
                    <div class="col-md-3 text-center text-md-start">
                        <a href="" class="text-white text-decoration-none me-2">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="" class="text-white text-decoration-none me-2">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="" class="text-white text-decoration-none me-2">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="" class="text-white text-decoration-none me-2">
                            <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                        <a href="" class="text-white text-decoration-none me-2">
                            <i class="fab fa-github fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
