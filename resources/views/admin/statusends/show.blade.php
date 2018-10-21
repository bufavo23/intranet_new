@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estado Envio de devoluciones</div>

                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $statusend->name }}</p>
                    <p><strong>Descripcion </strong>{{ $statusend->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection