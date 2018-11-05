<div class="form-group">
	{{ Form::label('title', 'Título de Noticia') }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('subtitle', 'Subtítulo') }}
	{{ Form::text('subtitle', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('news', 'Descripción') }}
	{{ Form::textarea('news', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('provider_id', 'Proveedor Asignado') }}
	{{ Form::select('provider_id', $provider, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('type', 'Tipo de noticia') }}
	{{ Form::select('type', ['INFORMATIVA' => 'INFORMATIVA',
							 'URGENTE' => 'URGENTE',
							 'COMISIONES' => 'COMISIONES',
							 'REGULACIONES' => 'REGULACIONES',
							 'REPORTES' => 'REPORTES',
							 ], null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control', 'readonly']) }}
</div>



<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
