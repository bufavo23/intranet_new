@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header  text-right">
                    <a href="#" onclick="window.print();">
                        <i class="fa fa-print fa-3x"></i>
                    </a>
                </div>
                <div class="card-body">
                    <h3>Pedido Devolucion {{ $refund->id }}</h3>
                    <p>Fecha Impresion {{ now()->format('d/m/Y H:i') }}</p>
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
                        <strong>Fecha Creacion : </strong> {{ ($refund->created_at)->format('d/m/Y') }}<br>
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
                <div class="card-footer">
                        <div class="col-md-6 float-left">
                            <p>{{ $refund->regulaciones }}</p>      
                        </div>

                        <div class="col-md-6 float-right text-right">
                            <p><b>Servicio: </b>{{ $refund->moneda }} {{ $refund->valor_servicio }}</p>
                            <p><b>Tax: </b>{{ $refund->moneda }} {{ $refund->tax }}</p>
                            <p><b>Multa:  </b>{{ $refund->moneda }} {{ $refund->multa }}</p>
                            <p><b>Devolucion: </b>{{ $refund->moneda }} {{ ($refund->valor_servicio+$refund->tax-$refund->multa) }}</p>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection