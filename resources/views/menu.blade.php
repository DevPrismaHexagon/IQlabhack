@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center p-3">Menu de Navegación</h2>
    <nav>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ url('/formato-requerimiento') }}">Formato de requerimientos</a></li>
                    <li class="list-group-item"><a href="{{ url('/bd_offerer') }}">Bases oferentes</a></li>
                    <li class="list-group-item"><a href="{{ url('/bd_less') }}">Bases de datos menor</a></li>
                    <li class="list-group-item"><a href="{{ url('/result_aprend') }}">Inscripción aspirante</a></li>
                    <li class="list-group-item"><a href="{{ url('/profile_entry') }}">Perfil de ingreso</a></li>
                    <li class="list-group-item"><a href="{{ url('/result_aprend_table') }}">Resultados de aprendizaje</a></li>
                    <li class="list-group-item"><a href="{{ url('/validation_formation') }}">Validación de formación</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{ url('/result_aprend2') }}">Formato inscripción mentor</a></li>
                    <li class="list-group-item"><a href="{{ url('/format_insgroup') }}">Formato inscripción grupo</a></li>
                    <li class="list-group-item"><a href="{{ url('/format_insgroup2') }}">Presentación oferentes</a></li>
                    <li class="list-group-item"><a href="{{ url('/format_evaoffer') }}">Evaluación oferente</a></li>
                    <li class="list-group-item"><a href="{{ url('/seguimiento_pasantes') }}">Seguimiento a pasantes</a></li>
                    <li class="list-group-item"><a href="{{ url('/matriz_comunicaciones') }}">Matriz de comunicaciones</a></li>
                    <li class="list-group-item"><a href="{{ url('/matriz_raci') }}">Matriz raci</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@endsection