@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="container w-sm-100">
    <div class="grid grid-cols-1 justify-items-center">
        <div class="card w-100">
            <div class="card-body bg-white">
                <div class="d-flex justify-content-end">
                    <a href="./transferir" class="btn btn-warning">Trasferir</a>
                </div>
                <div id="transferencias" transferncias="{{$transferencias}}" usuario="{{$user}}">
                </div>
                {{$link->links()}}
            </div>
        </div>
    </div>

</div>
@endsection
