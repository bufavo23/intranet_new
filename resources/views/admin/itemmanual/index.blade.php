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
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Tipo</th>
                                <th>Proveedor</th>
                                <th>F. Expiracion</th>
                                <th>Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->type_item->name }}</td>
                                    <td>{{ $item->provider->name }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->expiration_date)->format('d-m-Y') }}</td>
                                    
                                    <td>
                                       <div class="btn-group float-right" role="group">
                                        @can('itemmanual.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('itemmanual.show', $item->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('itemmanual.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('itemmanual.edit', $item->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('itemmanual.destroy')
                                        {!! Form::open(['route' => ['itemmanual.destroy', $item->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Item {{ $item->id }}')">
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
                    {{ $items->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

