@extends('layout')

@section('content')
@section('title')
    Producción de Video
@endsection
@section('description')
    En Wonder Group contamos con el equipo necesario de cámaras y drones, con un excelente grupo de profesionales del ámbito audiovisual.
@endsection
    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="{{ route('inicio') }}">Inicio</a> - Servicios</h4>
                        <h2>Producción de Video</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Banner -->
    <!-- Services Details Section -->
    <section class="commonSection service_detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="serviceArea">
                        <img src="images/s1.jpg" alt=""/>
                        <h2>Producción de Video</h2>
                        <p>
                            Nos destacamos por la calidad y profesionalidad en la edición y grabación de videos. Contamos con el equipo necesario de cámaras y drones así como con un excelente grupo de profesionales del ámbito audiovisual, formados en la grabación, edición y producción de vídeo, desde un vídeo corporativo para empresa hasta todo tipo de vídeos para eventos, tales como bodas, bautizos, celebraciones, aniversarios o eventos deportivos y musicales.
                        </p>
                        <div class="row gaping">
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <img src="images/s2.jpg" alt=""/>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <h3>planning & strategy</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul>
                                    <li><i class="fa fa-check-square"></i>Research beyond the business plan</li>
                                    <li><i class="fa fa-check-square"></i>Marketing options and rates</li>
                                    <li><i class="fa fa-check-square"></i>The ability to turnaround consulting</li>
                                    <li><i class="fa fa-check-square"></i>Help companies into more profitable</li>
                                    <li><i class="fa fa-check-square"></i>Customer engagement matters</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            En Wonder Group Disponemos de todos esos recursos, tanto técnicos como humanos. Además de cámaras profesionales y dron, contamos con todo el software y accesorios necesarios tales como cámaras y accesorios de la misma, focos e iluminación, micrófonos y, en cuanto a software, trabajamos con Adobe Premiere Pro CC y Adobe After Effects, principalmente. Si necesitas nuestros servicios de producción de vídeo, no dudes en contactarnos.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 sidebar">
                    <aside class="widget categories">
                        <h3 class="widget_title">Servicios</h3>
                        <div class="meipaly_categorie_widget">
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="{{ route($category->slug) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget categories">
                        <div class="meipaly_services_help">
                            <h4>need meipaly help?</h4>
                            <p>Prefer speaking with a human to filling out a form? call corporate office and we will connect you with a team member who can help.</p>
                            <h2>666 888 000</h2>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Details Section -->

    <!-- Ready Section -->
    <section class="commonSection ready">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-8 col-md-9">
                    <h2 class="sec_title white">Let's Get Your Project Started!</h2>
                </div>
                <div class="col-lg-3  col-sm-4 col-md-3 text-right">
                    <a class="common_btn" href="contact.html"><span>Contact with us</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Ready Section -->

@endsection
