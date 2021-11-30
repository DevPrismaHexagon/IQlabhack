@extends('layouts.forms')

@section('content')
<form action="" id="format_request" class="p-3 container"> 
        
    <div class="title">
        <h2 class="text-center text-uppercase fw-bold">PERFIL DE INGRESO</h2>
        <div class="title-ps text-center mt-3">
            <p class="d-inline p-1"><strong>Versión</strong>:Beta</p>
            <p class="d-inline p-1"><strong>Codigo</strong>:IQ-F-001</p>
            <p class="d-inline p-1"><strong>Fecha</strong>:00/00/00</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>ID_REQ</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>Porcentaje</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>Vertical</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>Transversal</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="form-group">
                <label for=""><strong>Actividad</strong></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize:none;"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="form-group">
                <label for=""><strong>Porcentaje</strong></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize:none;"></textarea>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label mr-2" for="flexRadioDefault1">Cumple</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>

                    <div class="form-check form-check-inline">
                        <label class="form-check-label mr-2" for="flexRadioDefault1">No Cumple</label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>Total porcentaje</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>ID Prueba</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>Fecha</strong></label>
                <input type="date" class="form-control">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>Nombre del evaluado</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for=""><strong>Nombre del evaluador</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
    </div>






    <div class="row text-center d-flex justify-content-center align-items-center mt-4">
        <input type="submit" class="guardar btn py-2 px-5" value="Guardar">
    </div>
</form>
@endsection