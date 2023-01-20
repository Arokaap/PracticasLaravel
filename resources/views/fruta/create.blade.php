@if (isset($fruta) && is_object($fruta))
    <h1>Editar fruta</h1>
@else
    <h1>Crear una fruta</h1>
@endif

<form action="{{ isset($fruta) ? url('/frutas/update') : url('/frutas/save') }}" method="POST">
{{ csrf_field() }}

@if (isset($fruta) && is_object($fruta))
    <input type="hidden" name="id" value="{{ $fruta->id}}">
@endif

<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{ $fruta->nombre ?? '' }}"><br>

<label for="descripcion">Descripcion</label>
<input type="text" name="descripcion" value="{{ $fruta->descripcion ?? '' }}"><br>

<label for="precio">Precio</label>
<input type="number" name="precio" value="{{ $fruta->precio ?? '' }}"><br>

<input type="submit" value="Guardar">
<br>
<h3><a href="{{ url('/frutas/index') }}">Volver</a></h3>

</form>