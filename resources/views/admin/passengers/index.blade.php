@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pasajeros
                    @can('passengers.create')
                        <a href="{{ route('passengers.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
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
                                <th scope="col">Cliente</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($passengers as $passenger)
                                <tr>
                                    <td scope="row">{{ $passenger->id }}</td>
                                    <td>{{ $passenger->name }}</td>
                                    <td>{{ $passenger->last_name_f }}</td>
                                    <td>{{ $passenger->rut }}</td>
                                    <td>{{ $passenger->client->name }}</td>
                                    
                                    <td>
                                        @can('passengers.show')
                                        <a href="{{ route('passengers.show', $passenger->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('passengers.edit')
                                        <a href="{{ route('passengers.edit', $passenger->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('passengers.destroy')
                                        {!! Form::open(['route' => ['passengers.destroy', $passenger->id], 'method' => 'DELETE']) !!}
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
                    {{ $passengers->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
