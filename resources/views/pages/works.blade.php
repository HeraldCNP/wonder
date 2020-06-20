@extends('layout')

@section('content')

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
                                    <a class="cate" href="#">{{ $work->title }}</a>
                                    <h4><a href="portfolio_detail.html">{{ $work->description }}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
{{--                    <div class="col-lg-4 col-sm-6 col-md-4 mix fotografia">--}}
{{--                        <div class="singlefolio">--}}
{{--                            <img src="images/portfolio/1.jpg" alt=""/>--}}
{{--                            <div class="folioHover">--}}
{{--                                <a class="cate" href="#">Graphic</a>--}}
{{--                                <h4><a href="portfolio_detail.html">Design123 Styles</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-sm-6 col-md-4 mix marketing graphic">--}}
{{--                        <div class="singlefolio">--}}
{{--                            <img src="images/portfolio/2.jpg" alt=""/>--}}
{{--                            <div class="folioHover">--}}
{{--                                <a class="cate" href="#">Graphic</a>--}}
{{--                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-sm-6 col-md-4 mix marketing logos">--}}
{{--                        <div class="singlefolio">--}}
{{--                            <img src="images/portfolio/3.jpg" alt=""/>--}}
{{--                            <div class="folioHover">--}}
{{--                                <a class="cate" href="#">Graphic</a>--}}
{{--                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-sm-6 col-md-4 mix branding graphic">--}}
{{--                        <div class="singlefolio">--}}
{{--                            <img src="images/portfolio/4.jpg" alt=""/>--}}
{{--                            <div class="folioHover">--}}
{{--                                <a class="cate" href="#">Graphic</a>--}}
{{--                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-sm-6 col-md-4 mix branding marketing">--}}
{{--                        <div class="singlefolio">--}}
{{--                            <img src="images/portfolio/5.jpg" alt=""/>--}}
{{--                            <div class="folioHover">--}}
{{--                                <a class="cate" href="#">Graphic</a>--}}
{{--                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-sm-6 col-md-4 mix logos graphic">--}}
{{--                        <div class="singlefolio">--}}
{{--                            <img src="images/portfolio/6.jpg" alt=""/>--}}
{{--                            <div class="folioHover">--}}
{{--                                <a class="cate" href="#">Graphic</a>--}}
{{--                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="row mt_30">
                <div class="col-lg-12 text-center">
                    <a class="common_btn red_bg" href="#"><span>Load More</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->

@endsection
