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
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($typeitems as $typeitem)
                                <tr>
                                    <td>{{ $typeitem->id }}</td>
                                    <td>{{ $typeitem->name }}</td>
                                    <td>{{ $typeitem->description }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('typeitems.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('typeitems.show', $typeitem->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('typeitems.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('typeitems.edit', $typeitem->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('typeitems.destroy')
                                        {!! Form::open(['route' => ['typeitems.destroy', $typeitem->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Tipo Item {{ $typeitem->id }}')">
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
                    {{ $typeitems->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
