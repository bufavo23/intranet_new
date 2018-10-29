@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Proveedores
                    @can('providers.create')
                        <a href="{{ route('providers.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Prefijo</th>
                                <th scope="col">Codigo Iata</th>
                                <th scope="col">Comision Base</th>
                                <th scope="col">Comision Bussines</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Tipo</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($providers as $provider)
                                <tr>
                                    <td scope="row">{{ $provider->id }}</td>
                                    <td><img src="{{ asset($provider->file) }}" alt="" width="70px" height="65px"></td>
                                    <td>{{ $provider->name }}</td>
                                    <td>{{ $provider->prefix }}</td>
                                    <td>{{ $provider->code_iata }}</td>
                                    <td>{{ $provider->fee_basic }} %</td>
                                    <td>{{ $provider->fee_bussinnes }} %</td>
                                    <td>{{ $provider->activo }}</td>
                                    <td>{{ $provider->type_provider->name }}</td>
                                    
                                    <td>
                                        @can('providers.show')
                                        <a href="{{ route('providers.show', $provider->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('providers.edit')
                                        <a href="{{ route('providers.edit', $provider->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('providers.destroy')
                                        {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'DELETE']) !!}
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
                    {{ $providers->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
