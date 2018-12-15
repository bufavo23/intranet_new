<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('name')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null, $attributes = $errors->has('email') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('email')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('phone', 'Telefono') }}
		{{ Form::text('phone', null, $attributes = $errors->has('phone') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('phone')}}
		</div>
	</div>



	<div class="form-group col-md-6">
		{{ Form::label('cell_phone', 'Celular') }}
		{{ Form::text('cell_phone', null, $attributes = $errors->has('cell_phone') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('cell_phone')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('section', 'Seccion') }}
		{{ Form::text('section', null, $attributes = $errors->has('section') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('section')}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('provider_id', 'Proveedor') }}
		{{ Form::select('provider_id', $provider, null, $attributes = $errors->has('provider_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('provider_id')}}
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
