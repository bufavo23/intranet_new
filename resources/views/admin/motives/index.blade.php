@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Motivo Devoluciones
                    @can('motives.create')
                        <a href="{{ route('motives.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($motives as $motive)
                                <tr>
                                    <td>{{ $motive->id }}</td>
                                    <td>{{ $motive->name }}</td>
                                    <td>{{ $motive->description }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('motives.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('motives.show', $motive->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('motives.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('motives.edit', $motive->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('motives.destroy')
                                        {!! Form::open(['route' => ['motives.destroy', $motive->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Motivo {{ $motive->id }}')">
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
                    {{ $motives->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

