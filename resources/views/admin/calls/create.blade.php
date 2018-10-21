@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Llamada Clientes</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'calls.store']) !!}

						@include('admin.calls.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection