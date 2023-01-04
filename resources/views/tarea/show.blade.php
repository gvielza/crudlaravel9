@extends('tema.app')
@section('title', 'Tarea')
@section('contenido')
    <h3><i>{{$tarea->nombre}}</i></h3>
    <ul>
        <li>Finalizada: <strong>{{$tarea->estafinalizada()}}</strong></li>
        <li>Urgencia: <strong>{{$tarea->urgencia()}}</strong></li>
        <li>Fecha Límite: <strong>{{$tarea->fecha_limite->format('H:i d/m/Y')}}</strong></li>
    </ul>
    <li>Descripcion: <strong>{{$tarea->descripcion}}</strong></li>
<hr>
<div class="row">
    <div class="col-sm-12 my-2">
        <form action="{{route('tarea.destroy',$tarea)}}" method="post">
            @method('delete');
        @csrf
    <button class="btn btn-danger" type="submit">Eliminar</button>
    </form>
    </div>
</div>
@endsection
