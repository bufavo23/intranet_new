@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Noticias
                    @can('news.create')
                        <a href="{{ route('news.create', 0) }}" class="btn btn-sm btn-primary float-right"><i style="color:white;" class="fa fa-plus"></i> Agregar</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Autor</th>
                                <th>Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($news as $news)
                                <tr>
                                    <td>{{ $news->id }}</td>
                                    <td>{{ $news->title }}</td>
                                    <td>{{ $news->subtitle }}</td>
                                    <td>{{ $news->news }}</td>
                                    <td>{{ $news->type }}</td>
                                    <td>{{ $news->user->name }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('news.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('news.show', $news->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('news.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('news.edit', $news->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('news.destroy')
                                        {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Llamada {{ $news->id }}')">
                                                <i class="fa fa-trash" style="color: blue"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </div>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
