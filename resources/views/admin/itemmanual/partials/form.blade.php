	<div class="form-row">
	<div class="form-group col-md-6">
		{{ Form::label('name', 'Nombre') }}
		{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('name')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('description', 'Descripcion') }}
		{{ Form::text('description', null, $attributes = $errors->has('description') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('description')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('type_item_id', 'Tipo') }}
		{{ Form::select('type_item_id', ['0' => 'Seleccione'] +$type_items, null, $attributes = $errors->has('type_item_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('type_item_id')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('provider_id', 'Proveedor') }}
		{{ Form::select('provider_id', ['0' => 'Seleccione'] + $providers, null, $attributes = $errors->has('provider_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
		<div class="invalid-feedback">
			{{$errors->first('provider_id')}}
		</div>
	</div>

	<div class="form-group col-md-6">
		{{ Form::label('file', 'Archivo') }}
		<label class="custom-file">
			{{ Form::file('file', null, ['class' => 'form-custom-file-input']) }}
			<span class="custom-file-control"></span>
		</label>
	</div>

	<div class="form-group  col-md-6">
		@if(empty($item->expiration_date))
			{{ Form::label('expiration_date', 'Valido Hasta') }}
			{{ Form::date('expiration_date', null, ['class' => 'form-control']) }}	
		@else
			{{ Form::label('expiration_date', 'Valido Hasta') }}
			{{ Form::date('expiration_date', \Carbon\Carbon::parse($item->expiration_date)->format('Y-m-d'), ['class' => 'form-control']) }}
		@endif
		
	</div>


</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
