@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Destinos devoluciones</div>

                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $destination->name }}</p>
                    <p><strong>Descripcion </strong>{{ $destination->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection