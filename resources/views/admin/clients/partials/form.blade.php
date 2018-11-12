{{ Form::label('tipo_cliente', 'Seleccione Tipo de Cliente') }}
<div class="form-row justify-content-center align-items-center">
	<div class="btn-group form-group btn-group-toggle" data-toggle="buttons">
		<label class="btn btn-secondary">
			{{ Form::radio('tipo_cliente', 'PARTICULAR', false) }}PARTICULAR
		</label>
		
		<label class="btn btn-info">
			{{ Form::radio('tipo_cliente', 'EMPRESA', false) }}EMPRESA
		</label>

		<label class="btn btn-primary">
			{{ Form::radio('tipo_cliente', 'EXTRANJERO', false) }}EXTRANJERO
		</label>
	 </div>
	<div class="invalid-feedback">
		{{$errors->first('tipo_cliente')}}
	</div>
</div>
 
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
	<div class="form-group col-md-4">
		{{ Form::label('rut', 'Rut') }}
		{{ Form::text('rut', null, $attributes = $errors->has('rut') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('rut')}}
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
	<div class="form-group col-md-6">
		{{ Form::label('giro', 'Giro') }}
		{{ Form::text('giro', null, $attributes = $errors->has('giro') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('giro')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('contact', 'Contacto') }}
		{{ Form::text('contact', null, $attributes = $errors->has('contact') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('contact')}}
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
</div>



<!--USUARIO-->
{{ Form::hidden('user_id', Auth::user()->id ) }}


<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
