@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Destinos Devoluciones
                    @can('destinations.create')
                        <a href="{{ route('destinations.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th colspan="3">&nbsp</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($destinations as $destination)
                                <tr>
                                    <td>{{ $destination->id }}</td>
                                    <td>{{ $destination->name }}</td>
                                    <td>{{ $destination->description }}</td>
                                    <td>
                                        @can('destinations.show')
                                        <a href="{{ route('destinations.show', $destination->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('destinations.edit')
                                        <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('destinations.destroy')
                                        {!! Form::open(['route' => ['destinations.destroy', $destination->id], 'method' => 'DELETE']) !!}
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
                    {{ $destinations->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
