<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('pax_nombre', 'Nombre') }}
		{{ Form::text('pax_nombre', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('pax_apellido', 'Apellido') }}
		{{ Form::text('pax_apellido', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('cliente_factura', 'Cliente Facturado') }}
		{{ Form::text('cliente_factura', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('negocio', 'Negocio') }}
		{{ Form::text('negocio', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('factura', 'Factura') }}
		{{ Form::text('factura', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('n_tkt', 'Numero Tkt o Confirmacion') }}
		{{ Form::text('n_tkt', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('tramo', 'Tramo') }}
		{{ Form::text('tramo', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('valor_servicio', 'Valor Servicio') }}
		{{ Form::text('valor_servicio', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('tax', 'Tax') }}
		{{ Form::text('tax', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('multa', 'Multa') }}
		{{ Form::text('multa', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('moneda', 'Moneda') }}<br>
		<div class="btn-group btn-group-toggle" data-toggle="buttons">
			
			<label class="btn btn-light">
				{{ Form::radio('moneda', 'CLP', ['class' => 'form-control'] )  }}CLP
			</label>
			<label class="btn btn-light">
				{{ Form::radio('moneda', 'USD', ['class' => 'form-control'])  }}USD
			</label>
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('providers_id', 'Proveedor') }}
		{{ Form::select('providers_id', $provider, null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group  col-md-4">
		@if(empty($refund->fecha_limite_envio))
			{{ Form::label('fecha_limite_envio', 'Fecha Limite Envio') }}
			{{ Form::date('fecha_limite_envio', now(), ['class' => 'form-control']) }}	
		@else
			{{ Form::label('fecha_limite_envio', 'Fecha Limite Envio') }}
			{{ Form::date('fecha_limite_envio', \Carbon\Carbon::parse($refund->fecha_limite_envio)->format('Y-m-d'), ['class' => 'form-control']) }}
		@endif
		
	</div>

	
	<div class="form-group col-md-6">
		{{ Form::label('regulaciones', 'Regulaciones') }}
		{{ Form::textarea('regulaciones', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group  col-md-6">
		{{ Form::label('file', 'Regulaciones Archivo') }}<br>
		{{ Form::file('file', null, ['class' => 'form-control']) }}
	</div>

	
	<div class="form-group col-md-6">
		{{ Form::label('motives_id', 'Motivo') }}
		{{ Form::select('motives_id', $motive, null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('destinations_id', 'Destino') }}
		{{ Form::select('destinations_id', $destination, null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-12">
		{{ Form::label('obs_ventas', 'Observaciones') }}
		{{ Form::textarea('obs_ventas', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="form-group">
	{{ Form::hidden('users_id', Auth::user()->id, ['class' => 'form-control', 'readonly']) }}
</div>
<div class="form-group">
	{{ Form::hidden('statu_sends_id', 1, ['class' => 'form-control', 'readonly']) }}
</div>
<div class="form-group">
	{{ Form::hidden('status_id', 1, ['class' => 'form-control', 'readonly']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
