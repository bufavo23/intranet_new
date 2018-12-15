<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('name')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('last_name_f', 'Apllido Paterno') }}
		{{ Form::text('last_name_f', null, $attributes = $errors->has('last_name_f') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('last_name_f')}}
		</div>
	</div>
	<div class="form-group col-md-4">
		{{ Form::label('last_name_m', 'Apellido Materno') }}
		{{ Form::text('last_name_m', null, $attributes = $errors->has('last_name_m') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('last_name_m')}}
		</div>
	</div>

</div>


<div class="form-row">
	<div class="form-group col-md-6">
		{{ Form::label('rut', 'Rut') }}
		{{ Form::text('rut', null, $attributes = $errors->has('rut') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('rut')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('pasaporte', 'Pasaporte') }}
		{{ Form::text('pasaporte', null, $attributes = $errors->has('pasaporte') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('pasaporte')}}
		</div>
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('birth_date', 'Fecha Nacimiento') }}
		{{ Form::date('birth_date', null, $attributes = $errors->has('birth_date') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('birth_date')}}
		</div>
	</div>
	<div class="form-group col-md-4">
		{{ Form::label('phone', 'Telefono') }}
		{{ Form::text('phone', null, $attributes = $errors->has('phone') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('phone')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null, $attributes = $errors->has('email') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('email')}}
		</div>
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-12">
		{{ Form::label('address', 'Direccion') }}
		{{ Form::text('address', null, $attributes = $errors->has('address') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('address')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('comuna', 'Comuna') }}
		{{ Form::text('comuna', null, $attributes = $errors->has('comuna') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('comuna')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('city', 'Ciudad') }}
		{{ Form::text('city', null, $attributes = $errors->has('city') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('city')}}
		</div>
	</div>
	<div class="form-group col-md-4">
		{{ Form::label('country', 'Pais') }}
		{{ Form::text('country', null, $attributes = $errors->has('country') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('country')}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('client_id', 'Cliente') }}
		{{ Form::select('client_id', ['0' => 'Seleccione un Cliente'] + $client , null, $attributes = $errors->has('client_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('client_id')}}
		</div>
	</div>

</div>



<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
