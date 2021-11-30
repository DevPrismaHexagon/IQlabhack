@extends('layouts.forms')

@section('content')

<div class="title">
    <h2 class="text-center text-uppercase fw-bold">FORMATO EVALUACIÓN OFERENTE</h2>
    <div class="title-ps text-center mt-3">
        <p class="d-inline p-1"><strong>Versión</strong>:Beta</p>
        <p class="d-inline p-1"><strong>Codigo</strong>:IQ-F-001</p>
        <p class="d-inline p-1"><strong>Fecha</strong>:00/00/00</p>
    </div>
</div>
<div class="container mt-5">

    <h5>INTRODUCCIÓN</h5>
    <p>El presente documento tiene como objetivo el diseño y presentación de las actividades relacionadas con la validación del perfil de ingreso del aspirante.</p>
    

    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label for=""><strong>Nombre del coordinador académico</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for=""><strong>ID del requerimiento</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for=""><strong>Vertical</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <h5>Objetivo</h5>
    <table class="table tabla">
        <thead class="">
            <tr>
                <th class="text-center fw-bold">Número</th>
                <th class="text-center fw-bold">NOMBRE DE LAS ACTIVIDADES</th>
                <th class="text-center fw-bold">TIPO DE EVIDENCIA(Conocimiento, producto, desempeño)</th>
                <th class="text-center fw-bold">PUNTAJE</th>
                <th class="text-center fw-bold">TIEMPO</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="text-center fw-bold">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center fw-bold">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center fw-bold">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center fw-bold">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
                <td class="text-center ">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center ">beicon ipsum</td>
                <td class="fw-bold text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
            </tr>
        </tbody>
    </table>

    <div class="row mt-5">

        <div class="col-md-12">
            <div class="col-md-12">
                <p class="fw-bold">Enumere los materiales y herramientas</p>
                <textarea class="form-control" rows="5" style="resize:none"></textarea>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="col-md-12">
                <p class="fw-bold">Descripción de la actividad (es)</p>
                <textarea class="form-control" rows="5" style="resize:none"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <p class="fw-bold">Lo que debe hacer el oferente</p>
            <textarea class="form-control" rows="3" style="resize:none"></textarea>
        </div>
        <div class="col-md-6">
            <p class="fw-bold">Lo que debe hacer el oferente</p>
            <textarea class="form-control" rows="3" style="resize:none"></textarea>
        </div>
    </div>

    <h5 class="mt-5">Entregable por actividad</h5>

    <table class="table tabla ">
        <thead class="">
            <tr>
                <th class="fw-bold text-center">Número</th>
                <th class="fw-bold text-center">Descripción del entregable</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
        
        </tbody>
    </table>


    <h5 class="mt-5"><strong>Criterios de evaluación</strong></h5>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Actividad 1</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Indicador</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Puntaje directo</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <table class="table tabla mt-5">
        <thead class="">
            <tr>
                <th class="fw-bold text-center">Calificación</th>
                <th class="fw-bold text-center">Nivel</th>
                <th class="fw-bold text-center">Interpretación</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
        
        </tbody>
    </table>

    <div class="row  mt-5">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Actividad 1</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Indicador</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Puntaje directo</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <table class="table tabla mt-5">
        <thead class="">
            <tr>
                <th class="fw-bold text-center">Calificación</th>
                <th class="fw-bold text-center">Nivel</th>
                <th class="fw-bold text-center">Interpretación</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
        
        </tbody>
    </table>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Actividad 1</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Indicador</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Puntaje directo</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <table class="table tabla mt-5">
        <thead class="">
            <tr>
                <th class="fw-bold text-center">Calificación</th>
                <th class="fw-bold text-center">Nivel</th>
                <th class="fw-bold text-center">Interpretación</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
            <tr>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td>
                <td class="text-center">landjaeger</td> 
            </tr>
        
        </tbody>
    </table>

    <div class="row text-center d-flex justify-content-center align-items-center mt-5">
        <input type="submit" class="guardar btn py-2 px-5" value="Guardar">
    </div>
</div>
    
</div>

@endsection