@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Pasajeros
                    @can('passengers.create')
                        <a href="{{ route('passengers.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Rut</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($passengers as $passenger)
                                <tr>
                                    <td scope="row">{{ $passenger->id }}</td>
                                    <td>{{ $passenger->name }}</td>
                                    <td>{{ $passenger->last_name_f }}</td>
                                    <td>{{ $passenger->rut }}</td>
                                    <td>{{ $passenger->client->name }}</td>
                                    
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('passengers.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('passengers.show', $passenger->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('passengers.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('passengers.edit', $passenger->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('passengers.destroy')
                                        {!! Form::open(['route' => ['passengers.destroy', $passenger->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Pasajero {{ $passenger->id }}')">
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
                    {{ $passengers->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
