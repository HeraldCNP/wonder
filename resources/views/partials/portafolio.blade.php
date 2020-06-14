
    <section class="commonSection porfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">nuestro portafolio</h4>
                    <h2 class="sec_title">ultimos trabajos</h2>
                    <p class="sec_desc">

                    </p>
                </div>
            </div>
            <div class="row">
                @foreach($works as $work)
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="{{ url($work->image) }}" alt="{{ $work->description }}"/>
                            <div class="folioHover">
                                <a class="cate">{{ $work->title }}</a>
                                <h4>{{ $work->description }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt_30">
                <div class="col-lg-12 text-center">
                    <a class="common_btn red_bg" href="{{ route('trabajos') }}"><span>Load More</span></a>
                </div>
            </div>
        </div>
    </section>

