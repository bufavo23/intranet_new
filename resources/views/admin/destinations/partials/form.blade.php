<!--{!! Form::email('email', null, $attributes = $errors->has('email') ? array('placeholder' => 'Email', 'class' => 'form-control has-error') : array('placeholder' => 'Email', 'class' => 'form-control')) !!} 
{{$errors->first('email')}}-->



<div class="form-group">
	{{ Form::label('name', 'Nombre del Destino') }}
	{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('name')}}
	</div>
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripcion del Destino') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>