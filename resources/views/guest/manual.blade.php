@extends('layouts.guest')

@section('content')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Sistema para informacion de provedores</h1>
                            <p>Informacion para ventas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default" href="#" data-filter="*">All</a></li>
                    @foreach($typeproviders as $typeprovider)
                    <li style="font-size: 15px;"><a class="btn btn-default" href="#" data-filter=".{{ snake_case(
$typeprovider->name) }}">{{ $typeprovider->name }}</a></li>
                    @endforeach
                    
                    
                </ul><!--/#portfolio-filter-->
                    
                <div class="portfolio-items">
                    @foreach($providers as $provider)
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item {{ snake_case($provider->type_provider->name) }}">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{ $provider->file }}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="{{ route('detallemanual', $provider->id) }}"><i class="fa fa-link"></i></a></li>
                                       <!-- <li><a href="{{ $provider->file }}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h2>{{ $provider->name }}</h2>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js')}}"></script>
@endsection
