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
    <h1>Gracias por Registrarte en Lexachange</h1>
    <p><strong>{{$name}}</strong> Aprecio tu evaluacion a mi sistema espero que te guste. </p>
    <a href="{{asset('confirma_cuenta/'.$id)}}">Confirmar mi cuenta</a>
</body>
</html>
