@extends('layouts.forms')

@section('content')
<form action="" id="format_request" class="p-3 container"> 
        
    <div class="title">
        <h2 class="text-center text-uppercase fw-bold">FORMATO INSCRIPCIÓN GRUPO</h2>
        <div class="title-ps text-center mt-3">
            <p class="d-inline p-1"><strong>Versión</strong>:Beta</p>
            <p class="d-inline p-1"><strong>Codigo</strong>:IQ-F-001</p>
            <p class="d-inline p-1"><strong>Fecha</strong>:00/00/00</p>
        </div>
    </div>

    <h5 class="text-center mt-5">DATOS DEL POSTULANTE</h5>
    <table class="table tabla" >
        <thead class="">
            <tr>
                <th class="fw-bold text-center"> </th>
                <th class="fw-bold text-center">NOMBRE</th>
                <th class="fw-bold text-center">ID POSTULANTE</th>
                <th class="fw-bold text-center">ID PRUEBA DE INGRESO</th>
                <th class="fw-bold text-center">TELÉFONO</th>
                <th class="fw-bold text-center">CORREO</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td class="text-center">ID GRUPO</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center"></td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center"></td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center"></td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
            </tr>
            <tr>
                <td class="text-center"></td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
                <td class="text-center">beicon ipsum</td>
            </tr>

        </tbody>
    </table>

    <div class="row text-center d-flex justify-content-center align-items-center mt-5">
        <input type="submit" class="guardar btn py-2 px-5" value="Guardar">
    </div>
</form>
@endsection