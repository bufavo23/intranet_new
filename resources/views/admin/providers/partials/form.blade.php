
<div class="form-row">
	<div class="form-group col-md-4">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('name')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('prefix', 'Prefijo') }}
		{{ Form::text('prefix', null, $attributes = $errors->has('prefix') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('prefix')}}
		</div>
	</div>

	<div class="form-group col-md-4">
		{{ Form::label('code_iata', 'Codigo Iata') }}
		{{ Form::text('code_iata', null, $attributes = $errors->has('code_iata') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('code_iata')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('fee_basic', 'Fee Basico') }}
		{{ Form::text('fee_basic', null, $attributes = $errors->has('fee_basic') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('fee_basic')}}
		</div>
	</div>

		<div class="form-group col-md-6">
		{{ Form::label('fee_bussinnes', 'Fee Bussines') }}
		{{ Form::text('fee_bussinnes', null, $attributes = $errors->has('fee_bussinnes') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('fee_bussinnes')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('activo', 'Estado') }}
		{{ Form::select('activo', ['0'=>'Seleccione', 'ACTIVO' => 'ACTIVO', 'DESACTIVADO' => 'DESACTIVADO'], null, $attributes = $errors->has('activo') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('activo')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('type_provider_id', 'Tipo Proveedor') }}
		{{ Form::select('type_provider_id',['0' => 'Seleccione un proveedor'] + $type_provider, null, $attributes = $errors->has('type_provider_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('type_provider_id')}}
		</div>
	</div>

	<div class="form-group  col-md-12">
		{{ Form::label('file', 'Logo') }}
		{{ Form::file('file', null, $attributes = $errors->has('file') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('file')}}
		</div>
	</div>

	<div class="form-group col-md-12">
		{{ Form::label('description', 'Descripcion') }}
		{{ Form::textarea('description', null, $attributes = $errors->has('description') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('description')}}
		</div>
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>


	

