@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                                <th>Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($typeproviders as $typeprovider)
                                <tr>
                                    <td>{{ $typeprovider->id }}</td>
                                    <td>{{ $typeprovider->name }}</td>
                                    <td>{{ $typeprovider->description }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('typeproviders.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('typeproviders.show', $typeprovider->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('typeproviders.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('typeproviders.edit', $typeprovider->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('typeproviders.destroy')
                                        {!! Form::open(['route' => ['typeproviders.destroy', $typeprovider->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Tipo Proveedor {{ $typeprovider->id }}')">
                                                <i class="fa fa-trash" style="color: blue"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </div>
                                        
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
