@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Noticias</div>

                <div class="card-body">
                    
                    {!! Form::model($news, ['route' => ['news.update', $news->id], 'method' => 'PUT']) !!}

						@include('admin.news.partials.form')


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection