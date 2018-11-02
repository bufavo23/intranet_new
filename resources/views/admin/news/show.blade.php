@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle Noticia</div>

                <div class="card-body">
                    <p><strong>Título: </strong> {{ $news->title }}</p>
                    <p><strong>Subtítulo: </strong> {{ $news->subtitle }}</p>
                    <p><strong>Descripción: </strong> {{ $news->news }}</p>
                    <p><strong>Tipo: </strong>     
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

                                    </p>             
                    <p><strong>Autor: </strong> {{ $news->user->name }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection