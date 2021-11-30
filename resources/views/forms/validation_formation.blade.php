@extends('layouts.forms')

@section('content')

<div class="title">
    <h2 class="text-center text-uppercase fw-bold">VALIDACIÓN DE FORMACIÓN</h2>
    <div class="title-ps text-center mt-3">
        <p class="d-inline p-1"><strong>Versión</strong>:Beta</p>
        <p class="d-inline p-1"><strong>Codigo</strong>:IQ-F-001</p>
        <p class="d-inline p-1"><strong>Fecha</strong>:00/00/00</p>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>ID Grupo</strong></label>
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Mentor</strong></label>
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Vertical</strong></label>
                <input type="date" class="form-control">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <table class="table tabla">
        <thead class="">
            <tr>
                <th class="fw-bold">ITEM</th>
                <th class="fw-bold">ASPECTOS A VERIFICAR</th>
                <th class="fw-bold">Resultado del aprendizaje</th>
                <th class="fw-bold">Recomendaciones</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td class="fw-bold">1</td>
                <td class="">Las actividades propuestas guardan coherencia con el resultado de aprendizaje a alcanzar</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">2</td>
                <td class="">Las evidencias son del miso tipo que los resultados de aprendizaje</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">3</td>
                <td class="">Los postulantes relacionados en la lista aprobaron la prueba de ingreso.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">4</td>
                <td class="">Se incluye material de apoyo adecuado para la actividad.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">5</td>
                <td class="">Las horas destidas para la actividad son adecuadas.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">6</td>
                <td class="">En el desarrollo de la guía de aprendizaje se incluye el uso del material de apoyo.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">7</td>
                <td class="">Los codigos de los resultados de aprendizaje concuerdan con la descripción de estos.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">8</td>
                <td class="">Aplica los recursos didácticos  establecidos  en el desarrollo curricular del programa de formación.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">9</td>
                <td class="">Aplica los que se requieren en el desempeño de la pasantía.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
            <tr>
                <td class="fw-bold">10</td>
                <td class="">Las evidencias son coherentes con los resultado a alcanzar.</td>
                <td class=""></td>
                <td class=""></td>
            </tr>
        </tbody>
    </table>

    <div class="row mt-5">
        <div class="col-md-3">
            <div class="form-group">
                <label for=""><strong>Fecha</strong></label>
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for=""><strong>Nombre del coordinador academico</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="row text-center d-flex justify-content-center align-items-center mt-4">
        <input type="submit" class="guardar btn py-2 px-5" value="Guardar">
    </div>
</div>





<!-- <div class="p-3 container" id="bd_offerer">
    
    <table class="table tabla">
        <thead class="">
            <tr>
                <th class="fw-bold text-center">VERTICAL</th>
                <th class="fw-bold text-center">ID RESULTADO</th>
                <th class="fw-bold text-center">DESCRIPCION</th>
                <th class="fw-bold text-center">TIPO</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td class="text-center">Beicon Ipsum</td>
                <td class="text-center">Beicon Ipsum</td>
                <td class="text-center">Beicon Ipsum</td>
                <td class="text-center">Beicon Ipsum</td>
            </tr>
        </tbody>
    </table>
</div> -->
@endsection