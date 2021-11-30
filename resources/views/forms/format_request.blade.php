@extends('layouts.forms')

@section('content')

    <form action="" id="format_request" class="p-3 container"> 
        
        <div class="title">
            <h2 class="text-center text-uppercase fw-bold">formato de requerimientos</h2>
            <div class="title-ps text-center mt-3">
                <p class="d-inline p-1"><strong>Versión</strong>:Beta</p>
                <p class="d-inline p-1"><strong>Codigo</strong>:IQ-F-001</p>
                <p class="d-inline p-1"><strong>Fecha</strong>:00/00/00</p>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-2">
                <div class="form-group">
                    <label for=""><strong>ID_REQ</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for=""><strong>ID / EMPRESA</strong></label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <h3 class="text-center p-2 text-uppercase mb-4">Habilidades</h3>
        <table class="table tabla">
            <thead class="">
                <tr>
                    <th class="fw-bold text-center fs-3">Descripcion</th>
                    <th class="fw-bold text-center">Vertical</th>
                    <th class="fw-bold text-center">Transversal</th>
                    <th class="fw-bold text-center">Funciones</th>
                    <th class="fw-bold text-center">Horas</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td class="text-center">landjaeger</td>
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
                    <td class="text-center">landjaeger</td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th class="fw-bold text-center fs-3">Descripcion</th>
                    <th class="fw-bold text-center">Vertical</th>
                    <th class="fw-bold text-center">Transversal</th>
                    <th class="fw-bold text-center">Funciones</th>
                    <th class="fw-bold text-center">Horas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">landjaeger</td>
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
                    <td class="text-center">landjaeger</td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th class="fw-bold text-center fs-3">Descripcion</th>
                    <th class="fw-bold text-center">Vertical</th>
                    <th class="fw-bold text-center">Transversal</th>
                    <th class="fw-bold text-center">Funciones</th>
                    <th class="fw-bold text-center">Horas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">landjaeger</td>
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
                    <td class="text-center">landjaeger</td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th class="fw-bold text-center fs-3">Descripcion</th>
                    <th class="fw-bold text-center">Vertical</th>
                    <th class="fw-bold text-center">Transversal</th>
                    <th class="fw-bold text-center">Funciones</th>
                    <th class="fw-bold text-center">Horas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">landjaeger</td>
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
                    <td class="text-center">landjaeger</td>
                </tr>
            </tbody>

        </table>

        <div class="row my-4">
            <div class="col-md-8"></div>
            <div class="col-md-2 d-flex justify-content-center align-items-center">
                 <label for=""><strong>Total de horas</strong></label>
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-xs-12 d-flex justify-content-center align-items-center">
                <label for="" class="p-3"><strong>Fecha</strong></label>
                <input type="date" class="p-3 form-control">
            </div>
            <div class="col-md-4 col-xs-12 d-flex justify-content-center align-items-center">
                <label for="" class="p-3"><strong>Recibido</strong></label>
                <input type="date" class="p-3 form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12 d-flex justify-content-center align-items-center">
                <label for="" class="p-3"><strong>Fecha</strong></label>
                <input type="date" class="p-3 form-control">
            </div>
            <div class="col-md-4 col-xs-12 d-flex justify-content-center align-items-center">
                <label for="" class="p-3"><strong>Recibido</strong></label>
                <input type="date" class="p-3 form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12 d-flex justify-content-center align-items-center">
                <label for="" class="p-3"><strong>Fecha</strong></label>
                <input type="date" class="p-3 form-control">
            </div>
            <div class="col-md-4 col-xs-12 d-flex justify-content-center align-items-center">
                <label for="" class="p-3"><strong>Recibido</strong></label>
                <input type="date" class="p-3 form-control">
            </div>
        </div>


        <div class="row my-4 observaciones">
            <div class="col-md-12">
                <p class="">Observaciones</p>
                <textarea class="form-control"></textarea>
            </div>
        </div>

       <div class="row text-center d-flex justify-content-center align-items-center">
            <input type="submit" class="guardar btn py-3 px-5" value="Guardar">
       </div>
        
    </form>


@endsection