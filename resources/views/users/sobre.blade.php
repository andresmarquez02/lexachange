@extends('layouts.init')
@section('content')
<div class="container w-sm-100 py-4 px-20 row">
    <div class="col-7 mb-5">
        <h3 class="h3 font-weight-bold">Empezar</h3>
        <p>Lexachange es una aplicacion y cartera para cangear lexas que es nuestra propia moneda virtual, Con lexa puedes hacer que tu negocio no se base en monedas de paises y utlizar nuestras moneda, si quieres retirar tu dinero lexa te transferira a tu cuenta para que puedas usar tu dinero; lexachange tambien facilita la realizacion de transferencias, con tan solo copiar 8 lineas de codigo y 2 lienas en las importacion de los estilos y scripts ya estara funcionando lexachange en tu aplicación. Y por ultimo lexachange ha llegado para hacer respaldos de tu dinero y ajilizar el desarrollo de tu app con nuestra rapida implementacion de api.</p>
    </div>
    <div class="col-5 d-flex align-items-center">
        <img src="{{asset("img/undraw_online_resume_re_ru7s.svg")}}" class="w-100" srcset="">
    </div>
    <div class="col-6 mb-5 d-flex align-items-center">
        <img src="{{asset("img/undraw_online_ad_re_ol62.svg")}}" class="w-100" srcset="">
    </div>
    <div class="mb-5 col-6">
        <h3 class="h3">Obtener IP de transferencia</h3>
        <p>Para obtener una IP de transferencias tans solo debes entrar a tu perfil de lexachange, ir a la seccion. Mi perfil. Y alli pulsar el boton de obtener ip de transferencias, una vez que lo obtienes tu codigo de transferencia no podras solicitar otro.</p>
        @if (! auth()->user())
            <h3 class="h3">Crear cuenta.</h3>
            <p>Puedes crear una cuenta llendo a <a href="{{url("register")}}">registro de usuarios</a>, rellena todos los campos valida tu email y estaras listo para usar lexachange. ¡EN LEXACHANGE EL REGISTRO ES RAPIDO Y SENCILLO!</p>
        @endif
    </div>
    <div class="mb-5 col-8">
        <h3 class="h3">Crear aplicaciones</h3>
        <p>Para crear aplicaciones en Lexachange solo tienes que entrar a tu perfil, ir a la seccion. Mis Apps. Y estando ahi, clikear el boton crear app. Rellena todos los campos y crea tu aplicación.</p>
    </div>
    <div class="col-4 mb-5 d-flex align-items-center">
        <img src="{{asset("img/undraw_web_devices_ad58.svg")}}" class="w-100" srcset="">
    </div>
    <div class="container w-sm-100 d-flex justify-content-center">
        <div class="w-75 row">
            <div class="col-12 mb-4">
                <h2 class="text-center font-weight-bold">Consulta con nosotros</h2>
            </div>
            <div class="col-6 mb-4">
                <input type="text" class="form-control p-4" name="" placeholder="Nombres">
            </div>
            <div class="col-6 mb-4">
                <input type="text" class="form-control p-4" name="" placeholder="Correo">
            </div>
            <div class="col-6 mb-4">
                <input type="text" class="form-control p-4" name="" placeholder="Telefono">
            </div>
            <div class="col-6 mb-4">
                <textarea name="" class="form-control p-3" placeholder="Expon tu caso" cols="30" rows="1"></textarea>
            </div>
            <div class="col-12 d-flex justify-content-center mt-4">
                <button type="button" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </div>
</div>
@endsection
