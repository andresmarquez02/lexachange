@extends('layouts.init')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2 class="text-center font-weight-bolder">Registro</h2></div>
                <div class="card-body py-4">
                    <div class="row m-0">
                        <div class="col-md-6 px-4 d-none d-md-flex">
                            <div class="pt-md-5">
                                <img src="{{asset("img/undraw_Bitcoin_P2P_re_1xqa.svg")}}" alt="" class="w-100 mt-md-2" srcset="">
                            </div>
                        </div>
                        <div class="col-md-6 px-4 d-flex">
                            <form method="POST" action="{{ url('register') }}">
                                @csrf
                                <div class="row m-0">
                                    <div class="col-12"></div>
                                    <div class="form-group col-12">
                                        <input id="name" type="text" class="form-control p-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombres">
                                    </div>
                                    <div class="form-group col-12">
                                        <input id="email" type="email" class="form-control p-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico">
                                    </div>

                                    <div class="form-group col-12">
                                        <input id="password" type="password" class="form-control p-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                            placeholder="Contraseña">
                                    </div>
                                    <div class="form-group col-12">
                                        <input id="password-confirm" type="password" class="form-control p-4" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma tu contraseña">
                                    </div>
                                    <div class="col-12 mb-md-0 mb-3 d-flex justify-content-center">
                                        <div class="">
                                            <button type="submit" class="btn btn-warning">
                                                Entrar
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <div class="">
                                            <a href="{{url("login")}}">Iniciar Sesion</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
