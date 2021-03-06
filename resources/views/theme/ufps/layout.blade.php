<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>@yield('titulo', 'ORII') | ORII-UFPS </title>

        <!-- Favicon -->
        <link href="{{asset("assets/ufps/img/favicon.ico")}}" rel="Shortcut icon">
        <!-- Web Fonts -->
        <link rel="stylesheet" type="text/css"
            href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/bootstrap.min.css")}}">
        {{-- <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/plugins/fancybox/css/jquery.fancybox.min.css")}}"> --}}
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/ie8.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/blocks.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/plugins.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/style.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/app.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/shop.plugins.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/shop.blocks.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/style-switcher.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/shop.style.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/header-v6.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/header-v8.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/header.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/footer-v1.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/animate.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/line-icons.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/font-awesome.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/owl.carousel.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/owl.theme.default.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/horizontal-parallax.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/layerslider.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/ured.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/jquery.mCustomScrollbar.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/sky-forms.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/custom-sky-forms.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/profile.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/brand-buttons.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/brand-buttons-inversed.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/hover.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/custom-hover-effects.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/custom.min.css")}}">
        <link type="text/css" rel="stylesheet" href="{{asset("assets/ufps/css/pgwslider.min.css")}}">


        <section class="style">
            @yield('style')
        </section>

    </head>

    <body class="header-fixed boxed-layout" style="position: relative; min-height: 100%; top: 0px;">
        <div class="wrapper">
            <!-- Inicio Header-->
            @include("theme/$theme/header")
            <!-- Fin Header -->

            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content">
                    @yield('content')
                </section>
            </div>
            <!-- ICONOS REDES SOCIALES -->
            <div class="cuadroredes" style="height: 190px">
                <ul class="social-icons social-icons-color margin-top-10">
                    <li class="tooltips" data-toggle="tooltip" data-placement="bottom"
                        data-original-title="Síguenos en Facebook"><a
                            href="https://www.facebook.com/"
                            class="rounded social_facebook"></a>
                    </li>
                    <li class="tooltips" data-toggle="tooltip" data-placement="bottom"
                        data-original-title="Síguenos en Twitter"><a href="https://twitter.com"
                            class="rounded social_twitter"></a>
                        </li>
                    <li class="tooltips" data-toggle="tooltip" data-placement="bottom"
                        data-original-title="Síguenos en Youtube"><a
                            href="https://www.youtube.com/"
                            class="rounded social_youtube"></a>
                        </li>
                    <li class="tooltips" data-toggle="tooltip" data-placement="bottom"
                        data-original-title="Síguenos en Instagram">
                        <a href="https://www.instagram.com/" class="rounded social_instagram"></a>
                    </li>
                    
                </ul>
            </div>
            <!-- FIN ICONOS REDES SOCIALES -->
            <!-- Inicio Footer -->
            @include("theme/$theme/footer")
            <!-- Fin Footer -->
        </div>

        <script type="text/javascript" src="{{asset("assets/ufps/js/jquery.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/jquery-migrate.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/bootstrap.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/pgwslider.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/back-to-top.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/smoothScroll.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/owl.carousel.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/sequence.jquery-min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/greensock.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/layerslider.transitions.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/layerslider.kreaturamedia.jquery.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/custom.min.js")}}"></script>        
        <script type="text/javascript" src="{{asset("assets/ufps/owl.carousel.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/owl-carousel.min.js")}}"></script>        
        <script type="text/javascript" src="{{asset("assets/ufps/js/datepicker.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/validation.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/jquery.mCustomScrollbar.concat.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/owl-recent-works.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/wow.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/ufps/js/app.min.js")}}"></script>


        <script>
            $(document).ready(function(){
                        $(".owl-carousel").owlCarousel();
                        });
        </script>
        <script>
            var owl = $('.owl-carousel');
                owl.owlCarousel({
                dots:false,
                loop:true,
                autoplay:true,
                autoplayTimeout:1500,
                autoplayHoverPause:true
                });
        </script>
        
        <!--Mapa-->
        <section class="script">
            @yield('script')
        </section>  

    </body>