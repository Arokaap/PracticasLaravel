<h1>{{$titulo}}</h1>
<p>(Accion index del controlador PeliculasController)</p>

@if (isset($pagina))
    <h3>La página es: {{$pagina}}</h3>
@endif

<a href="{{ url('/detalle') }}">Ir al detalle</a>
