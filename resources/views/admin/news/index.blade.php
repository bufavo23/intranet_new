@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Noticias
                    @can('news.create')
                        <a href="{{ route('news.create') }}" class="btn btn-sm btn-primary float-right"><i style="color:white;" class="fa fa-plus"></i> Agregar</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Autor</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($news as $news)
                                <tr>
                                    <td>{{ $news->id }}</td>
                                    <td>{{ $news->title }}</td>
                                    <td>{{ $news->subtitle }}</td>
                                    <td>{{ $news->news }}</td>

                                    @if ($news->type == null || $news->type == 0 )
                                    <td>No válido</td>
                                    @endif  

                                    @if ($news->type == 1)
                                    <td> Urgente</td>
                                    @endif  
                                    
                                    @if ($news->type == 2)
                                    <td>Informativa</td>
                                    @endif

                                    @if ($news->type == 3)
                                    <td>Comisiones</td>
                                    @endif

                                    @if ($news->type == 4)
                                    <td>Regulaciones</td>
                                    @endif  

                                    @if ($news->type == 5)
                                    <td>Reportes</td>
                                    @endif  

                                    <td>{{ $news->user->name }}</td>
                                    <td>
                                        @can('news.show')
                                        <a href="{{ route('news.show', $news->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        @endcan

                                    </td>
                                    <td>
                                        @can('news.edit')
                                        <a href="{{ route('news.edit', $news->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                        @endcan
                                        
                                    </td>
                                    <td>
                                        @can('news.destroy')
                                        {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                <i style="color:white;" class="fa fa-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                        
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
