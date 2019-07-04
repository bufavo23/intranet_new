@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="text-center">
            
            <div class="btn-group" role="group">
                @can('contacts.create')
                    <a href="{{ route('contacts.create', $provider->id) }}" class="btn btn-primary">Crear Contacto</a>
                @endcan
                @can('itemmanual.create')
                    <a href="{{ route('itemmanual.create', $provider->id) }}" class="btn btn-primary">Crear Item Manual</a>
                @endcan
                @can('news.create')
                    <a href="{{ route('news.create', $provider->id ) }}" class="btn btn-primary">Crear Noticiar</a>
                @endcan
            </div>
            
        </div>
    </div>

    <div class="col-md-12 mt-3">
        <div class="row justify-content-center">
            
            <div class="col-md-3">
                <div class="card">
                   <div class="card-header">
                        <strong>ID </strong>{{ $provider->id }} <strong> Nombre </strong>{{ $provider->name }}
                    </div> 
                  <img class="card-img" src="{{ $provider->file }}">
                </div>
            </div>
             <div class="col-md-3">
                <div class="card">
                   <div class="card-header">
                        <strong>Regulaciones </strong>
                    </div> 
                    <div class="card-body">
                        @foreach($regulations as $regulation)
                        <p class="card-text"><strong>Nombre </strong>{{ $regulation->name }}</p>
                        <hr class="hr-warning" />
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                   <div class="card-header">
                        <strong>Comisiones </strong>
                    </div> 
                    <div class="card-body">
                        @foreach($comitions as $comition)
                        <p class="card-text"><strong>Nombre </strong>{{ $comition->name }}</p>
                        <hr class="hr-warning" />
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                   <div class="card-header">
                        <strong>Condiciones </strong>
                    </div> 
                    <div class="card-body">
                        @foreach($conditions as $condition)
                        <p class="card-text"><strong>Nombre </strong>{{ $condition->name }}</p>
                        <hr class="hr-warning" />
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">
                            Detalle
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Prefijo </strong>{{ $provider->prefix }}</p>
                        <hr class="hr-warning" />
                        <p class="card-text"><strong>Codigo Iata </strong>{{ $provider->code_iata }}</p>
                        <hr class="hr-warning" />
                        <p class="card-text"><strong>Descripcion </strong>{{ $provider->description }}</p>
                        <hr class="hr-warning" />
                        <p class="card-text"><strong>Fee Basico </strong>{{ $provider->fee_basic }} %</p>
                        <hr class="hr-warning" />
                        <p class="card-text"><strong>Fee Bussinnes </strong>{{ $provider->fee_bussinnes }} %</p>
                        <hr class="hr-warning" />
                        <p class="card-text"><strong>Estado </strong>{{ $provider->activo }}</p>
                        <hr class="hr-warning" />
                        <p class="card-text"><strong>Tipo Proveedor </strong>{{ $provider->type_provider->name }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card">
                    <div class="card-header">
                            Contactos
                    </div>
                    <div class="card-body">
                        @foreach($contacts as $contact)
                        <p class="card-text"><strong>Nombre </strong>{{ $contact->name }}</p>
                        <p class="card-text"><strong>Email </strong>{{ $contact->email }}</p>
                        <hr class="hr-warning" />
                        @endforeach
                    </div>
                </div>
            </div>



           

            
        </div>
    </div>
    
</div>
@endsection