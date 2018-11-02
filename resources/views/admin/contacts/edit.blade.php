@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Contacto de Proveedores</div>

                <div class="card-body">
                    
                    {!! Form::model($contact, ['route' => ['contacts.update', $contact->id], 'method' => 'PUT']) !!}

						@include('admin.contacts.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection