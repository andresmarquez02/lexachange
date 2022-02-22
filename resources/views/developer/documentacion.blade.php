
@extends(auth()->user() ? 'layouts.app' : 'layouts.init')
@section('content')
    <div class="py-4 row m-0">
        <div class="col-md-7 col-sm-12 mb-5">
            <h3 class="h3 font-weight-bold">Empezar</h3>
            <p>Lexachange es una aplicacion y cartera para cangear lexas que es nuestra propia moneda virtual, Con lexa puedes hacer que tu negocio no se base en monedas de paises y utlizar nuestras moneda, si quieres retirar tu dinero lexa te transferira a tu cuenta para que puedas usar tu dinero; lexachange tambien facilita la realizacion de transferencias, con tan solo copiar 8 lineas de codigo y 2 lienas en las importacion de los estilos y scripts ya estara funcionando lexachange en tu aplicación. Y por ultimo lexachange ha llegado para hacer respaldos de tu dinero y ajilizar el desarrollo de tu app con nuestra rapida implementacion de api.</p>
        </div>
        <div class="col-md-5 col-sm-12 d-none d-md-flex align-items-center">
            <img src="{{asset("img/undraw_online_resume_re_ru7s.svg")}}" class="w-100" srcset="">
        </div>
        <div class="col-md-6 col-sm-12 mb-5 d-flex align-items-center">
            <img src="{{asset("img/undraw_online_ad_re_ol62.svg")}}" class="w-100" srcset="">
        </div>
        <div class="mb-5 col-md-6 col-sm-12">
            <h3 class="h3">Obtener IP de transferencia</h3>
            <p>Para obtener una IP de transferencias tans solo debes entrar a tu perfil de lexachange, ir a la seccion. Mi perfil. Y alli pulsar el boton de obtener ip de transferencias, una vez que lo obtienes tu codigo de transferencia no podras solicitar otro.</p>
            @if (! auth()->user())
                <h3 class="h3">Crear cuenta.</h3>
                <p>Puedes crear una cuenta llendo a <a href="{{url("register")}}">registro de usuarios</a>, rellena todos los campos valida tu email y estaras listo para usar lexachange. ¡EN LEXACHANGE EL REGISTRO ES RAPIDO Y SENCILLO!</p>
            @endif
        </div>
        <div class="mb-5 col-md-8 col-sm-12">
            <h3 class="h3">Crear aplicaciones</h3>
            <p>Para crear aplicaciones en Lexachange solo tienes que entrar a tu perfil, ir a la seccion. Mis Apps. Y estando ahi, clikear el boton crear app. Rellena todos los campos y crea tu aplicación.</p>
        </div>
        <div class="col-md-4 mb-5 d-flex align-items-center">
            <img src="{{asset("img/undraw_web_devices_ad58.svg")}}" class="w-100" srcset="">
        </div>
        <div class="mb-5 col-md-12 row m-0">
            <div class="col-12">
                <h3 class="h3">Modos de la aplicacion</h3>
                <p>Cuando estas creando tu aplicacion podras ver que en el formulario te piden el modo de tu app</p>
            </div>
            <div class="col-md-6">
                <h3 class="h5">Modo produccion</h3>
                <p>Si activas el modo de produccion las transferencias se ejecutaran y podras subir tu app a un hosting y ponerla al publico para que te genere ganancias.</p>
            </div>
            <div class="col-md-6">
                <h3 class="h5">Modo prueba</h3>
                <p>Si esta en desarrollo tu aplicacion pues este es el modo que debes activar asi podras hacer las pruebas que tu quieras, para verificar tus transferencias.</p>
            </div>
        </div>
        <div class="col-md-4 mb-5 d-flex d-md-none align-items-center">
            <img src="{{asset("img/undraw_my_answer_iw6k.svg")}}" class="w-100" srcset="">
        </div>
        <div class="mb-5 col-md-8">
            <h3 class="h3">Como integrar Lexanchange en Laravel o php</h3>
            <p>La integracion de lexachange es muy sencilla. Tan solo debes copiar estas lineas de codigo y pegarlas en tu codigo, completar los datos que se piden y ejecutar tu aplicacion.
            <br>
            <div class="highlight">
                <pre class="chroma bg-light p-3">
                    <code class="language-html d-flex flex-column" data-lang="html">
                        <span>&lt;!Doctype html&gt;</span>
                        <span>&lt;html lang="en"&gt;</span>
                            <span class="pl-3">&lt;head&gt;</span>
                                <span class="pl-4">&lt;meta charset="UTF-8"&gt;</span>
                                <span class="pl-4">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</span>
                                <span class="pl-4">&lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;</span>
                                <span class="pl-4">&lt;title&gt; Document &lt;/title&gt;</span>
                                <span><&lt;link rel="stylesheet" href="https://lexachange.herokuapp.com/css/Lexachange.css"&gt;</span>
                            <span class="pl-3">&lt;/head&gt;</span>
                            <span class="pl-3">&lt;body&gt;</span>
                                <span class="pl-4">&lt;div class="lxlaunch23"&gt;</span>
                                    <span class="pl-5">&lt;div&gt; Api_Key de la aplicación &lt;/div&gt;</span>
                                    <span class="pl-5">&lt;div&gt; Ip de transferencia personal &lt;/div&gt;</span>
                                    <span class="pl-5">&lt;div&gt; Monto a cobrar &lt;/div&gt;</span>
                                    <span class="pl-5">&lt;a href="./" id="lxR"&gt; Si quieres redirigir despues de hacer la transferencia &lt;/a&gt;</span>
                                    <span class="pl-5">&lt;button type="button"&gt; Launch &lt;/button&gt;</span>
                                <span class="pl-4">&lt;/div&gt;</span>
                                <span class="pl-4">&lt;script src="https://lexachange.herokuapp.com/js/Lexachange.js"&gt;&lt;/script&gt;</span>
                                <span class="pl-3">&lt;/body&gt;</span>
                        <span>&lt;/html&gt;</span>
                    </code>
                </pre>
            </div>
            </p>
        </div>
        <div class="col-md-4 mb-5 d-none d-md-flex align-items-center">
            <img src="{{asset("img/undraw_my_answer_iw6k.svg")}}" class="w-100" srcset="">
        </div>
        <div class="col-md-5 mb-5 d-flex align-items-center">
            <img src="{{asset("img/undraw_Operating_system_re_iqsc.svg")}}"  class="w-100" srcset="">
        </div>
        <div class="mb-5 col-md-7">
            <h3 class="h3">Verificacion de pagos</h3>
            <p>Para verificar que los pagos se hayan realizados correctamente ve a la seccion de transferencias en tu perfil de lexachange y verifica tus transferencias</p>
        </div>
    </div>
@endsection
