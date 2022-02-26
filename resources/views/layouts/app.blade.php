<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('lexa.png')}}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Lexachange') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('alertify/alertify.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset("css/tailwind.css")}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{asset('alertify/css/alertify.css')}}">
</head>
<body style="overflow-x: hidden" class="bg-white">
    <div class="wrapper" style="overflow-x: hidden">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{url("/inicio")}}" class="simple-text">
                        Lexachange
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item d-flex d-md-none">
                        <div class="nav-link">
                            <button type="button" class="btn m-0 btn-light btn-sm" data-toggle="modal" data-target="#modeLCOmprarLExa23">Comprar Lexas</button>
                            <span class="pl-2">{{Cache::get("monto")}}lx</span>
                        </div>
                    </li>
                    <li class="nav-item {{active("inicio")}}">
                        <a class="nav-link"  href="{{url("/inicio")}}">
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="nav-item {{active("perfil")}}">
                        <a class="nav-link active"  href="{{url("/perfil")}}">
                            <p>Perfil</p>
                        </a>
                    </li>
                    <li class="nav-item {{active("mi_balance")}}">
                        <a class="nav-link" href="{{url("mi_balance")}}">
                            <p>Mi balance</p>
                        </a>
                    </li>
                    <li class="nav-item {{active("transferencias")}}">
                        <a class="nav-link" href="{{url("transferencias")}}">
                            <p>Transferencias</p>
                        </a>
                    </li>
                    <li class="nav-item {{active("transferir")}}">
                        <a class="nav-link" href="{{url("transferir")}}">
                            <p>Transferir</p>
                        </a>
                    </li>
                    <li class="nav-item {{active("retirar")}}">
                        <a class="nav-link" href="{{url('retirar')}}">
                            <p>Retirar</p>
                        </a>
                    </li>
                    <li class="nav-item {{active("mis_apps")}}">
                        <a class="nav-link" href="{{url("mis_apps")}}">
                            <p>Mis Apps</p>
                        </a>
                    </li>
                    <li class="nav-item {{active("documentacion")}}">
                        <a class="nav-link" href="{{url('documentacion')}}">
                            <p>Documentacion</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="{{url("sobre")}}">
                            <p>Sobre</p>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="{{url("estadisticas")}}">
                            <p>Estadisticas</p>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url("salir")}}">
                            <p>Salir</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel bg-white">
            <nav class="navbar navbar-expand-lg p-4 height-991" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand text-capitalize p-0" href="{{request()->url()}}">{{str_replace("/","",str_replace("_"," ",request()->path()))}} </a>
                    <span class="text-gray-300 uppercase d-none d-md-flex">
                        <button type="button" class="btn m-0 btn-light btn-sm" data-toggle="modal" data-target="#modeLCOmprarLExa23">Comprar Lexas</button>
                        @auth
                            <span class="pl-2">{{App\Models\DineroCuenta::where("id_user",auth()->user()->id)->value("monto")}}lx</span>
                        @endauth

                    </span>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                </div>
            </nav>
            <div class="py-4 text-dark">
                @yield('content')
                @include('layouts.messages')
                <div class="modal fade" id="modeLCOmprarLExa23" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Adquirir Lexas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url("pagar")}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                      <label for="">Cantidad</label>
                                      <input type="number" name="cantidad" class="form-control" placeholder="" aria-describedby="helpId">
                                      <small>Paypay esta en modo live</small>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning">Pagar por paypal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
