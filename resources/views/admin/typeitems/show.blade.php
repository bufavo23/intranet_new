@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tipo Item Manual de Ventas</div>

                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $typeitem->name }}</p>
                    <p><strong>Descripcion </strong>{{ $typeitem->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection