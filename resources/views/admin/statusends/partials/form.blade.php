<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('name')}}
	</div>
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripcion') }}
	{{ Form::text('description', null, $attributes = $errors->has('description') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('description')}}
	</div>
</div>


<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>