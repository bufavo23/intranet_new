@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Contactos
                    @can('contacts.create')
                        <a href="{{ route('contacts.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>                        
                    @endcan
                </div>

                <div class="card-body">
                    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Seccion</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Acciones</th>
                            </tr>   
                        </thead>

                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td scope="row">{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->cell_phone }}</td>
                                    <td>{{ $contact->section }}</td>
                                    <td>{{ $contact->provider->name }}</td>
                                    
                                    <td>
                                       <div class="btn-group float-right" role="group">
                                        @can('contacts.show')
                                        <button type="button" class="btn">
                                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                        </button>
                                        @endcan

                                        @can('contacts.edit')
                                        <button type="button" class="btn btn-warning">
                                            <a href="{{ route('contacts.edit', $contact->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                         </button>
                                        @endcan
                                        
                                        @can('contacts.destroy')
                                        {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-lg btn-danger">
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
                    {{ $contacts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

