@include('sweetalert::alert')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert/sweetalert.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fruit') }}</title>
    @if (Route::currentRouteName() === 'welcome' )
    <link rel="stylesheet" href="{{ asset('user/css/home.css') }}">
@endif

@if (Route::currentRouteName() == 'about' )
<link rel="stylesheet" href="{{asset('user/css/about.css')}}">

    <link rel="stylesheet" href="{{ asset('user/css/about2.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/about3.css') }}">

@endif

@if (Route::currentRouteName('login')&& (Route::currentRouteName('register')))
<link rel="stylesheet" href="{{ asset('user/css/Signin.css') }}">

@endif
@if (Route::currentRouteName() === 'Article')
<link rel="stylesheet" href="{{ asset('user/css/article.css') }}">
@endif
@if (Route::currentRouteName() === 'Store')
<link rel="stylesheet" href="{{ asset('user/css/store.css') }}">
@endif
@if (Route::currentRouteName() === 'Delivery')
<link rel="stylesheet" href="{{ asset('user/css/Delivery.css') }}">
@endif



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('user/css/layout.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" id="Logo" href="/" id="Logo">
                    <img src="{{asset('user/main-img/Logo.png')}}" alt="...">

                </a>
                
                <div class="collapse navbar-collapse justify-content-center" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Store') ? 'active' : '' }}" href="{{route('Store')}}">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Article') ? 'active' : '' }}" href="{{route('Article')}}">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('Delivery') ? 'active' : '' }}" href="{{route('Delivery')}}">Delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                    </ul>
                    <span class="navbar-text" id="LoginSpan">
                        @guest
                            @if (Route::has('login'))
                                <a style="text-decoration:none;" href="{{ route('login') }}"> <button
                                        class="loginBtn">{{ __('Login') }}</button> </a>
                            @endif

                            @if (Route::has('register'))
                                <a style="text-decoration:none;" href="{{ route('register') }}"> <button
                                        class="loginBtn">{{ __('Register') }}</button> </a>
                            @endif
                        @else
                            <li class="nav-item dropdown list-unstyled" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle loginBtn" href="#" 
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu bg-none border-0" id="cutsome-drop-douwn" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item loginBtn" href="{{ route('logout') }}"
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
                    </span>

                    </span>
                </div>
            </div>
        </nav>

        {{-- //// --}}
        <nav class="navbar d-none navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Fruit') }}
                </a>
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 overflow-hidden">

            @yield('content')
        </main>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->

            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="container-fluid pt-4">
                <div class="container-fluid text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3 text-center">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 d-flex flex-column justify-content-center align-items-center " style="max-height: 250px;
                    }">
                            <!-- Content -->
                            <div class="mb-1"><img src="{{asset('user/main-img/Logo.png')}}" alt="..." height="200">
                            </div>


                            <div class="mb-1">    <p class="custom-p">
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                            </div>
                            <div class="mb-1">  <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3">Social </i>
                                <i class="fas fa-gem me-3">Social </i>

                                <i class="fas fa-gem me-3">Social </i>

                            </h6>
                            </div>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4  pt-5">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 custom-title">
                                About Us
                            </h6>
                            <p>
                                <a href="#!" class="custom-p">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="custom-p">React</a>
                            </p>
                            <p>
                                <a href="#!" class="custom-p">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="custom-p">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4  pt-5">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 custom-title">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="custom-p">Home</a>
                            </p>
                            <p>
                                <a href="#!" class="custom-p">Store</a>
                            </p>
                            <p>
                                <a href="#!" class="custom-p">Delivery</a>
                            </p>
                            <p>
                                <a href="#!" class="custom-p">Article</a>
                            </p>
                            <p>
                                <a href="#!" class="custom-p">About</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 pt-5">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 custom-title">Contact</h6>
                            <p class="custom-p"><i class="fas fa-home me-3 "></i> New York, NY 10012, US</p>
                            <p class="custom-p">
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p class="custom-p"><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p class="custom-p"><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            {{--  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="custom-p fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div> --}}
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>

</html>
<script src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
