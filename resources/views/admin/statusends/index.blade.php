@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Estado Envio de Devoluciones
                    @can('statusends.create')
                        <a href="{{ route('statusends.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
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
                            @foreach($statusends as $statusend)
                                <tr>
                                    <td>{{ $statusend->id }}</td>
                                    <td>{{ $statusend->name }}</td>
                                    <td>{{ $statusend->description }}</td>
                                    <td>
                                        @can('statusends.show')
                                        <a href="{{ route('statusends.show', $statusend->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('statusends.edit')
                                        <a href="{{ route('statusends.edit', $statusend->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('statusends.destroy')
                                        {!! Form::open(['route' => ['statusends.destroy', $statusend->id], 'method' => 'DELETE']) !!}
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
                    {{ $statusends->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
