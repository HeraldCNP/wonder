@extends('layout')
@section('title')
    Trabajos
@endsection
@section('description')
    Nuestro portafolio, wondergroup una Agencia de marketing digital y publicidad en Bolivia, te ayudaremos a desarrollar tu marca y crecer tu negocio.
@endsection
@section('content')
    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="{{ route('inicio') }}">Inicio</a></h4>
                        <h2>Portafolio</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->
    <!-- Portfolio Section -->
    <section class="commonSection porfolioPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="folio_mixing">
                        <ul>
                            <li class="filter active" data-filter="all">Todo</li>
                            @foreach($categories as $category)
                                <li class="filter active" data-filter="{{ $category->slug }}">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="Grid">
                <div class="custom">
                    @foreach($works as $work)
                        <div class="col-lg-4 col-sm-6 col-md-4 mix {{ $work->category->slug }}">
                            <div class="singlefolio">
                                <img src="{{ url($work->image) }}" alt="{{ $work->description }}"/>
                                <div class="folioHover">
                                    <a class="cate" href="{{ $work->url }}">{{ $work->title }}</a>
                                    <h4><a href="{{ $work->url }}">{{ $work->description }}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->

@endsection
