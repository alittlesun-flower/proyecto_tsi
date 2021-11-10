@extends('layouts.app')
@section('content')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                <thead class="bg-info">
                    <tr>
                        <td>Mes</td>
                        <td>Año</td>
                        <td>Tipo de servicio</td>
                        <td>Cantidad de consumo</td>
                        <td>Monto total</td>
                        <td>Accion 1</td>
                        <td>Accion 2</td>
                    </tr>
                </thead>
                <tbody id="tbody-servidor">

                </tbody>
            </table>
        </div>
    </div>
    <div class="d-none">
        <div class="row mt-5 molde-modificar">
                <div class="mb-3">
                    <label for="mes-txt" class="form-label">Mes</label>
                    <input type="text" class="form-control mes-txt">
                </div>
                <div class="mb-3">
                    <label for="anno-txt" class="form-label">Año</label>
                    <input type="text" class="form-control anno-txt">
                </div>
                <div class="mb-3">
                    <label for="tipo-txt" class="form-label">Tipo de servicio</label>
                    <input type="text" class="form-control tipo-txt">
                </div>
                <div class="mb-3">
                    <label for="consumo-num" class="form-label">Cantidad de consumo</label>
                    <input type="number" class="form-control consumo-num">
                </div>
                <div class="mb-3">
                    <label for="monto-num" class="form-label">Monto total</label>
                    <input type="number" class="form-control monto-num">
                </div>    
                <div class="d-grid gap-1">
                    <button  class="btn btn-info modificar-btn">Modificar</button>
                </div>
            </div>
        </div>
    </div> 
@endsection