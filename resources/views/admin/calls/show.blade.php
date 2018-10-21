@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estado de devoluciones</div>

                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $call->name }}</p>
                    <p><strong>Telefono </strong>{{ $call->phone }}</p>
                    <p><strong>Fecha LLamada </strong>{{ $call->date_call }}</p>
                    <p><strong>Vendedor Asignado </strong>{{ $call->user->name }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection