@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Proveedor</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'providers.store', 'files' => true ]) !!}

						@include('admin.providers.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection