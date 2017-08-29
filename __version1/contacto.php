<!doctype html>
<html lang="es">
    <head>

        <!-- Basic page needs
        ============================================ -->
        <title>Cardumen el Bagre</title>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Mobile specific metas
        ============================================ -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="images/fav_icon.html">

        <!-- Google web fonts
        ============================================ -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>

        <!-- Libs CSS
        ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Theme CSS
        ============================================ -->
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/rtl.css"> -->
        <!-- Custom CSS
        ============================================ -->
        <link rel="stylesheet" href="css/custom.css">
        <!-- JS Libs
        ============================================ -->
        <script src="plugins/modernizr.js"></script>

        <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->


        <!-- Old IE stylesheet
        ============================================ -->
        <!--[if lte IE 9]>
                <link rel="stylesheet" type="text/css" href="css/oldie.css">
                <script src="js/placeholderIE.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="page_loader" class="page_loader">
            <div id="loader"></div>
        </div>
        <!-- - - - - - - - - - - - - - Cookie Control & Old ie Message - - - - - - - - - - - - - - - - -->
        <div class="messages_wrap">

            <!-- - - - - - - - - - - - - - Old IE Message - - - - - - - - - - - - - - - - -->

            <!--[if lt IE 9]>

            <div class="old_ie_message">

                    <div class="on_the_sides">

                            <div class="left_side">

                                    <i class="icon-attention"></i> <b>Attention!</b> This page may not display correctly. You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.

                            </div>

                            <div class="right_side">

                                    <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="btn small transparent black" target="_blank">Update Now!</a>

                            </div>

                    </div>

            </div>

            <![endif]-->

            <!-- - - - - - - - - - - - - - End of Old IE Message - - - - - - - - - - - - - - - - -->

        </div>

        <!-- - - - - - - - - - - - - - End of Cookie Control & Old ie Message - - - - - - - - - - - - - - - - -->

        <div id="document_wrap">

            <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

            <header role="banner" id="header" class="vm transparent">

                <!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

                <a href="index.php" class="logo">
                    <img src="images/logo.png" alt="">
                </a>

                <!-- - - - - - - - - - - - - - End Logo - - - - - - - - - - - - - - - - -->
                <!-- - - - - - - - - - - - - - Main Navigation Container - - - - - - - - - - - - - - - - -->
                <?php include './inc/main-navigation.php'; ?>
                <!-- - - - - - - - - - - - - - End of Main Navigation Container - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Top Buttons - - - - - - - - - - - - - - - - -->

                <div id="top_actions_wrap">

                    <!-- - - - - - - - - - - - - - Searchform - - - - - - - - - - - - - - - - -->

                    <form role="search" class="nav_searchform">

                        <input type="search" placeholder="Buscar..." name="">

                        <button><span class="si-icon" data-width="24" data-height="24" data-event="mouseover" data-icon-name="search"></span></button>

                    </form>

                    <!-- - - - - - - - - - - - - - End of Searchform - - - - - - - - - - - - - - - - -->

                    <span id="toggle_menu" class="si-icon" data-width="36" data-height="36" data-event="click" data-icon-name="hamburgerCross"></span>

                </div><!--/ #top_btns_wrap -->

                <!-- - - - - - - - - - - - - - End of Top Buttons - - - - - - - - - - - - - - - - -->

            </header>

            <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Extended Block (image, gmap) - - - - - - - - - - - - - - - - -->

            <div class="extended_wrap">

                <!-- - - - - - - - - - - - - - Google Map - - - - - - - - - - - - - - - - -->

                <div id="gmap" data-latitud="-25.304984" data-longitud="-57.596620"></div>

                <!-- - - - - - - - - - - - - - End of Google Map - - - - - - - - - - - - - - - - -->

            </div>

            <!-- - - - - - - - - - - - - - End of Extended Block - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Page content - - - - - - - - - - - - - - - - -->

            <div id="page_wrap">

                <main role="main">

                    <div class="container">

                        <div class="row">

                            <!-- - - - - - - - - - - - - - Contact Info - - - - - - - - - - - - - - - - -->

                            <aside role="complementary" class="col-sm-4">

                                <h1>Información de Contacto</h1>

                                <p>Martinez Ramella 1080, Asunción</p>

                                <ul>

                                    <li><span class="ci_item">Teléfono:</span> (595 21) 214 353</li>
                                    <li><span class="ci_item">E-mail:</span> <a href="mailto:info@cardumenelbagre.com">info@cardumenelbagre.com</a></li>

                                </ul>

                            </aside><!--/ [col] -->

                            <!-- - - - - - - - - - - - - - End of Contact Info - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Contact Form Section - - - - - - - - - - - - - - - - -->

                            <section class="col-sm-8">

                                <h1>Envianos un Mensaje</h1>

                                <p class="cf_description">Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Fields marked * are required.</p>

                                <form class="contactform" novalidate>

                                    <ul>

                                        <!-- - - - - - - - - - - - - - Form row - - - - - - - - - - - - - - - - -->

                                        <li class="row">

                                            <div class="col-sm-6">

                                                <input type="text" required name="cf_name" data-field-name="Nombre" data-min-characters="5" placeholder="Nombre*">

                                            </div><!--/ [col] -->

                                            <div class="col-sm-6">

                                                <input type="email" required name="cf_email" placeholder="Email*">

                                            </div><!--/ [col] -->

                                        </li>

                                        <!-- - - - - - - - - - - - - - End of Form row - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Form row - - - - - - - - - - - - - - - - -->

                                        <li class="row">

                                            <div class="col-xs-12">

                                                <input type="text" name="cf_subject" placeholder="Asunto">

                                            </div><!--/ [col] -->

                                        </li>

                                        <!-- - - - - - - - - - - - - - End of Form row - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Form row - - - - - - - - - - - - - - - - -->

                                        <li class="row">

                                            <div class="col-xs-12">

                                                <textarea name="cf_message" data-field-name="Mensaje" data-min-characters="20" required placeholder="Mensaje*" rows="6"></textarea>

                                            </div><!--/ [col] -->

                                        </li>

                                        <!-- - - - - - - - - - - - - - End of Form row - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Form row - - - - - - - - - - - - - - - - -->

                                        <li class="row">

                                            <div class="col-xs-12">

                                                <button class="btn medium black">Enviar</button>

                                            </div><!--/ [col] -->

                                        </li>

                                        <!-- - - - - - - - - - - - - - End of Form row - - - - - - - - - - - - - - - - -->

                                    </ul>

                                </form>

                            </section><!--/ [col] -->

                            <!-- - - - - - - - - - - - - - End of Contact Form Section - - - - - - - - - - - - - - - - -->

                        </div><!--/ .row -->

                    </div><!--/ .container -->

                </main><!--/ [role="main"] -->

            </div><!--/ .page_wrapper -->

            <!-- - - - - - - - - - - - - - End page content - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

            <?php include './inc/footer.php'; ?>

            <!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->

        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwncHAgzJNmPsM9B3vjYk7y0tjoKR7tkg&callback=initMap"
        async defer></script>
        <script type="text/javascript">
            var maps = [];
            var markers = [];
            function initMap() {
                var $maps = $('#gmap');
                $.each($maps, function (i, value) {
                    var uluru = {lat: parseFloat($(value).attr('data-latitud')), lng: parseFloat($(value).attr('data-longitud'))};
                    var mapDivId = $(value).attr('id');

                    maps[mapDivId] = new google.maps.Map(document.getElementById(mapDivId), {
                        zoom: 17,
                        center: uluru
                    });

                    markers[mapDivId] = new google.maps.Marker({
                        position: uluru,
                        map: maps[mapDivId]
                    });
                })
            }
        </script>
        <!-- Include Libs & Plugins
        ============================================ -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="plugins/svg/snap.svg-min.js"></script>
        <script src="plugins/svg/svgicons-config.js"></script>
        <script src="plugins/svg/svgicons.js"></script>

        <!-- Theme files
        ============================================ -->
        <script src="js/theme.styleswitcher.js"></script>
        <script src="js/theme.core.js"></script>
        <script src="js/theme.plugins.js"></script>
    </body>


    <!-- Mirrored from velikorodnov.com/html/joker/pages_contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Aug 2017 12:50:44 GMT -->
</html>