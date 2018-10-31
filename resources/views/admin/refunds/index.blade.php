@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Control Devoluciones
                    @can('refunds.create')
                        <a href="{{ route('refunds.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">PD</th>
                                <th scope="col">Negocio</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">N° TKT</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Operado Por</th>
                                <th scope="col">Vendedor</th>
                                <th scope="col">Estado Env.</th>
                                <th scope="col">Estado Dev.</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($refunds as $refund)
                                <tr>
                                    <td scope="row">{{ $refund->id }}</td>
                                    <td>{{ $refund->negocio }}</td>
                                    <td>{{ $refund->pax_nombre }} {{ $refund->pax_apellido }}</td>
                                    <td>{{ $refund->n_tkt }}</td>
                                    <td>{{ $refund->valor_servicio + $refund->tax - $refund->multa }}</td>
                                    <td>{{ $refund->providers->name }} </td>
                                    <td>{{ $refund->users->user }} </td>
                                    <td>{{ $refund->statu_sends->name }}</td>
                                    <td>{{ $refund->status->name }}</td>
                                    
                                    <td>
                                        @can('refunds.show')
                                        <a href="{{ route('refunds.show', $refund->id) }}" class="btn btn-sm btn-light">Ver</a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('refunds.edit')
                                        <a href="{{ route('refunds.edit', $refund->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('refunds.destroy')
                                        {!! Form::open(['route' => ['refunds.destroy', $refund->id], 'method' => 'DELETE']) !!}
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
                    {{ $refunds->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
