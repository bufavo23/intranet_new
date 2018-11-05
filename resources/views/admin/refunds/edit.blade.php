@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Proveedores</div>

                <div class="card-body">
                    
                    {!! Form::model($refund, ['route' => ['refunds.update', $refund->id], 'method' => 'PUT', 'files' => true]) !!}

						@include('admin.refunds.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection