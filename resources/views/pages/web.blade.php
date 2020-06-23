@extends('layout')

@section('content')
@section('title')
    Desarrollo Web
@endsection
@section('description')
    En Wonder Group personalizamos cada proyecto para generar un sitio único que incentive al visitante a navegar de manera sencilla e intuitiva.
@endsection
    <!-- Page Banner -->
    <section class="pageBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <h4><a href="{{ route('inicio') }}">Inicio</a> - Servicios</h4>
                        <h2>Desarrollo Web</h2>
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
                        <h2>Desarrollo Web</h2>
                        <p>
                            Personalizamos cada proyecto para generar un sitio único que incentive al visitante a navegar de manera sencilla e intuitiva.
                            En cada proyecto revisamos exhaustivamente la compatibilidad de la página con los principales navegadores (Internet Explorer, FireFox, Safari y Google Chrome), asegurando la accesibilidad de cada uno de los usuarios, para que cualquiera que sea el navegador su página se visualice correctamente.
                            Manejamos planes que incluyen el hosting y dominio, con el fin de apoyar y dar fuerza en el proceso de ventas de sus productos o servicios.
                        </p>
                        <div class="row gaping">
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <img src="images/s2.jpg" alt=""/>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-md-6">
                                <h3>planning & strategy</h3>
                                <ul>

                                    <li><i class="fa fa-check-square"></i>Listo para móviles y tablets <br>
                                    <li><i class="fa fa-check-square"></i>Editor auto-gestionable
                                    <li><i class="fa fa-check-square"></i>Optimizadas para SEO: alta en buscadores y Google My Business gratis.</li>
                                    <li><i class="fa fa-check-square"></i>Creamos plataformas a medida para empresas</li>
                                    <li><i class="fa fa-check-square"></i>Customer engagement matters</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Need something changed or is there something not quite working the way you envisaged? Is your van a
                            little old and tired and need refreshing? Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.
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
