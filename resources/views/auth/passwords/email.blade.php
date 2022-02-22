@extends('layouts.init')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2 class="text-center font-weight-bolder">Recuperar Contraseña</h2></div>
                <div class="card-body row m-0">
                    <div class="col-md-6 px-4 d-none d-md-flex">
                        <div class="pt-md-5">
                            <img src="{{asset("img/undraw_Bitcoin_P2P_re_1xqa.svg")}}" alt="" class="w-100 mt-md-2" srcset="">
                        </div>
                    </div>
                   <div class="col-md-6">
                    <form method="POST" action="{{ url("reset") }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">Correo</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-warning">
                                    Enviar
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-12 d-flex justify-content-end">
                                <a href="{{url("register")}}" class="mr-2">Registrate</a>
                                <a href="{{url("login")}}">Iniciar Sesion</a>
                            </div>
                        </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
