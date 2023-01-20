<?php use App\Http\Controllers\FrutaController;?>

<h1>Listado de frutas</h1>
<h3><a href="{{ url('/frutas/crear') }}">Crear fruta</a></h3>

@if (session('status'))
    <p style="background: green; color:white;">{{ session('status') }}</p>
@endif

<ul>
  @foreach ($frutas as $item)
      <li>
        <a href="{{ action([FrutaController::class,'detail'], ['id' => $item->id]) }}">{{$item->nombre}}</a>
      </li>
  @endforeach
</ul>