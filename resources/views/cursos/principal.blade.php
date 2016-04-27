@section('title')
Cursos
@stop
<!--@extends('home')-->
@section('header')
@include('cursos.header')
@endsection
@section('content')
<div class="row">
    <div class="image-responsive">
        <img class="bannerPrincipal" src="{{asset('images/banner-cursos.png')}}">
    </div>
    <h3 class="col-lg-offset-1">Cursos en línea</h3>
    <hr class="hrCursos">
    <hr class="hrCursos1">
    <div class="col-md-12 animated fadeInDown margenCursos">
        <div class="col-md-1"></div>
        <div class="col-md-3 hvr-grow-shadow">
            <a href="cursos"><img  src="{{asset('images/cursos.jpg')}}" class="img-responsive center-block"></a>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><h2 class="text-center">Explorar Cursos</h2> </li>
                <li class="list-group-item text-justify">Cursos en Línea. Desarrollarás las técnicas y los conocimientos necesarios para ser un especialista del área en la que trabajas, o de alguna otra de tu interés.</li>
            </ul>
        </div>
        <div class="col-md-3 hvr-grow-shadow">
            <a href="{{url("misCursos")}}"><img src="{{asset('images/subir.png')}}" class="img-responsive center-block"></a>
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><h2 class="text-center">Subir Cursos</h2> </li>
                <li class="list-group-item text-justify">
                    Los cursos son los espacios donde los profesores añaden materiales para 
                    el aprendizaje para sus alumnos. Son creados por administradores. 
                    Los maestros pueden entonces añadir el contenido y re-organizarlos de acuerdo a 
                    sus propias necesidades.</li>
            </ul>
        </div>
        <div class="col-md-3 hvr-grow-shadow">
            <img src="{{asset('images/faq.png')}}" class="img-responsive center-block">
            <ul class="list-group list-group-flush text-center">
                <li class="list-group-item"><h2 class="text-center">Preguntas Frecuentes</h2> </li>
                <li class="list-group-item text-justify">Sección que ofrece una recompilación de las preguntas y respuestas más solicitadas por los usuarios.</li>
            </ul>
        </div>                    
    </div>
    <hr class="hrCursos">
        <hr class="hrCursos1">
    <div class="col-md-12 animated fadeInDown margenCursos2">
        <div class="col-md-2"></div>
        <div class="col-sm-3">
            <!-- colored -->
            <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
                    <div class="img"><img style="height: 130px; width: 250px; margin-top: 20%; margin-left: -5%;" src="{{asset('images/soporte.png')}}" alt="img"></div>
                    <div class="info">
                        <h3>Soporte</h3>
                        <p></p>
                    </div></a></div>
            <!-- end colored -->
        </div>

        <div class="col-sm-3">
            <!-- colored -->
            <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
                    <div class="img"><img style="height: 130px; width: 250px; margin-top: 20%; margin-left: -5%;" src="{{asset('images/a-cerca-de.png')}}" alt="img"></div>
                    <div class="info">
                        <h3>Acerca de</h3>
                        <p></p>
                    </div></a></div>
            <!-- end colored -->
        </div>
        <div class="col-sm-3">
            <!-- colored -->
            <div class="ih-item circle colored effect10 top_to_bottom"><a href="#">
                    <div class="img"><img style="height: 130px; width: 250px; margin-top: 20%; margin-left: -5%;" src="{{asset('images/contacto.png')}}" alt="img"></div>
                    <div class="info">
                        <h3>Contacto</h3>
                        <p></p>
                    </div></a></div>
            <!-- end colored -->
        </div>
    </div>
</div>
@endsection
