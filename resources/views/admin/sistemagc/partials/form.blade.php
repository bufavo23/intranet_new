
<div class="form-group">
	{{ Form::label('name', 'Nombre del SGC') }}
	{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('name')}}
	</div>
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripcion del SGC') }}
	{{ Form::text('description', null, $attributes = $errors->has('description') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('description')}}
	</div>
</div>

<div class="form-group col-md-6">
		{{ Form::label('file', 'Archivo') }}
		<label class="custom-file">
			{{ Form::file('file', null, ['class' => 'form-custom-file-input']) }}
			<span class="custom-file-control"></span>
		</label>
	</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>