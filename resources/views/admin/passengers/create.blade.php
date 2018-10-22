@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Nuevo Pasajero</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'passengers.store']) !!}

						@include('admin.passengers.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection