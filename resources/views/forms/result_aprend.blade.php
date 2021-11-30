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

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Nombre</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Apellidos</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Correo</strong></label>
                <input type="text" class="form-control">
            </div>
        </div> 
    </div>


    <div class="row mt-4">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>País</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Región</strong></label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Ciudad</strong></label>
                <input type="text" class="form-control">
            </div>
        </div> 
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Teléfono</strong></label>
                <input type="number" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Fecha</strong></label>
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="col-md-4">


            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Default radio
            </label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input p-5" type="radio" name="flexRadioDefault" >
            <label class="form-check-label" for="flexRadioDefault2">
                Default checked radio
            </label>
            </div>

        </div> 
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Redes sociales</strong></label>
                <input type="text" class="form-control" placeholder="Instagram">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Redes sociales</strong></label>
                <input type="text" class="form-control" placeholder="Facebook">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Redes sociales</strong></label>
                <input type="text" class="form-control" placeholder="LinkedIN">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>ID Mentor que lo convocó</strong></label>
                <input type="text" class="form-control" placeholder="Instagram">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Código convocatoria</strong></label>
                <input type="text" class="form-control" placeholder="Facebook">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for=""><strong>Fecha</strong></label>
                <input type="date" class="form-control" placeholder="LinkedIN">
            </div>
        </div>
    </div>

    <h4 class="text-center  mt-4">¿Cómo se entero de la conovocatoría?</h4>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="form-check form-check-inline">
                <label class="form-check-label mr-2" for="flexRadioDefault1">Pagina</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label mr-2" for="flexRadioDefault1">Oficina</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label mr-2" for="flexRadioDefault1">Evento</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label mr-2" for="flexRadioDefault1">Mentor</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h4>Texto tratamiento de datos personales</h4>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize:none;"></textarea>
        </div>
    </div>
    <div class="row mt-4">
       <div class="col-md-12">

            <p class="fw-bold">Al presentar esta solicitud, autorizo ser convocados para presentar evaluación sobre mis aprendizajes previos</p>

            <h5 class="text-center mt-5">Autorizo el tratamiento de datos personales</h5>
            <div class="row d-flex justify-content-center">
                
                <div class="form-check form-check-inline">
                    <label class="form-check-label mr-2" for="flexRadioDefault1">Si</label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label mr-2" for="flexRadioDefault1">No</label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                </div>
            </div>
       </div>
    </div>


    <div class="row text-center d-flex justify-content-center align-items-center mt-4">
        <input type="submit" class="guardar btn py-2 px-5" value="Guardar">
    </div>
</form>
@endsection