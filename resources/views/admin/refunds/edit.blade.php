@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Proveedores</div>

                <div class="card-body">
                    
                    {!! Form::model($provider, ['route' => ['providers.update', $provider->id], 'method' => 'PUT', 'files' => true]) !!}

						@include('admin.providers.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection