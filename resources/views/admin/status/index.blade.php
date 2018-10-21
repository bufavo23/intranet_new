@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Estado de Devoluciones
                    @can('status.create')
                        <a href="{{ route('status.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
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
                            @foreach($status as $statu)
                                <tr>
                                    <td>{{ $statu->id }}</td>
                                    <td>{{ $statu->name }}</td>
                                    <td>{{ $statu->description }}</td>
                                    <td>
                                        @can('status.show')
                                        <a href="{{ route('status.show', $statu->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('status.edit')
                                        <a href="{{ route('status.edit', $statu->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('status.destroy')
                                        {!! Form::open(['route' => ['status.destroy', $statu->id], 'method' => 'DELETE']) !!}
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
                    {{ $status->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
