@extends('layouts.app')

@section('content')
<div class="container w-sm-100">
    <div class="grid grid-cols-1 justify-items-center">
        {{-- <div class="d-flex align-items-center" style="height:80vh">
            <div class="position-relative">
                <div class="position-absolute" style="width: 70%;top: -34%;left: -33%;z-index:-1020;">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                       <path fill="#FD906B" d="M29.2,-42.7C41.6,-31.2,58.1,-27.7,62.6,-19.1C67.1,-10.5,59.6,3.2,55,18C50.3,32.7,48.5,48.5,39.8,59.8C31.1,71.2,15.6,78.1,-1.1,79.6C-17.7,81,-35.4,77.1,-42.4,65.2C-49.5,53.3,-45.8,33.5,-47.3,17.9C-48.9,2.4,-55.6,-8.9,-57.5,-23.6C-59.5,-38.2,-56.7,-56.3,-46.4,-68.4C-36,-80.6,-18,-87,-4.8,-80.4C8.4,-73.8,16.8,-54.2,29.2,-42.7Z" transform="translate(100 100)" />
                   </svg>
                </div>
            </div>
        </div> --}}
        <div class="d-flex justify-center">
            <img src="{{asset("img/undraw_static_assets_rpm6.svg")}}" class="w-100" style="height:70vh" alt="" srcset="">
        </div>
        <div class="h2 font-weight-bold">Lexachange, Porque el Futuro es Ahora</div>
    </div>
</div>
@endsection
