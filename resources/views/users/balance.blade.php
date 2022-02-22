@extends('layouts.app')

@section('content')
    <div class="container w-sm-100" id="balance" balances="{{$balances}}" apps="{{$apps}}">
    </div>
@endsection
