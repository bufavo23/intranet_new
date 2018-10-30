@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Proveedor</div>

                <div class="card-body">
                    <p><strong>ID </strong>{{ $provider->id }}</p>
                    <p><strong>Nombre </strong>{{ $provider->name }}</p>
                    <p><strong>Prefijo </strong>{{ $provider->prefix }}</p>
                    <p><strong>Codigo Iata </strong>{{ $provider->code_iata }}</p>
                    <p><strong>Descripcion </strong>{{ $provider->description }}</p>
                    <p><strong>Fee Basico </strong>{{ $provider->fee_basic }} %</p>
                    <p><strong>Fee Bussinnes </strong>{{ $provider->fee_bussinnes }} %</p>
                    <p><strong>Imagen </strong>{{ $provider->file }}</p>
                    <p><strong>Estado </strong>{{ $provider->activo }}</p>
                    <p><strong>Tipo Proveedor </strong>{{ $provider->type_provider->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection