@include('includes.header')

{{-- Imprimir por pantalla --}}
<h1>{{$titulo}}</h1>
<h2>Listado: {{$listado[0]}}</h2>
<h2>{{date('Y')}}</h2>

{{--Esto es un comentario en BLADE--}}

{{--<?=isset($director) ? $director : "No existe";?>--}}
<br>
{{-- Mostrar si existe --}}
{{ $director ?? 'no hay' }}

@if ($titulo && count($listado) >=2)
<h1>El titulo existe y es: {{$titulo}} y el listado es mayor a 2</h1>
@elseif($titulo)
<h1>El titulo existe pero el listado no es mayor a 2</h1>
@else
<h1>La condicion no se ha cumplido</h1>
@endif


@for ($i = 1; $i <= 20; $i++)
<p>El numero es {{$i}}</p>
@endfor

<?php $contador = 1; ?>

@while ($contador < 50)
    @if ($contador % 2 == 0)
<p>Numero par: {{$contador}}</p>
    @endif

    <?php $contador++; ?>
@endwhile

<hr>

@foreach ($listado as $item)
    <p>{{$item}}</p>
@endforeach

@include('includes.footer')
