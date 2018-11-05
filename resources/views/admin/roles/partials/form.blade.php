<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'Url Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripcion') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Permiso Especial</h3>
<div class="form-group">
	<label>{{ Form::radio('especial', 'all-access') }} Acceso total</label>
	<label>{{ Form::radio('especial', 'no-access') }} Sin Acceso</label>
</div>

<h3>Lista Permisos</h3>

<div class="form-group">
	@foreach($permissions as $permission)
		<ul class="list-inline-item list-unstyled col-sm-3 ">
			<li>
				<label>
					{{ Form::checkbox('permissions[]', $permission->id, null)}}
					{{ $permission->name }}
				</label>
			</li>
		</ul>
	@endforeach
</div>



<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>