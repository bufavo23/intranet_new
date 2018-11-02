<div class="form-group">
	{{ Form::label('name', 'Nombre del Cliente') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('phone', 'Telefono del Cliente') }}
	{{ Form::text('phone', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('date_call', 'Fecha Llamada') }}
	<!--{{ Form::text('date_call', null, ['class' => 'form-control']) }}-->
	{{ Form::date('date_call', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('user_id', 'Vendedor Asignado') }}
	{{ Form::select('user_id', $user, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
