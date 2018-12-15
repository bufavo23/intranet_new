@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Sistema Gestion Calidad
                    @can('sgc.create')
                        <a href="{{ route('sgcs.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body table-responsive">
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
                            @foreach($sgcs as $sgc)
                                <tr>
                                    <td>{{ $sgc->id }}</td>
                                    <td>{{ $sgc->name }}</td>
                                    <td>{{ $sgc->description }}</td>
                                    <td>
                                        <div class="btn-group float-right" role="group">
                                        @can('sgcs.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('sgcs.show', $sgc->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('sgcs.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('sgcs.edit', $sgc->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('sgcs.destroy')
                                        {!! Form::open(['route' => ['sgcs.destroy', $sgc->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger" onclick="return confirm('Estas Seguro eliminar Sgc {{ $sgc->id }}')">
                                                <i class="far fa-trash-alt" style="color: blue"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </div>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $sgcs->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
