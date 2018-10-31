@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Item Manual</div>

                <div class="card-body">
                    
                    {!! Form::model($item, ['route' => ['itemmanual.update', $item->id], 'method' => 'PUT', 'files' => true]) !!}

						@include('admin.itemmanual.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection