{{ Form::label('tipo_cliente', 'Seleccione Tipo de Cliente') }}
<div class="form-row">
	<div class="btn-group form-group btn-group-toggle" data-toggle="buttons">
		<label class="btn btn-primary">
			{{ Form::radio('tipo_cliente', 'PARTICULAR', 'cheked') }}PARTICULAR
		</label>
		
		<label class="btn btn-primary">
			{{ Form::radio('tipo_cliente', 'EMPRESA') }}EMPRESA
		</label>

		<label class="btn btn-primary">
			{{ Form::radio('tipo_cliente', 'EXTRANJERO') }}EXTRANJERO
		</label>
	 </div>
</div>
 
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
	<div class="form-group col-md-4">
		{{ Form::label('rut', 'Rut') }}
		{{ Form::text('rut', null, ['class' => 'form-control']) }}
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
	<div class="form-group col-md-6">
		{{ Form::label('giro', 'Giro') }}
		{{ Form::text('giro', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('contact', 'Contacto') }}
		{{ Form::text('contact', null, ['class' => 'form-control']) }}
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



<!--tipo_cliente-->




	{{ Form::hidden('user_id', Auth::user()->id ) }}


<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
