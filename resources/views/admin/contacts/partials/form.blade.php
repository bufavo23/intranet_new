<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('phone', 'Telefono') }}
		{{ Form::text('phone', null, ['class' => 'form-control']) }}
	</div>



	<div class="form-group col-md-6">
		{{ Form::label('cell_phone', 'Celular') }}
		{{ Form::text('cell_phone', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('section', 'Seccion') }}
		{{ Form::text('section', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::label('provider_id', 'Vendedor Asignado') }}
		{{ Form::select('provider_id', $provider, null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
