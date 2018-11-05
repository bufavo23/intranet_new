@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Items Manual de Ventas
                    @can('itemmanual.create')
                        <a href="{{ route('itemmanual.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Tipo</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td scope="row">{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->type_item->name }}</td>
                                    
                                    <td>
                                        @can('itemmanual.show')
                                        <a href="{{ route('itemmanual.show', $item->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('itemmanual.edit')
                                        <a href="{{ route('itemmanual.edit', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('itemmanual.destroy')
                                        {!! Form::open(['route' => ['itemmanual.destroy', $item->id], 'method' => 'DELETE']) !!}
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
                    {{ $items->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
