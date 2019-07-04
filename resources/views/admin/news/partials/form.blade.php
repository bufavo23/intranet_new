<div class="form-group">
	{{ Form::label('title', 'Título de Noticia') }}
	{{ Form::text('title', null, $attributes = $errors->has('title') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
		{{$errors->first('title')}}
	</div>
</div>

<div class="form-group">
	{{ Form::label('subtitle', 'Subtítulo') }}
	{{ Form::text('subtitle', null, $attributes = $errors->has('subtitle') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
			{{$errors->first('subtitle')}}
		</div>
</div>

<div class="form-group">
	{{ Form::label('news', 'Descripción') }}
	{{ Form::textarea('news', null, $attributes = $errors->has('news') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
		{{$errors->first('news')}}
	</div>
</div>


<div class="form-group">
	{{ Form::label('provider_id', 'Proveedor Asignado') }}

	@if(empty($id))
		{{ Form::select('provider_id', ['0' => 'Seleccione un proveedor'] + $provider, null, $attributes = $errors->has('provider_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	@else
		{{ Form::select('provider_id', ['0' => 'Seleccione un proveedor'] + $provider, $id, $attributes = $errors->has('provider_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	@endif
	
	<div class="invalid-feedback">
		{{$errors->first('provider_id')}}
	</div>
</div>

<div class="form-group">
	{{ Form::label('type', 'Tipo de noticia') }}
	{{ Form::select('type', ['0' => 'Seleccione un tipo',
							 'INFORMATIVA' => 'INFORMATIVA',
							 'URGENTE' => 'URGENTE',
							 'COMISIONES' => 'COMISIONES',
							 'REGULACIONES' => 'REGULACIONES',
							 'REPORTES' => 'REPORTES',
							 ], null, $attributes = $errors->has('type') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
		{{$errors->first('type')}}
	</div>
</div>

<div class="form-group">
	{{ Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control', 'readonly']) }}
</div>



<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
