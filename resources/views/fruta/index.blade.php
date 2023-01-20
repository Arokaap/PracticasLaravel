<?php use App\Http\Controllers\FrutaController;?>

<h1>Listado de frutas</h1>

<ul>
  @foreach ($frutas as $item)
      <li>
        <a href="{{ action([FrutaController::class,'detail'], ['id' => $item->id]) }}">{{$item->nombre}}</a>
        
      </li>
  @endforeach
</ul>