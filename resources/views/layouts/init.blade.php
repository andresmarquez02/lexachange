<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('lexa.png')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Lexachange') }}</title>
    <script src="{{ asset('alertify/alertify.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{asset('alertify/css/alertify.css')}}">

</head>
<body style="overflow-x: hidden" class="bg-white">
    <div class="wrapper" style="overflow-x: hidden">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item {{request()->path() == "/" ? "active" : ""}}">
                        <a class="nav-link"  href="{{url("/")}}" >
                            <p>Inicio</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item mt-3 {{request()->path() == "sobre" ? "active" : ""}}">
                        <a class="nav-link"  href="{{url("sobre")}}" >
                            <p>Sobre</p>
                        </a>
                    </li> --}}
                    <li class="nav-item mt-3 {{request()->path() == "documentacion" ? "active" : ""}}">
                        <a class="nav-link"  href="{{url("documentacion")}}" >
                            <p>Documentacion</p>
                        </a>
                    </li>
                    <li class="nav-item mt-3 {{request()->path() == "login" ? "active" : ""}}">
                        <a class="nav-link"  href="{{url("login")}}" >
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item mt-3 {{request()->path() == "register" ? "active" : ""}}">
                        <a class="nav-link"  href="{{url("register")}}" >
                            <p>Registro</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel bg-white">
            <nav class="navbar p-4"  style="max-height: 96px" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand text-capitalize p-0" href="{{url("/")}}">Lexachange</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
            </nav>
            <div class="pt-4 text-dark">
                @yield('content')
                @include('layouts.messages')
            </div>
        </div>
    </div>
</body>
</html>
