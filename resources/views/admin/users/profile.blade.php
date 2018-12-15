@extends('layouts.app')

@section('content')
<body>
    <div class="container main-secction">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                <img src="https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg">
            </div>
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                            @if(empty($user->image))
                            <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle">
                            @else
							<img src="{{ $user->image }}" class="rounded-circle">
                            @endif
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                            <a href="{{ route('users.profileedit', Auth::user()->id) }}" class="btn btn-success btn-block follow">Editar</a> 
                                                           
                        </div>
                        <div class="row user-detail-row">
                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                <div class="border"></div>
                                <!--<p>FOLLOWER</p>
                                <span>320</span>-->
                            </div>                           
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-12 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                    <h1>{{ $user->name }} {{ $user->last_name }}</h1>
                                    <h5>{{ $user->rut }}</h5>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" role="tablist">
		                                <li class="nav-item">
		                                  <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Perfil del usuario</a>
		                                </li>
		                                <li class="nav-item">
		                                  <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><i class="fas fa-info-circle"></i> + Información </a>
		                                </li>                                                
	                              	</ul>
                                              
	                              <!-- Tab panes -->
	                              <div class="tab-content">
	                                <div role="tabpanel" class="tab-pane fade show active" id="profile">
	                                	<div class="row">

                                            <div class="col-md-2">
                                                <label>Usuario</label>
                                            </div>
                                            <div class="col-md-10">
                                                <p>{{ $user->user }}</p>
                                            </div>
                                        </div>
                                    	<div class="row">

                                            <div class="col-md-2">
                                                <label>Rut</label>
                                            </div>
                                            <div class="col-md-10">
                                                <p>{{ $user->rut }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->name }} {{ $user->last_name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Teléfono</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>12345678</p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Fecha Cumpleaños</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $user->birthday_date }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Redes Sociales</label>
                                            </div>
                                            <div class="col-md-6">
                                            	<a href="{{ $user->facebook }}" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                                            	<a href="{{ $user->twiter }}" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                                            	<a href="{{ $user->linkedin }}" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                                            	<a href="{{ $user->instagram }}" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                                                
                                            </div>
                                        </div>
	                                            
	                                </div>
	                                <div role="tabpanel" class="tab-pane fade" id="buzz">
	                                        <div class="row">
	                                            <div class="col-md-2">
	                                                <label>Sobre MI</label>
	                                            </div>
	                                            <div class="col-md-6">
	                                                <p>{{ $user->about_me }}</p>
	                                            </div>
	                                        </div>
	                                </div>
	                                
	                              </div>
                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



@endsection