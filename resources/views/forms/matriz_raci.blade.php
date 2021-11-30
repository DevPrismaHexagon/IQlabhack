@extends('layouts.forms')

@section('content')

    <form action="" id="format_request" class="p-3 "> 

        <div class="title">
            <h2 class="text-center text-uppercase fw-bold">MATRIZ RACI</h2>
            <div class="title-ps text-center mt-3">
                <p class="d-inline p-1"><strong>Versión</strong>:Beta</p>
                <p class="d-inline p-1"><strong>Codigo</strong>:IQ-F-001</p>
                <p class="d-inline p-1"><strong>Fecha</strong>:00/00/00</p>
            </div>
        </div>

        <table class="table tabla mt-5">
            <thead class="">
                <tr>
                    <th class="fw-bold text-center">CODIGO</th>
                    <th class="fw-bold text-center">Actividades</th>
                    <th class="fw-bold text-center">TH</th>
                    <th class="fw-bold text-center">CP</th>
                    <th class="fw-bold text-center">CA</th>
                    <th class="fw-bold text-center">LD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">55555412</td>
                    <td class="text-center">55555412</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                </tr>
                <tr>
                    <td class="text-center">55555412</td>
                    <td class="text-center">55555412</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                </tr>
                <tr>
                    <td class="text-center">55555412</td>
                    <td class="text-center">55555412</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                </tr>
                 <tr>
                    <td class="text-center">55555412</td>
                    <td class="text-center">55555412</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                </tr>
                <tr>
                    <td class="text-center">55555412</td>
                    <td class="text-center">55555412</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                    <td class="text-center">5</td>
                </tr>
            </tbody>
        </table>

       <div class="row text-center d-flex justify-content-center align-items-center mt-5">
            <input type="submit" class="guardar btn py-3 px-5" value="Guardar">
       </div>
        
    </form>


@endsection