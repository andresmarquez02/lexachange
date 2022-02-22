<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
    <link rel="stylesheet" href="{{asset('css/bootwatch.css')}}">
</head>
<body>
    @php
         $pattern ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $clave = substr(str_shuffle($pattern), 0, 10);
        App\Models\User::where('id',$id)->update(['password' => bcrypt($clave)]);
    @endphp
    <h1>Lexachange con tu recuperacion de correo</h1>
    <p><strong>Cuidado</strong> {{$name}} tu contraseña es delicada no dejes sesion abiertas a menos que sea tu equipo personal y no des esta contraseña a pesonas que quieran hacerte daño </p>
    <label>Tu nueva contraseña: {{$clave}}</label>
    <p>Despues que inicies sesion puedes cambiarla</p>
</body>
</html>
