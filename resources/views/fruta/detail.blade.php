<?php use App\Http\Controllers\FrutaController;?>

<h1>{{ $fruta->nombre}}</h1>
<p>{{$fruta->descripcion}}</p>

<a href="{{ action([FrutaController::class,'delete'], ['id' => $fruta->id]) }}">Eliminar</a>
<a href="{{ action([FrutaController::class,'edit'], ['id' => $fruta->id]) }}">Actualizar</a>