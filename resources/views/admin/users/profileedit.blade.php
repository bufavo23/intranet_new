@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Profile Usuarios</div>

                <div class="card-body">
                    
                    {!! Form::model($user, ['route' => ['users.profileupdate', $user->id], 'method' => 'PUT', 'files' => true]) !!}

                    <div class="form-row">

						<div class="form-group col-md-4">
                            {{ Form::label('user', 'Usuario') }}
                            {{ Form::text('user', null, $attributes = $errors->has('user') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('user')}}
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('name', 'Nombre') }}
                            {{ Form::text('name', null, $attributes = $errors->has('name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('name')}}
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('last_name', 'Apellido') }}
                            {{ Form::text('last_name', null, $attributes = $errors->has('last_name') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('last_name')}}
                            </div>
                        </div>
                    
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            {{ Form::label('rut', 'Rut') }}
                            {{ Form::text('rut', null, $attributes = $errors->has('rut') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('rut')}}
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            {{ Form::label('email', 'Email') }}
                            {{ Form::text('email', null, $attributes = $errors->has('email') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('email')}}
                            </div>
                        </div>

                        <div class="form-group  col-md-4">
                            {{ Form::label('birthday_date', 'Fecha nacimiento') }}
                            {{ Form::date('birthday_date', \Carbon\Carbon::parse($user->birthday_date)->format('Y-m-d'), $attributes = $errors->has('email') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('birthday_date')}}
                            </div>
                        </div>
                    
                    </div>

                    <div class="form-group  col-md-6">
                        {{ Form::label('image', 'Imagen') }}<br>
                        {{ Form::file('image', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            {{ Form::label('facebook', 'Facebook') }}
                            {{ Form::text('facebook', null, $attributes = $errors->has('facebook') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('facebook')}}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            {{ Form::label('twiter', 'Twiter') }}
                            {{ Form::text('twiter', null, $attributes = $errors->has('twiter') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('twiter')}}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            {{ Form::label('linkedin', 'Linkedin') }}
                            {{ Form::text('linkedin', null, $attributes = $errors->has('linkedin') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('linkedin')}}
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            {{ Form::label('instagram', 'Instagram') }}
                            {{ Form::text('instagram', null, $attributes = $errors->has('instagram') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                            <div class="invalid-feedback">
                            {{$errors->first('instagram')}}
                            </div>
                        </div>                    
                    </div>

                    <div class="form-group">
                        {{ Form::label('about_me', 'Sobre Mi') }}
                        {{ Form::textarea('about_me', null, $attributes = $errors->has('about_me') ? ['class' => 'form-control is-invalid'] : ['class' => 'form-control']) }}
                        <div class="invalid-feedback">
                        {{$errors->first('about_me')}}
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::submit('Editar', null, ['class' => 'btn btn-sm btn-primary']) }}
                    </div>



                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection