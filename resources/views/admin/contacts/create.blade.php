@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Contacto de Proveedor</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'contacts.store']) !!}

						@include('admin.contacts.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection