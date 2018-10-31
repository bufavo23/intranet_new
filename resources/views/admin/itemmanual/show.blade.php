@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Item manual Ventas</div>

                <div class="card-body">
                    <p><strong>ID </strong>{{ $item->id }}</p>
                    <p><strong>Nombre </strong>{{ $item->name }}</p>
                    <p><strong>Descripcion </strong>{{ $item->description }}</p>
                    <p><strong>Archivo </strong>{{ $item->file }}</p>
                    <p><strong>Tipo </strong>{{ $item->type_item_->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection