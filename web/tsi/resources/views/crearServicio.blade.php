@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-warning text-black">
                    <span>Añadir servicio</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="mes-txt" class="form-label">Mes</label>
                        <input type="text" id="mes-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="anno-txt" class="form-label">Año</label>
                        <input type="text" id="anno-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tipo-txt" class="form-label">Tipo de servicio</label>
                        <input type="text" id="tipo-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="consumo-num" class="form-label">Cantidad de consumo</label>
                        <input type="number" id="consumo-num" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="monto-num" class="form-label">Monto</label>
                        <input type="number" id="monto-num" class="form-control">
                    </div>  
                </div>
                <div class="card-footer d-grid gap-1 ">
                    <button id="servi-btn" class="btn btn-warning">Registrar servicio</button>
                </div>
            </div>
        </div>
    </div>    
@endsection