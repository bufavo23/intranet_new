@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Clientes
                    @can('clients.create')
                        <a href="{{ route('clients.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
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
                                <th scope="col">Tipo Cliente</th>
                                <th scope="col">Vendedor</th>
                                <th scope="col">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td scope="row">{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->last_name_f }}</td>
                                    <td>{{ $client->rut }}</td>
                                    <td>{{ $client->tipo_cliente }}</td>
                                    <td>{{ $client->user->name }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('clients.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('clients.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('clients.edit', $client->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('clients.destroy')
                                        {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Cliente n° {{ $client->id }}')">
                                                <i class="fa fa-trash" style="color: blue"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $clients->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

