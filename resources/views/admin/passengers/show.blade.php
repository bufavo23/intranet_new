@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pasajero</div>

                <div class="card-body">
                    <p><strong>Passengere ID </strong>{{ $passenger->id }}</p>
                    <p><strong>Nombre </strong>{{ $passenger->name }} {{ $passenger->last_name_f }} {{ $passenger->last_name_m }}</p>
                    <p><strong>Rut </strong>{{ $passenger->rut }}</p>
                    <p><strong>Pasaporte </strong>{{ $passenger->pasaporte }}</p>
                    <p><strong>Fecha Nacimiento </strong>{{ $passenger->birth_date }}</p>
                    <p><strong>Telefono </strong>{{ $passenger->phone }}</p>
                    <p><strong>Email </strong>{{ $passenger->email }}</p>
                    <p><strong>Direccion </strong>{{ $passenger->address }}</p>
                    <p><strong>Comuna </strong>{{ $passenger->comuna }}</p>
                    <p><strong>Ciudad </strong>{{ $passenger->city }}</p>
                    <p><strong>Pais </strong>{{ $passenger->country }}</p>
                    <p><strong>Vendedor </strong>{{ $passenger->client->name }} {{ $passenger->client->last_name_f }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection