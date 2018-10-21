@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tipo Item Manual Ventas</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'typeitems.store']) !!}

						@include('admin.typeitems.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection