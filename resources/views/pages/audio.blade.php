@extends('layout')
@section('title')
    Producción de Audio
@endsection
@section('description')
    En Wonder group contamos con un estudio dedicado y exclusivamente a la producción de sonido con un personal responsable y con mucha creatividad
@endsection

@section('content')
    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="{{ route('inicio') }}">Inicio</a> - Servicios</h4>
                        <h2>Producción de Audio</h2>
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
                        <h2>Producción de Audio</h2>
                        <p>
                            La producción y diseño de Sonido es Fundamental para crear atmosferas auditivas que generen sentimientos y sensaciones en las personas a las que se quiere llegar con algún fin y propósito; como por ejemplo mejorar el rendimiento en ventas de productos y servicios de clientes mediante una música, Jingle o Spot Publicitario de manera creativa.
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
                            En Wonder group contamos con un estudio dedicado y exclusivamente a la producción de sonido con un personal responsable y con mucha creatividad para llevar a cabo toda idea y pedido de nuestros clientes de manera puntual y responsable, de igual forma contamos con una amplia experiencia en el rubro brindando la mejor calidad en cuanto a sonido se refiere con estándares establecidos a nivel mundial.
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
