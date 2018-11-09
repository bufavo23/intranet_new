<div class="form-group">
	{{ Form::label('name', 'Nombre del Cliente') }}
	{{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('name')}}
	</div>
</div>

<div class="form-group">
	{{ Form::label('phone', 'Telefono del Cliente') }}
	{{ Form::text('phone', null, $attributes = $errors->has('phone') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('phone')}}
	</div>
</div>

<div class="form-group">
	@if(empty($call->date_call))
		{{ Form::label('date_call', 'Fecha Llamada') }}
		{{ Form::date('date_call', '', $attributes = $errors->has('date_call') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	@else
		{{ Form::label('date_call', 'Fecha Llamada') }}
		{{ Form::date('date_call', \Carbon\Carbon::parse($call->date_call)->format('Y-m-d'), $attributes = $errors->has('date_call') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	@endif		

	<div class="invalid-feedback">
	{{$errors->first('date_call')}}
	</div>
</div>

<div class="form-group">
	{{ Form::label('user_id', 'Vendedor Asignado') }}
	{{ Form::select('user_id', $user, null, $attributes = $errors->has('user_id') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
	<div class="invalid-feedback">
	{{$errors->first('user_id')}}
	</div>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>

