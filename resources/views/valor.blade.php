@extends('layout')

@section('contenido_central')
    <div class="text-dark">
        <h5>Valor generado automáticamente: <span class="text-white">{{$valor}}</span></h5>
        <h5>Valor que tiene la variable nombre: <span class="text-white">{{$nombre}}</span></h5>
    </div>
@stop
