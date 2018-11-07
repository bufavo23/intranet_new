@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                                <th>Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($statusends as $statusend)
                                <tr>
                                    <td>{{ $statusend->id }}</td>
                                    <td>{{ $statusend->name }}</td>
                                    <td>{{ $statusend->description }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('statusends.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('statusends.show', $statusend->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('statusends.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('statusends.edit', $statusend->id) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('statusends.destroy')
                                        {!! Form::open(['route' => ['statusends.destroy', $statusend->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </div>
                                        
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
