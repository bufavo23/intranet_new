<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="nav navbar-nav"> <!--navbar-nav mr-auto-->
                        @can('refunds.index' or 'destinations.index' or 'statusends.index' or 'status.index' or 'motives.index')
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Devoluciones<span class="caret"></span></a>

                          <ul class="dropdown-menu">

                            @can('refunds.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('refunds.index') }}">Devoluciones</a>
                                </li>
                            @endcan
                            
                            @can('destinations.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('destinations.index') }}">Destinos</a>
                                </li>
                            @endcan

                            @can('statusends.index')  
                                <li class="nav-item">  
                                    <a class="nav-link" href="{{ route('statusends.index') }}">Estado Envio</a>
                                </li>
                            @endcan

                            @can('status.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('status.index') }}">Estado</a>
                                </li>
                            @endcan

                            @can('motives.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('motives.index') }}">Motivo</a>
                                </li>
                            @endcan
                            
                            
                          </ul>
                        </li>
                        @endcan


                        @can('clients.index')
                        <li class="dropdown">
                            &nbsp &nbsp 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Clientes<span class="caret"></span></a>

                            <ul class="dropdown-menu">
                            @can('clients.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('clients.index') }}">Clientes</a>
                            </li>
                            @endcan

                            @can('passengers.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('passengers.index') }}">Pasajeros</a>
                            </li>
                            @endcan
                            </ul>
                        </li>
                        @endcan

                        @can('providers.index' or 'contacts.index' )
                        <li class="dropdown">
                            &nbsp &nbsp 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proveedores<span class="caret"></span></a>

                            <ul class="dropdown-menu">

                            @can('providers.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('providers.index') }}">Proveedores</a>
                            </li>
                            @endcan

                            @can('typeproviders.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('typeproviders.index') }}">Tipo Proveedor</a>
                            </li>
                            @endcan

                            @can('contacts.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contacts.index') }}">Contacto</a>
                            </li>
                            @endcan

                            </ul>
                        </li>
                        @endcan


                        @can('items.index' or 'typeitems.index')
                        <li class="dropdown">
                            &nbsp &nbsp 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manual<span class="caret"></span></a>

                            <ul class="dropdown-menu">

                            @can('items.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('items.index') }}">Item</a>
                            </li>
                            @endcan

                            @can('typeitems.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('typeitems.index') }}">Tipo Item</a>
                            </li>
                            @endcan

                            </ul>
                        </li>
                        @endcan


                        @can('users.index')
                        <li class="dropdown">
                            &nbsp &nbsp 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>

                            <ul class="dropdown-menu">

                            @can('users.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                            @endcan

                            @can('roles.index')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
                            </li>
                            @endcan

                            </ul>
                        </li>
                        @endcan
                        
                        @can('calls.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('calls.index') }}">Llamadas</a>
                        </li>
                        @endcan

                        @can('news.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news.index') }}">Noticias</a>
                        </li>
                        @endcan

                        


                     </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} {{ Auth::user()->last_name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        

        <main class="py-4">
            @if(session('info'))
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div>
                </div>
            </div>

        @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
