@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tipo de Proveedor
                    @can('typeproviders.create')
                        <a href="{{ route('typeproviders.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
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
                            @foreach($typeproviders as $typeprovider)
                                <tr>
                                    <td>{{ $typeprovider->id }}</td>
                                    <td>{{ $typeprovider->name }}</td>
                                    <td>{{ $typeprovider->description }}</td>
                                    <td>
                                        @can('typeproviders.show')
                                        <a href="{{ route('typeproviders.show', $typeprovider->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('typeproviders.edit')
                                        <a href="{{ route('typeproviders.edit', $typeprovider->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('typeproviders.destroy')
                                        {!! Form::open(['route' => ['typeproviders.destroy', $typeprovider->id], 'method' => 'DELETE']) !!}
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
                    {{ $typeproviders->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
