@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            

            <div class="card text-black">
              <img class="card-img" src="{{ $items->provider->file }}" alt="Card image" width="100%" height="500px">
              <div class="card-img-overlay">
                <h5 class="card-title">{{ $items->name }}</h5>
                <p class="card-text"> Descripcion : {{ $items->description }}</p>
                <p class="card-text">Tipo : {{ $items->type_item->name }}</p>
                <p class="card-text"> Vista Previa :
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $items->id }}">{{ $items->name }}</button>

                </p>

                

              </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal{{ $items->id }}" role="dialog">
<div class="modal-dialog" style="width: 90%;">

  <!-- Modal content-->
  <div class="modal-content" >
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button> 
      <h4 class="modal-title">{{ $items->name }}</h4>
    </div>
    <div class="modal-body">
         <object data="{{ $items->file }}" type="application/pdf" width="100%" height="600px">
            <embed src="{{ $items->file }}" type="application/pdf" />
        </object>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  
</div>
</div>
@endsection