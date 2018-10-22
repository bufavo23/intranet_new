<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('last_name_f', 'Apllido Paterno') }}
		{{ Form::text('last_name_f', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group col-md-4">
		{{ Form::label('last_name_m', 'Apellido Materno') }}
		{{ Form::text('last_name_m', null, ['class' => 'form-control']) }}
	</div>

</div>


<div class="form-row">
	<div class="form-group col-md-6">
		{{ Form::label('rut', 'Rut') }}
		{{ Form::text('rut', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('pasaporte', 'Pasaporte') }}
		{{ Form::text('pasaporte', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('birth_date', 'Fecha Nacimiento') }}
		{{ Form::date('birth_date', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group col-md-4">
		{{ Form::label('phone', 'Telefono') }}
		{{ Form::text('phone', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email', null, ['class' => 'form-control']) }}
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-12">
		{{ Form::label('address', 'Direccion') }}
		{{ Form::text('address', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('comuna', 'Comuna') }}
		{{ Form::text('comuna', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('city', 'Ciudad') }}
		{{ Form::text('city', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group col-md-4">
		{{ Form::label('country', 'Pais') }}
		{{ Form::text('country', null, ['class' => 'form-control']) }}
	</div>
</div>



	{{ Form::hidden('client_id', 1 ) }} <!--TODO CORREGIR QUE SALGA AUTOMATICO-->


<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
