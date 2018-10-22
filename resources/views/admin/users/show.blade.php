@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios/div>

                <div class="card-body">
                    <p><strong>Usuario </strong>{{ $user->user }}</p>
                    <p><strong>Nombre </strong>{{ $user->name }} {{ $user->last_name }}</p>
                    <p><strong>Rut </strong>{{ $user->rut }}</p>
                    <p><strong>Email </strong>{{ $user->email }}</p>
                    <p><strong>Fecha Nacimiento </strong>{{ $user->birthday_date }}</p>
                    <p><strong>Facebook </strong>{{ $user->facebook }}</p>
                    <p><strong>Twiter </strong>{{ $user->twiter }}</p>
                    <p><strong>Linkedin </strong>{{ $user->linkedin }}</p>
                    <p><strong>Instagram </strong>{{ $user->instagram }}</p>
                    <p><strong>Sobre Mi </strong>{{ $user->about_me }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection