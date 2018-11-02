<div class="form-group">
	{{ Form::label('user', 'Nombre del Usuario') }}
	{{ Form::text('user', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Lista de Roles</h3>
<div class="form-group">
	<ul class="list-unstyle">
		@foreach($roles as $role)
			<li>
				<label>
					{{ Form::checkbox('roles[]', $role->id, null)}}
					{{ $role->name }}
					<em>({{ $role->description ?: 'Sin Descripción' }})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>



<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>