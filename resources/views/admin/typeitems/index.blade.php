@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tipo Item Manual de Ventas
                    @can('typeitems.create')
                        <a href="{{ route('typeitems.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
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
                            @foreach($typeitems as $typeitem)
                                <tr>
                                    <td>{{ $typeitem->id }}</td>
                                    <td>{{ $typeitem->name }}</td>
                                    <td>{{ $typeitem->description }}</td>
                                    <td>
                                        @can('typeitems.show')
                                        <a href="{{ route('typeitems.show', $typeitem->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('typeitems.edit')
                                        <a href="{{ route('typeitems.edit', $typeitem->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('typeitems.destroy')
                                        {!! Form::open(['route' => ['typeitems.destroy', $typeitem->id], 'method' => 'DELETE']) !!}
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
                    {{ $typeitems->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
