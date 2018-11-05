@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-print fa-3x"></i>
                        </a>
                    </li>
                </div>
                <div class="card-body">
                    <h3>Pedido Devolucion {{ $refund->id }}</h3>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="col-md-6 col-sm-6 float-left">
                        <strong>Cliente : </strong>
                        {{ $refund->pax_nombre }} {{ $refund->pax_apellido }}<br>
                        <strong>Cliente Factura : </strong>
                        {{ $refund->cliente_factura }}<br>
                        <strong>Negocio : </strong>
                        {{ $refund->negocio }}<br>
                        <strong>Factura : </strong>
                        {{ $refund->factura }}<br>
                        <strong>Vendedor : </strong>
                        {{ $refund->users->user }}
                    </div>
                    <div class="col-md-6 col-sm-6 float-right">
                        <strong>Fecha Creacion : </strong> {{ $refund->created_at }}<br>
                        <strong>Estado Devolucion : </strong>{{ $refund->statu_sends->name }}</span><br>
                        <strong>Estado Envio : </strong> {{ $refund->status->name }}<br>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Operador</th>
                                    <th>N° TKT/Confirmación</th>
                                    <th>Tramo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $refund->providers->name }}</td>
                                    <td>{{ $refund->providers->prefix }}-{{ $refund->n_tkt }}</td>
                                    <td>{{ $refund->tramo }}</td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection