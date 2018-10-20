@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Motivo devoluciones</div>

                <div class="card-body">
                    
                    {!! Form::model($motive, ['route' => ['motives.update', $motive->id], 'method' => 'PUT']) !!}

						@include('admin.motives.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection