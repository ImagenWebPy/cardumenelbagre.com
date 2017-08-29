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

            <header role="banner" id="header" class="vm">
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

                    <!-- - - - - - - - - - - - - - Isotope Filter - - - - - - - - - - - - - - - - -->

                    <div id="filter_wrap">

                        <span id="filter_btn" class="si-icon toggle_box" data-width="28" data-height="28" data-event="click" data-icon-name="filter"></span>

                        <ul id="filter" class="animation_box">

                            <li data-filter="*">All</li>
                            <li data-filter=".people">Programas</li>
                            <li data-filter=".macro">Documentales</li>
                            <li data-filter=".travelling">Producciones</li>

                        </ul>

                    </div>

                    <!-- - - - - - - - - - - - - - End of Isotope Filter - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Searchform - - - - - - - - - - - - - - - - -->

                    <form role="search" class="nav_searchform">

                        <input type="search" placeholder="Search..." name="">

                        <button><span class="si-icon" data-width="24" data-height="24" data-event="mouseover" data-icon-name="search"></span></button>

                    </form>

                    <!-- - - - - - - - - - - - - - End of Searchform - - - - - - - - - - - - - - - - -->

                    <span id="toggle_menu" class="si-icon" data-width="36" data-height="36" data-event="click" data-icon-name="hamburgerCross"></span>

                </div><!--/ #top_btns_wrap -->

                <!-- - - - - - - - - - - - - - End of Top Buttons - - - - - - - - - - - - - - - - -->

            </header>

            <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Page content - - - - - - - - - - - - - - - - -->
            <div id="page_wrap">
                <main role="main">
                    <div class="template_container">
                        <h1>Trabajos</h1>
                    </div>
                    <!-- - - - - - - - - - - - - - Isotope Container - - - - - - - - - - - - - - - - -->
                    <div class="portfolio_isotope_container full_width" data-max-request-posts="35" data-page-type="portfolio" data-url="#">
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/hinchas_resistencia.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">Hinchas de Resistencia</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/morgan.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">Inauguración MORGAN</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/spot_kase.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">Spot Trébol KÄSE</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/rohayhu.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">Rohayhu Paraguay</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/bettanin.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">BETTANIN SPOT</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/casa_cuna.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">CASA CUNA FINAL</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/tigo_musica_kiss.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">TIGO MUSICA KISS</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                        <div class="isotope_item travelling">
                            <!-- - - - - - - - - - - - - - Portfolio Item - - - - - - - - - - - - - - - - -->
                            <div class="inner_j_item item_type_1">
                                <img class="item_image" src="images/trabajos/spot_suenolar.jpg" alt="">
                                <a href="trabajos-detalle.php" class="overlay_link"></a>
                                <h4 class="title"><a href="#">Spot Sueñolar</a></h4>
                                <!-- - - - - - - - - - - - - - Category & Statistic - - - - - - - - - - - - - - - - -->
                                <div class="meta">
                                    <!-- - - - - - - - - - - - - - Title & Category - - - - - - - - - - - - - - - - -->
                                    <div class="category"><a href="#">Producciones</a></div>
                                </div>
                                <!-- - - - - - - - - - - - - - End of Category & Statistic - - - - - - - - - - - - - - - - -->
                            </div>
                            <!-- - - - - - - - - - - - - - End of Portfolio Item - - - - - - - - - - - - - - - - -->
                        </div>
                    </div>
                    <!-- - - - - - - - - - - - - - End of Isotope Container - - - - - - - - - - - - - - - - -->
                </main>
            </div><!--/ .page_wrapper -->
            <!-- - - - - - - - - - - - - - End page content - - - - - - - - - - - - - - - - -->
            <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
            <?php include './inc/footer.php'; ?>
            <!-- - - - - - - - - - - - - - End Footer - - - - - - - - - - - - - - - - -->
        </div>

        <!-- Include Libs & Plugins
        ============================================ -->
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="plugins/isotope.pkgd.min.js"></script>
        <script src="plugins/svg/snap.svg-min.js"></script>
        <script src="plugins/svg/svgicons-config.js"></script>
        <script src="plugins/svg/svgicons.js"></script>

        <!-- Theme files
        ============================================ -->
        <script src="js/theme.styleswitcher.js"></script>
        <script src="js/theme.core.js"></script>
        <script src="js/theme.plugins.js"></script>
    </body>
</html>