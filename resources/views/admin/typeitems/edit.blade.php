@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Tipo Item Manual Ventas</div>

                <div class="card-body">
                    
                    {!! Form::model($typeitem, ['route' => ['typeitems.update', $typeitem->id], 'method' => 'PUT']) !!}

						@include('admin.typeitems.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection