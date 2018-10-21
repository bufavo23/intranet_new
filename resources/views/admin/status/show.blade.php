@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estado de devoluciones</div>

                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $statu->name }}</p>
                    <p><strong>Descripcion </strong>{{ $statu->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection