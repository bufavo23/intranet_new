<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('prefix', 'Prefijo') }}
		{{ Form::text('prefix', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('code_iata', 'Codigo Iata') }}
		{{ Form::text('code_iata', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('fee_basic', 'Fee Basico') }}
		{{ Form::text('fee_basic', null, ['class' => 'form-control']) }}
	</div>

		<div class="form-group col-md-6">
		{{ Form::label('fee_bussinnes', 'Fee Bussines') }}
		{{ Form::text('fee_bussinnes', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('activo', 'Tipo Proveedor') }}
		{{ Form::select('activo', ['ACTIVO' => 'ACTIVO', 'DESACTIVADO' => 'DESACTIVADO'], null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('type_provider_id', 'Tipo Proveedor') }}
		{{ Form::select('type_provider_id', $type_provider, null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group  col-md-12">
		{{ Form::label('file', 'Logo') }}
		{{ Form::file('file', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-12">
		{{ Form::label('description', 'Descripcion') }}
		{{ Form::textarea('description', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
