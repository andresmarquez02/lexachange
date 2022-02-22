@extends('layouts.init')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2 class="text-center font-weight-bolder">Login</h2></div>

                <div class="card-body py-4">
                    <div class="row m-0">
                        <div class="col-md-6 d-none d-md-flex px-4">
                            <div>
                                <img src="{{asset("img/undraw_pay_online_b1hk.svg")}}" alt="" class="w-100" srcset="">
                            </div>
                        </div>
                        <div class="col-md-6 px-4 d-flex">
                            <form method="POST" action="{{ url('login') }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12"></div>
                                    <div class="col-12 mb-md-0 mb-3">
                                        <div class="">
                                            <input id="email" type="email" class="form-control p-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electronico">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-md-0 mb-3">
                                        <div class="">
                                            <input id="password" type="password" class="form-control p-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="col-12"></div>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <div class="w-75">
                                        <div class="form-check">
                                            <input class="form-check-input" style="visibility: inherit;opacity:1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label pl-0 ml-0" for="remember">
                                                Recuerdame
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row m-0">
                                    <div class="col-md-12 mb-md-0 mb-3  d-flex justify-content-center">
                                        <button type="submit" class="btn btn-warning">
                                            Entrar
                                        </button>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <div>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                Has olvidado tu contraseña?
                                            </a>
                                            @endif
                                            <a href="{{asset("register")}}" class="ml-2">Registrate</a>
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
