@if (session()->has("exito"))
    <script>alertify.success("{{session()->get('exito')}}",40);</script>
@endif
@if (session()->has("error"))
    <script>alertify.error("{{session()->get('error')}}",40);</script>
@endif
@if ($errors->any())
    @foreach($errors->all() as $error)
        <script>alertify.warning("{{$error}}",40);</script>
    @endforeach
@endif
