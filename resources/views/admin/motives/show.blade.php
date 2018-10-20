@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Motivo devoluciones</div>

                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $motive->name }}</p>
                    <p><strong>Descripcion </strong>{{ $motive->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection