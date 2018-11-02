@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cliente</div>

                <div class="card-body">
                    <p><strong>Cliente ID </strong>{{ $client->id }}</p>
                    <p><strong>Nombre </strong>{{ $client->name }} {{ $client->last_name_f }} {{ $client->last_name_m }}</p>
                    <p><strong>Rut </strong>{{ $client->rut }}</p>
                    <p><strong>Contacto </strong>{{ $client->contact }}</p>
                    <p><strong>Telefono </strong>{{ $client->phone }}</p>
                    <p><strong>Email </strong>{{ $client->email }}</p>
                    <p><strong>Direccion </strong>{{ $client->address }}</p>
                    <p><strong>Comuna </strong>{{ $client->comuna }}</p>
                    <p><strong>Ciudad </strong>{{ $client->city }}</p>
                    <p><strong>Pais </strong>{{ $client->country }}</p>
                    <p><strong>Tipo Cliente </strong>{{ $client->tipo_cliente }}</p>
                    <p><strong>Vendedor </strong>{{ $client->user->name }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection