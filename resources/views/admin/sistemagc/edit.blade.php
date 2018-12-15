@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Sgc </div>

                <div class="card-body">
                    
                    {!! Form::model($sgcs, ['route' => ['sgcs.update', $sgcs->id], 'method' => 'PUT', 'files' => true ]) !!}

						@include('admin.sistemagc.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection