@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacto</div>

                <div class="card-body">
                    <p><strong>ID </strong>{{ $contact->id }}</p>
                    <p><strong>Nombre </strong>{{ $contact->name }}</p>
                    <p><strong>Email </strong>{{ $contact->email }}</p>
                    <p><strong>Telefono</strong>{{ $contact->phone }}</p>
                    <p><strong>Celular </strong>{{ $contact->cell_phone }}</p>
                    <p><strong>Seccion </strong>{{ $contact->section }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection