<div class="form-row">
	<div class="form-group col-md-6">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('description', 'Descripcion') }}
		{{ Form::text('description', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('type_item_id', 'Tipo') }}
		{{ Form::select('type_item_id', $type_item, null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group col-md-6">
		<label class="custom-file">
			{{ Form::file('file', null, ['class' => 'form-custom-file-input']) }}
			<span class="custom-file-control"></span>
		</label>
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
