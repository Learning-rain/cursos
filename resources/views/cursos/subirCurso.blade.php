
@extends('layouts.app')
@section('title')
Subir Cursos
@stop

@section('header')

@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="image-responsive">
            <img class="bannerCursos" src="images/banner-subir.png">
        </div>
        <h3 class="col-lg-offset-1">Subir Cursos</h3>
        <hr class="hrCursos">
        <hr class="hrCursos1">    
        <div class="panel panel-default">
             <div class="panel-body col-md-2"></div>
            <div class="panel-body col-md-8">
                <div class="row">
                    <form action="{{url('guardaCurso')}}" method="post" enctype="multipart/form-data">
                        {!!csrf_field () !!}
                        <div class="input-group">
                            <span class="input-group-addon">Título</span>
                            <input type="text" name="titulo" required class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Descripción</span>
                            <input type="text" name="descripcion" required class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Autor</span>
                            <input type="text" name="autor" required class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Año</span>
                            <input type="number" name="anio" required class="form-control" placeholder="">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Número de Preguntas</span>
                            <input type="number" name="num_preguntas" required class="form-control" placeholder="">
                        </div>
                        <label class="control-label">Selecciónar tabla</label>
                        <input id="input-7"  name="tabla"  type="file" class="file file-loading" data-allowed-file-extensions='["csv", "xlsx"]'>
                        <label class="control-label">Selecciónar imágen</label>
                        <input id="input-7"  name="icono" type="file" class="file file-loading" data-allowed-file-extensions='["png", "jpg"]'>
                        <div><button class="btn btn-info" type="submit">Subir</button></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection
