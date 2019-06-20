@extends('layout')

@section('contenido_central')
    <div class="text-dark">
        <h4>Listado de {{count($alumnos)}} alumnos</h4>
        @foreach($alumnos as $nombre)
            <p class="font-weight-bold">{{$nombre}}</p>
        @endforeach
    </div>
@stop
