@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Motivo devoluciones</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'motives.store']) !!}

						@include('admin.motives.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection