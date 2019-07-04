@extends('layouts.guest')

@section('content')

<section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="{{ $provider->file }}" class="margin-bottom" alt="">
                <h1 class="margin-bottom">{{ $provider->name }}</h1>
                <p>{{ $provider->description }}</p>
                <p>Prefijo {{ $provider->prefix }}-  Codigo Iata {{ $provider->code_iata }}</p>
            </div>
        </div>
    </div>
</section>
<!--/#about-company-->
    
<section id="services">
<div class="container">
    <div class="row">
    	@foreach($type_items as $type)
			<div class="col-sm-3 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-service">
                <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                    @if($type->id == 1)
                    <i class="fas fa-globe fa-4x"></i>
                    @endif
                    @if($type->id == 2)
                    <i class="fas fa-dollar-sign fa-4x"></i>
                    @endif
                    @if($type->id == 3)
                    <i class="fas fa-hands-helping fa-4x"></i>
                    @endif
                    @if($type->id == 4)
                    <i class="fas fa-gavel fa-4x"></i>
                    @endif
                    @if($type->id == 5)
                    <i class="fas fa-info-circle fa-4x"></i>
                    @endif
                </div>
                <h2>{{ $type->name }}</h2>
                <ul class="element">
            	@foreach($items as $item)
                	@if($item->type_item->id == $type->id)
                	<li class="wow fadeInUp" data-wow-duration="900ms" data-wow-delay="100ms">
                	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal{{ $item->id }}">
                		<i class="fa fa-angle-right"></i> {{ $item->name }}
                	</button>
                	</li>
                	@endif
            	@endforeach
                </ul>
            </div>
        </div>


        				

			
    	@endforeach


      
    </div>
</div>
</section>
<!--/#services-->

@foreach($items as $item)
<div class="modal fade" id="myModal{{ $item->id }}" role="dialog">
<div class="modal-dialog" style="width: 90%;">

  <!-- Modal content-->
  <div class="modal-content" >
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>	
      <h4 class="modal-title">{{ $item->name }}</h4>
    </div>
    <div class="modal-body">
    	 <object data="{{ $item->file }}" type="application/pdf" width="100%" height="600px">
		    <embed src="{{ $item->file }}" type="application/pdf" />
		</object>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
  
</div>
</div>


@endforeach

<section id="action">
    <div class="vertical-center">
         <div class="container">
            <div class="row">
                <div class="action count">
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="7000" data-speed="3000" data-from="0"></h1>   
                        <h3>Regulaciones</h3>
                    </div>
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="12" data-speed="3000" data-from="0"></h1>   
                        <h3>Comisiones</h3> 
                    </div>
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="432" data-speed="3000" data-from="0"></h1> 
                        <h3>Programas</h3>
                    </div>
                    <div class="col-sm-3 text-center wow bounceIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h1 class="timer bold" data-to="145" data-speed="3000" data-from="0"></h1> 
                        <h3>Otros</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

    <section id="company-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="about-us">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2 class="bold">Contacto</h2>
                        <div class="row">
                        	@foreach($contacts as $contact)
                            <div class="col-sm-6">
                                <h3 class="top-zero">{{ $contact->name }}</h3>
                                <p>Email: {{ $contact->email }}</p>
                                <p>Telefono: {{ $contact->phone }}</p>
                                <p>Celular: {{ $contact->cell_phone }}</p>
                                <p>Celular: {{ $contact->section }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#company-information-->

@endsection

