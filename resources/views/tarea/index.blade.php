@extends('tema.app')
@section('title',"Listado de Tareas")
@section('contenido')
<h3>Listado de Tareas</h3>
<table class="table table-stripped table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Finalizada</th>
            <th>Fecha Limite</th>
            <th>Urgencia</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tareas as $tarea)
        <tr>
            <td>{{$tarea->nombre}}</td>
            <td>{{$tarea->estafinalizada()}}</td>
            <td>{{$tarea->fecha_limite->format('H:i,d/m/y')}}</td>
            <td>{{$tarea->urgencia()}}</td>
            <td>{{$tarea->descripcion}}</td>
            <td></td>

        </tr>

        @endforeach
    </tbody>
</table>
@endsection
