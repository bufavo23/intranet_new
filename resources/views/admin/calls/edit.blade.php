@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Estado de devoluciones</div>

                <div class="card-body">
                    
                    {!! Form::model($call, ['route' => ['calls.update', $call->id], 'method' => 'PUT']) !!}

						@include('admin.calls.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection