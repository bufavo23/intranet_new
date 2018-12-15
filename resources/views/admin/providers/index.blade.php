@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Proveedores
                    @can('providers.create')
                        <a href="{{ route('providers.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body table-responsive">
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Comision Base</th>
                                <th scope="col">Comision Bussines</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($providers as $provider)
                                <tr>
                                    <td scope="row">{{ $provider->id }}</td>
                                    <td><img src="{{ asset($provider->file) }}" alt="" width="70px" height="65px"></td>
                                    <td>{{ $provider->name }}</td>
                                    <td>{{ $provider->fee_basic }} %</td>
                                    <td>{{ $provider->fee_bussinnes }} %</td>
                                    <td>{{ $provider->activo }}</td>
                                    <td>{{ $provider->type_provider->name }}</td>
                                    
                                    <td>
                                    <div class="btn-group" role="group">
                                        @can('providers.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('providers.show', $provider->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('providers.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('providers.edit', $provider->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('providers.destroy')
                                        {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </div>
                                    </td>    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $providers->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
