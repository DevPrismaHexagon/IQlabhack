@extends('layouts.forms')

@section('content')

    <form action="" id="format_request" class="p-3 container"> 
        
        <div class="title">
            <h2 class="text-center text-uppercase fw-bold">RESULTADO DE APRENDIZAJE</h2>
            <div class="title-ps text-center mt-3">
                <p class="d-inline p-1"><strong>Versión</strong>:Beta</p>
                <p class="d-inline p-1"><strong>Codigo</strong>:IQ-F-001</p>
                <p class="d-inline p-1"><strong>Fecha</strong>:00/00/00</p>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="form-group">
                    <label for=""><strong>Nombre de la empresa donde está realizando la pasantía</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>NIT</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>BITACORA N°</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>Período</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-group">
                    <label for=""><strong>Nombre del jefe inmeadiato/responsable</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>Nombre del pasante</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>Documento ID.</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>Teléfono de contacto</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group">
                    <label for=""><strong>ID Grupo</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for=""><strong>Programa de formación</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        
        <table class="table tabla mt-5">
            <thead class="">
                <tr>
                    <th class="fw-bold text-center">DESCRIPCIÓN DE LA ACTIVIDAD</th>
                    <th class="fw-bold text-center">FECHA INICIO</th>
                    <th class="fw-bold text-center">EVIDENCIA DE CUMPLIMIENTO</th>
                    <th class="fw-bold text-center">OBSERVACIONES, INASISTENCIAS Y/O DIFICIULTADES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">landjaeger</td>
                    <td class="text-center">landjaeger</td>
                    <td class="text-center">landjaeger</td>
                    <td class="text-center">landjaeger</td>
                </tr>
                <tr>
                    <td class="text-center">landjaeger</td>
                    <td class="text-center">landjaeger</td>
                    <td class="text-center">landjaeger</td>
                    <td class="text-center">landjaeger</td>
                </tr>
            </tbody>
        </table>

       <div class="row text-center d-flex justify-content-center align-items-center mt-5">
            <input type="submit" class="guardar btn py-3 px-5" value="Guardar">
       </div>
        
    </form>


@endsection