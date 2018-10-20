@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Motivo Devoluciones
                    @can('motives.create')
                        <a href="{{ route('motives.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
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
                            @foreach($motives as $motive)
                                <tr>
                                    <td>{{ $motive->id }}</td>
                                    <td>{{ $motive->name }}</td>
                                    <td>{{ $motive->description }}</td>
                                    <td>
                                        @can('motives.show')
                                        <a href="{{ route('motives.show', $motive->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('motives.edit')
                                        <a href="{{ route('motives.edit', $motive->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('motives.destroy')
                                        {!! Form::open(['route' => ['motives.destroy', $motive->id], 'method' => 'DELETE']) !!}
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
                    {{ $motives->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
