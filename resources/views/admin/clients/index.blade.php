@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Clientes
                    @can('clients.create')
                        <a href="{{ route('clients.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Rut</th>
                                <th scope="col">Tipo Cliente</th>
                                <th scope="col">Vendedor</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td scope="row">{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->last_name_f }}</td>
                                    <td>{{ $client->rut }}</td>
                                    <td>{{ $client->tipo_cliente }}</td>
                                    <td>{{ $client->user->name }}</td>
                                    <td>
                                        @can('clients.show')
                                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('clients.edit')
                                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('clients.destroy')
                                        {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
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
                    {{ $clients->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
