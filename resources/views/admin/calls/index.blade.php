@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Llamadas Clientes
                    @can('calls.create')
                        <a href="{{ route('calls.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Fecha Llamada</th>
                                <th>Vendedor Asignado</th>
                                <th colspan="3">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($calls as $call)
                                <tr>
                                    <td>{{ $call->id }}</td>
                                    <td>{{ $call->name }}</td>
                                    <td>{{ $call->phone }}</td>
                                    <td>{{ $call->date_call }}</td>
                                    <td>{{ $call->user->name }}</td>
                                    <td>
                                        @can('calls.show')
                                        <a href="{{ route('calls.show', $call->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('calls.edit')
                                        <a href="{{ route('calls.edit', $call->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('calls.destroy')
                                        {!! Form::open(['route' => ['calls.destroy', $call->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $calls->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
