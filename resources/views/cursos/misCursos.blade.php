@extends('layouts.app')

@section('title')
Mis Cursos
@stop

@section('content')
<div class="container">
<h1> Mis cursos </h1>
<table class="table table-responsive table-hover">
    <thead>
    <th>Título</th>
    <th>Descripción</th>
    <th>Autor</th>
    <th>Año</th>
    <th>Número de preguntas</th>
    </thead>
@foreach ($cursos as $curso)
<tr>
    <td>
        {{$curso->titulo}}
    </td>
    <td>
        {{$curso->descripcion}}
    </td>
    <td>
        {{$curso->autor}}
    </td>
    <td>
        {{$curso->anio}}
    </td>
    <td>
        {{$curso->num_preguntas}}
    </td>
    <td>
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
    </td>
</tr>
@endforeach
</table>
</div>
@endsection