<!DOCTYPE HTML>
<html lang="es">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169236178-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-169236178-1');
    </script>

    <meta charset="UTF-8">
    <title>Wonder Group | Agencia de Marketing y publicidad</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Agencia de marketing digital y publicidad en Bolivia enfocada en desarrollar estrategias digitales modernas e innovadoras para hacer crecer tu negocio"/>
    <meta name="keywords" content="wonder group, wonder, marketing, marketing digital, publicidad, bolivia, agencia de publicidad ,agencia de marketing digital,wonder.com.bo ,www.wonder.com.bo">
    <meta name="author" content="HeraldCNP">
    <meta property="og:url" content="https://wonder.com.bo" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Wonder Group | Agencia de Marketing y publicidad" />
    <meta property="og:description"
          content="Agencia de marketing digital y publicidad en Bolivia enfocada en desarrollar estrategias digitales modernas e innovadoras para hacer crecer tu negocio"/>
    <meta property="og:image" content="{{ asset('images/wonderlogo.png') }}" />
    <!-- Include All CSS here-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/settings.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/preset.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/presets/color1.css') }}" id="colorChange"/>
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="{{ asset('images/favicon.svg') }}">

    <script data-ad-client="ca-pub-7125877501142047" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
@laravelPWA
</head>
<body>
<!-- Preloading -->
<div class="preloader text-center">
    <div class="la-ball-circus la-2x">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloading -->

<!-- MENU -->
<!-- Header 01 -->
<header class="header_01" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-3">
                <div class="logo">
                    <a href="{{ route('inicio') }}"><img src="{{ asset('images/wonderlogo.png') }}" width="135px" alt=""/></a>
                </div>
            </div>
            <!-- Navegación -->
            <div class="col-lg-8 col-sm-7 col-md-7">
                <nav class="mainmenu text-center">
                    <ul>
                        <li class="scroll menu-item-has-children active" >
                            <a href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <li class="scroll menu-item-has-children">
                            <a href="#service">Servicios</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('web') }}">Desarrollo Web</a></li>
                                <li><a href="{{ route('desing') }}">Diseño Gráfico</a></li>
                                <li><a href="{{ route('marketing') }}">Marketing Digital</a></li>
                                <li><a href="{{ route('photo') }}">Fotografía</a></li>
                                <li><a href="{{ route('video') }}">Producción de Video</a></li>
                                <li><a href="{{ route('audio') }}">Producción de Audio</a></li>
                            </ul>
                        </li>
                        <li class="scroll"><a href="#portfolio">Portafolio</a>
                        </li>

                        <li class="scroll"><a href="#team">Team</a></li>
                        <li class="scroll"><a href="#contact">Contacto</a></li>
                    </ul>
                </nav>
            </div>
            <!-- FIN Navegación -->
            <div class="col-lg-2 col-sm-2 col-md-2">
                <div class="navigator text-right">
                    <a class="search searchToggler" href="javascript:void(0);"><i class="mei-magnifying-glass"></i></a>
                    <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg hidden-xs"><i class="mei-menu"></i></a>
                    <a id="open-overlay-nav" class="menu hamburger" href="javascript:void(0);"><i class="mei-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header 01 -->

<!-- Search From -->
<div class="searchFixed popupBG">
    <div class="container-fluid">
        <a href="" id="sfCloser" class="sfCloser"></a>
        <div class="searchForms">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form method="post" action="#">
                            <input type="text" name="s" class="searchField" placeholder="Search here..."/>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search From -->

<!-- PopUP Menu -->
<div class="popup popup__menu">
    <a href="#" id="close-popup" class="close-popup"></a>
    <div class="container mobileContainer">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="logo2">
                    <a href="{{ route('inicio') }}"><img src="{{ asset('images/wonderlogo.png') }}" alt="" width="150px"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popup-inner">
                    <div class="dl-menu__wrap dl-menuwrapper">
                        <ul class="dl-menu dl-menuopen">
                            <li class="scroll menu-item-has-children">
                                <a href="{{ route('inicio') }}">Inicio</a>
                                <ul class="dl-submenu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index2.html">Home 02</a></li>
                                    <li><a href="index3.html">Home 03</a></li>
                                </ul>
                            </li>
                            <li class="scroll menu-item-has-children">
                                <a href="#service">Servicios</a>
                                <ul class="dl-submenu">
                                    <li><a href="#">Desarrollo Web</a></li>
                                    <li><a href="#">Diseño Gráfico</a></li>
                                    <li><a href="#">Marketing Digital</a></li>
                                    <li><a href="#">Fotografía Profesional</a></li>
                                    <li><a href="#">Producción de Video</a></li>
                                    <li><a href="#">Producción de Audio</a></li>
                                </ul>
                            </li>
                            <li class="scroll menu-item-has-children"><a href="#portfolio">Portafolio</a>
                            </li>
                            <li class="scroll"><a href="#team">Team</a></li>
                            <li class="scroll"><a href="#contact">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                <ul class="footer__contacts text-left">
                    <li>Telefonos: 63719758 - 78715104 - 60523437</li>
                    <li>Email: admin@wondergroup.com.bo</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                <div class="popUp_social text-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="https://www.facebook.com/wonderpotosi"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PopUP Menu -->





<!-- END MENU -->

{{--<!-- Revolution SLIDER -->--}}
{{--@include('partials.slide')--}}
<!-- VIDEO -->
@include('partials.video')




<!-- Portfolio Section -->
@include('partials.portafolio');
<!-- Portfolio END Section -->

<!-- SERVICIOS Section -->
@include('partials.servicios')
<!-- Services END Section -->

<!-- Team Section -->
@include('partials.team')
<!-- Team END Section -->

<!-- contador Section -->
@include('partials.contador')
<!-- contador END Section -->



<!-- Clientes Section -->
@include('partials.clientes')
<!-- Clientes END Section -->

{{--<!-- Testimonial Section -->--}}
{{--@include('partials.testimonio')--}}
{{--<!-- Testimonial END Section -->--}}



<!-- Footer Section -->
@include('partials.footer')
<!-- Footer Section -->

{{--<!-- Bact To To -->--}}
{{--<a id="backToTop" href="#" class=""><i class="fa fa-angle-double-up"></i></a>--}}
{{--<!-- Bact To To -->--}}

<!-- Include All JS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>

{{--<!-- Rev slider Add on Start -->--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.carousel.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.kenburn.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.migration.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.parallax.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>--}}
{{--<!-- Rev slider Add on End -->--}}

<script src="{{ asset('js/dlmenu.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/mixer.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<!-- Include All JS -->
</body>
</html>
