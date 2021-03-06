<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html lang="es" class="no-js lt-ie10"> <![endif]-->
<html class="no-js" lang="es">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta http-equiv='cache-control' content='no-cache' />
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />

        <meta class="temp" name="description" content="Grupo Automotriz, 31 Agencias, 14 Marcas, 13 Ciudades, Seminuevos, Talleres, Contacto, Suscríbete, © Copyright 2015 Camcar, Aviso de Privacidad." />
        <meta class="temp" name="copyright" content="© Copyright 2015 Camcar" />
        <meta class="temp" name="robots" content="index, follow" />
        <link class="temp" rel="alternate" hreflang="es-MX" href="http://camcar.mx/sitio" />

        <title id="head-change-section-title">Camcar Grupo Automotriz</title>

        <link href="http://fonts.googleapis.com/css?family=Roboto:100,400,300,700,400italic,500%7CMontserrat:400,700" rel="stylesheet" type="text/css">
        <?php /*
        <link rel="stylesheet" href="../css/import-sitio.css">
        */ ?>
        <link rel="stylesheet" href="../css/import-sitio.min.css">

        <?php /*
        <!--<link rel="apple-touch-icon" href="../img/ico/apple-touch-icon.png">
        <link rel="shortcut icon" href="../img/ico/camcaricon.ico">-->

        <!--[if lt IE 9]>
            <script src="../../lib/assets/plugins/html5shiv/html5shiv.min.js"></script>
        <![endif]-->
        <!--[if lt IE 10]>
            <script src="../../lib/assets/plugins/media-match/media.match.min.js"></script>
            <script src="../../lib/assets/plugins/respond/respond.min.js"></script>
        <![endif]-->

        */ ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-60582942-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script>
            var nav = navigator.appName;

            if(nav == "Microsoft Internet Explorer"){
                // Detectamos si nos visitan desde IE
                if(nav == "Microsoft Internet Explorer"){
                    // Convertimos en minusculas la cadena que devuelve userAgent
                    var ie = navigator.userAgent.toLowerCase();
                    // Extraemos de la cadena la version de IE
                    var version = parseInt(ie.split('msie')[1]);

                    // Dependiendo de la version mostramos un resultado
                    switch(version){
                        case 6:
                            alert("Estas usando IE 6, es obsoleto. \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 7:
                            alert("Estas usando IE 7, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        case 8:
                            alert("Estas usando IE 8, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");
                            break;
                        /*case 9:
                            alert("Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 ");
                            console.log("Estas usando IE 9, mas o menos compatible");
                            break;*/
                        default:
                            console.log("Usas una version compatible");
                            break;
                    }
                }
            }
        </script>


        <script src="../lib/modernizr.js"></script>
    </head>
    <body id="index" class="sitio">
        <!-- Auxiliar Temporal Inputs's DIV -->
        <div id='hidden-inputs-session'></div>
        <!-- Auxiliar Temporal Inputs's DIV -->
        <div id='hidden-inputs-temporal'></div>

        <div id="hidden-inputs-temporal-rental">
            <input id="hidden-agencie-rental-name" type="hidden" class="input-hidden" value="">
            <input id="hidden-agencie-rental-key" type="hidden" class="input-hidden" value="">
        </div>

        <div id="hidden-inputs-temporal-blog">
            <input id="hidden-blog-id" type="hidden" class="input-hidden" value="">
            <input id="hidden-agencie-name" type="hidden" class="input-hidden" value="">
            <input id="hidden-agencie-key" type="hidden" class="input-hidden" value="">
            <input id="hidden-blog-name" type="hidden" class="input-hidden" value="">
            <input id="hidden-blog-key" type="hidden" class="input-hidden" value="">
        </div>

        <div id="temporal-filters">
            <input type="hidden" id="hidden_mapa" value="0">
            <input type="hidden" id="hidden_category" value="0">
            <input type="hidden" id="hidden_marc" value="0">
            <input type="hidden" id="hidden_model" value="0">
            <input type="hidden" id="hidden_agen_news_name" value="">
            <input type="hidden" id="hidden_brand" value="0">
            <input type="hidden" id="hidden_agencie_name" value="0">
            <input type="hidden" id="hidden_agencie_type" value="0">
        </div>
        <!--Template navbar-->
        <div class="wrapper_content_navbar" id='start-site-header'></div>

        <?php /*
        <!--Template hero-slider-parallax-->
        <div class="wrapper_content_hero_lider fixed-header" id='start-site-hero-slider'></div>
        <div id="hero-slider-scroll-down"></div>
        */ ?>

        <!--Templates's DIV-->
        <div class="wrapper_content_interactive" id='content-temporal-interactive'></div>

        <!-- Begin: Footer News -->
        <section class="footer-news footer-content no-print" style="background-color: #b21117 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-md-1"></div>
                    <div class="col-md-10 col-md-10">
                        <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup">
                            <form action="//camcar.us6.list-manage.com/subscribe/post?u=eb6adc86fe16ad4e6562f80c1&amp;id=93e761d2cf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <h4 class="h-widget">
                                        Suscríbete a nuestro boletín informativo y entérate de nuestras promociones.
                                    </h4>
                                    <div class="indicates-required">
                                        <span class="asterisk">
                                            <i class="fa fa-asterisk"></i>
                                        </span>
                                        Campo requerido
                                    </div>
                                    <div class="col-md-3 col-md-3">
                                        <div class="mc-field-group">
                                            <fieldset>
                                                <label for="mce-EMAIL"></label>
                                                <input
                                                    class="input-newsletter validate-required"
                                                    type="email"
                                                    name="EMAIL"
                                                    id="mce-EMAIL"
                                                    placeholder="Correo Electrónico"
                                                    data-validation-data="required|email">
                                                <p class="invalid-message" id="error_mensaje_email">Este campo es obligatorio<span>&nbsp;</span></p>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-3">
                                        <div class="mc-field-group">
                                            <fieldset>
                                                <label for="mce-FNAME"></label>
                                                <input
                                                    class="input-newsletter validate-required"
                                                    type="text"
                                                    name="FNAME"
                                                    id="mce-FNAME"
                                                    placeholder="Nombre(s)"
                                                    data-validation-data="required|name">
                                                <p class="invalid-message" id="error_mensaje_name">Este campo es obligatorio<span>&nbsp;</span></p>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-md-3">
                                        <div class="mc-field-group">
                                            <fieldset>
                                                <label for="mce-LNAME"></label>
                                                <input
                                                    class="input-newsletter validate-required"
                                                    type="text"
                                                    name="LNAME"
                                                    id="mce-LNAME"
                                                    placeholder="Apellido(s)"
                                                    data-validation-data="required|name">
                                                <p class="invalid-message" id="error_mensaje_lastname">Este campo es obligatorio<span>&nbsp;</span></p>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-md-2">
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;">
                                            <input type="text" name="b_eb6adc86fe16ad4e6562f80c1_93e761d2cf" tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <div class="linkContainer ctaContainer-button text-center">
                                                <button type="submit" value="Subscribe" name="subscribe" style="font-size: 1.3em; display: block; margin-top: 5px; padding: 10px 45px;" class="secondary" id="mc-embedded-subscribe">Suscríbete</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-md-1"></div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <div class="col-md-1 col-md-1"></div>
                </div>
            </div>
        </section>
        <!-- End: Footer News -->

        <!-- Begin: Footer container -->
        <footer class="footer-6 footer-content no-print" style="padding-top: 35px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12">
                        <h5 style="">Síguenos en: </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="https://www.facebook.com/CamcarMexico" target="_blank" class="button py4 button-transparent bg-facebook col-md-12 col-xs-12">
                            <i class="social_facebook"></i>
                            Facebook
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="https://twitter.com/CamcarMexico" target="_blank" class="button py4 button-transparent bg-twitter col-md-12 col-xs-12">
                            <i class="social_twitter"></i>
                            Twitter
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a href="https://youtube.com/c/CamcarMx" target="_blank" class="button py4 button-transparent bg-youtube col-md-12 col-xs-12">
                            <i class="social_youtube"></i>
                            Youtube
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-lower">
                            <span>© Copyright 2015 Camcar<span><a id="go-section-privacy-notice" class="cur-hover">Aviso de Privacidad</a></span></span>
                            <ul class="social-links">
                                <?php /*<!--<li><a href="https://www.facebook.com/LandroverGDL" target="_blank"><i class="social_facebook"></i></a></li>
                                <li><a href="https://twitter.com/lrcarsgdl" target="_blank"><i class="social_twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/user/LandRoverMx" target="_blank"><i class="social_youtube"></i></a></li>
                                <li><a href="http://instagram.com/LandRoverGuadalajara" target="_blank"><i class="social_instagram"></i></a></li>
                                <ul class="social-links">
                                <li><a href="https://www.facebook.com/SeminuevosPremiumGDL" target="_blank"><i class="social_facebook"></i></a></li>--> */ ?>
                                <li><div class="log-medigraf" style="margin-top: 10px;"><a href="http://medigraf.com.mx" target="_blank"><div class="medigraf"></div></a></div></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end of row-->

            </div><!--end of container-->
        </footer>
        <!--   End: Footer container -->

        <a href="#0" class="back-to-top cd-top no-print">top</a>

        <!-- MAIN -->
        <script src="../lib/site/jquery-1.11.2.js"></script>
        <?php /*
        <!--<script src="../lib/modernizr.js"></script>-->
        */ ?>
        <script src="../lib/site/bootstrap.js"></script>
        <!-- CORE -->
        <script src="../lib/jquery.gdb.js"></script>
        <script src="../lib/jquery-ui.js"></script>
        <script src="../lib/underscore.js"></script>

        <script src="../lib/handlebars.runtime.js"></script>
        <!-- TEMPLATES -->
        <script src='templates/min/templates.min.js'></script>

        <script src="../lib/moment.js"></script>
        <script src="../lib/accounting.js"></script>
        <script src="../lib/finch.js"></script>
        <!-- Plugins -->
        <script src="../lib/site/jquery.sticky.js"></script>

        <script src="../lib/site/waypoints.js"></script>
        <script src="../lib/site/waypoints-sticky.js"></script>
        <script src="../lib/site/wow-animated.js"></script>

        <script src="../lib/site/jquery.scrollTo.js"></script>
        <script src="../lib/site/jquery.easing.1.3.js"></script>
        <script src="../lib/site/bootstrap-select.js"></script>
        <script src="../lib/site/isotope.js"></script>
        <script src="../lib/site/jquery.appear.js"></script>
        <script src="../lib/site/jquery.countTo.js"></script>
        <script src="../lib/site/matchMedia.js"></script>
        <script src="../lib/site/jquery.currency.js"></script>

        <script src="../lib/site/herocarousel/jquery.herocarousel-plugins.js"></script>
        <script src="../lib/site/flexslider/jquery.flexslider.js"></script>
        <script src='../lib/site/owl-carousel/owl.carousel.js'></script>
        <script src="../lib/site/jquery.smooth-scroll.js"></script>
        <script src="../lib/site/skrollr.js"></script>

        <!-- FORMS -->
        <script src="../lib/forms.js"></script>
        <script src="../lib/sha512.js"></script>
        <!-- GOOGLE API -->
        <script src="http://maps.google.com/maps/api/js?v=3&amp;sensor=false" type="text/javascript"></script>
         <?php /*<!--
        <script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAZBe7uHI90ESk2XAmWRL3RxR6u04U0tImA3bfwZ3-HKdEno7z2xRk2YE6OkudtBX5qy0vLrgbf1DUCg"></script>
        <script type="text/javascript">
        //google.load("jquery", '1.3');
        google.load("maps", "2.x");
        </script>
        --> */ ?>
        <!-- PLUGINS -->
        <!-- CORE JS -->
        <?php /*
        <script src='js/min/core.min.js'></script>
        */ ?>
        <script src='js/objects.js'></script>
        <script src='js/method.js'></script>
        <script src='js/model.js'></script>
        <script src='js/room.js'></script>
        <script src='js/main.js'></script>
    </body>
</html>

