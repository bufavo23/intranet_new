@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sgc</div>

                <div class="card-body">
                    <p><strong>Nombre </strong>{{ $sgcs->name }}</p>
                    <p><strong>Descripcion </strong>{{ $sgcs->description }}</p>
                    <p><strong>File </strong><a href="{{ $sgcs->file }}">{{ $sgcs->file }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection