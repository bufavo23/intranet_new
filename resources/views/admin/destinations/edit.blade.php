@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Destinos devoluciones</div>

                <div class="card-body">
                    
                    {!! Form::model($destination, ['route' => ['destinations.update', $destination->id], 'method' => 'PUT']) !!}

						@include('admin.destinations.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection