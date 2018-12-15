@extends('layouts.guest')

@section('content')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">{{ $provider->name }}</h1>
                            <p>Prefijo {{ $provider->prefix }}-  Codigo Iata {{ $provider->code_iata }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ $provider->file }}" class="img-responsive" alt="">
                </div>

                <div class="col-sm-6">

                    <div class="project-name overflow">
                        <h2 class="bold">{{ $provider->name }} </h2>
                    </div>

                    <div>
			            <ul class="nav navbar-nav navbar-default">
			                <li><i class="fas fa-book-open"></i> PROGRAMAS </li>
			                <li>&nbsp<i class="fas fa-dollar-sign"></i> COMISIONES </li>
			                <li>&nbsp<i class="fas fa-hands-helping"></i> CONDICIONES </li>
			                <li>&nbsp<i class="fas fa-gavel"></i> REGULACIONES </li>
			                <li>&nbsp<i class="fas fa-info-circle"></i> OTROS </li>
			            </ul>
			        </div>
					@foreach($items as $item)
					@if($item->expiration_date >= today())
                    <div class="skills overflow">
                        <ul class="nav navbar-nav navbar-default">
                    			
                            	<li>
                            		<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal{{ $item->id }}">
                            			@if($item->type_item->id == 1)
                            			<i class="fas fa-book-open"></i>
					                    @endif
					                    @if($item->type_item->id == 2)
					                    <i class="fas fa-dollar-sign"></i>
					                    @endif
					                    @if($item->type_item->id == 3)
					                    <i class="fas fa-hands-helping"></i>
					                    @endif
					                    @if($item->type_item->id == 4)
					                    <i class="fas fa-gavel"></i>
					                    @endif
					                    @if($item->type_item->id == 5)
					                    <i class="fas fa-info-circle"></i>
					                    @endif
                            			{{ $item->name }}
                            		</button>

								  <!-- Modal -->
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
                            	</li>
                            </ul>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>

        </div>

    </section>
     <!--/#portfolio-information-->

@endsection

