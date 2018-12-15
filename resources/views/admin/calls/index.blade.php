@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Llamadas Clientes
                    @can('calls.create')
                        <a href="{{ route('calls.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Fecha Llamada</th>
                                <th>Vendedor Asignado</th>
                                <th>Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($calls as $call)
                                <tr>
                                    <td>{{ $call->id }}</td>
                                    <td>{{ $call->name }}</td>
                                    <td>{{ $call->phone }}</td>
                                    <td>{{ $call->date_call }}</td>
                                    <td>{{ $call->user->name }}</td>
                                    <td>
                                    <div class="btn-group float-right" role="group">
                                        @can('calls.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('calls.show', $call->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('calls.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('calls.edit', $call->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('calls.destroy')
                                        {!! Form::open(['route' => ['calls.destroy', $call->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Llamada {{ $call->id }}')">
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
                    {{ $calls->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


