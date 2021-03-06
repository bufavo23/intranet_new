@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Destinos Devoluciones
                    @can('destinations.create')
                        <a href="{{ route('destinations.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body table-responsive">
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
                            @foreach($destinations as $destination)
                                <tr>
                                    <td>{{ $destination->id }}</td>
                                    <td>{{ $destination->name }}</td>
                                    <td>{{ $destination->description }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('destinations.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('destinations.show', $destination->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('destinations.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('destinations.edit', $destination->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('destinations.destroy')
                                        {!! Form::open(['route' => ['destinations.destroy', $destination->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Destino {{ $destination->name }}')">
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
                    {{ $destinations->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

