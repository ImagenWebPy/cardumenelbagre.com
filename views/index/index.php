<?php
$helper = new Helper();
$quienesSomos = $helper->getDataQuienesSomos();
$unidadesNegocio = $helper->getDataUnidadesNegocio();
$clientes = $helper->getDataClientes();
$redes = $helper->getRedes();
$configSitio = $helper->getConfigSitio();
$sedes = $helper->getLocales();
$video = $helper->getVideo();
?>
<!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div id="wrapper" class="no-menubar">
    <div id="main">
        <div class="section st-no-padding">
            <section>
                <div class="ls-fullheight ls-nobullets">
                    <div id="background-video" class="background-video">
                        <a class="ls-l ls-mental-scrollunder masContenido" style="display: none;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-400;durationout:1000;"></a>
                    </div>
                </div>
            </section>
        </div> <!-- section -->
        <div id="header" class="top-menu tm-fixonscroll">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 tm-logo">
                            <img src="<?= ASSETS ?>img/logo.png" class="logo" alt="Logo" style="width: 120px;">
                        </div>
                        <div class="col-md-10 tm-menu">
                            <nav class="top-main-menu-scrollspy">
                                <ul class="top-main-menu mtmenu sourcePro">
                                    <li><a href="#nosotros">Quienes Somos</a></li>
                                    <li><a href="#unidades">Servicios</a></li>
                                    <li><a href="#trabajos">Trabajos</a></li>
                                    <li><a href="#clientes">Clientes</a></li>
                                    <li><a href="#trabaja">Trabaja con nosotros</a></li>
                                    <li><a href="#contacto">Contacto</a></li>
                                </ul> <!-- top-main-menu -->
                            </nav>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </header>
        </div> <!-- header -->
        <div id="nosotros" class="section st-padding-xl parallax" data-stellar-background-ratio="0.5"  data-stellar-vertical-offset="-150" style="background-image: url('<?= ASSETS; ?>img/fondos/<?= $quienesSomos['img_background']; ?>');">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="Oswald" data-animate="flipInX" style="color:#ccc;">Quiénes Somos</h3>
                            <?= utf8_encode($quienesSomos['quienes_somos']); ?>
                        </div>
                    </div>
                </div> <!-- container -->
            </section>
        </div> <!-- section -->
        <div id="equipo" class="section st-bg-grey-lighter">
            <section>
                <div class="section-title">
                    <h2 data-animate="fadeInLeftBig" class="Oswald">El Equipo</h2>
                    <div class="col-md-8 col-centered">
                        <?= utf8_encode($quienesSomos['el_equipo']); ?>
                    </div>
                </div>
                <div class="creative-minds">
                    <div class="row-cm">
                        <div class="col-md-8 col-md-offset-2" data-animate="tada">
                            <figure class="cm-item">
                                <img src="<?= ASSETS; ?>img/<?= $quienesSomos['img_equipo']; ?>" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="container container-800 text-center">
                        <div class="social-block">
                            <?php foreach ($redes as $item): ?>
                                <a href="<?= $item['url']; ?>"><i class="<?= $item['fontawesome']; ?>"></i></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div> <!-- section -->
        <div class="section st-invert">
            <section>
                <div class="container container-800 text-center">
                    <div class="section-title">
                        <h2 data-animate="fadeInDown" class=""> Demo Reel</h2>
                    </div>
                </div>
                <div class="col-md-8 col-centered">
                    <iframe src="https://www.youtube.com/embed/<?= $video['reel']; ?>" frameborder="0" allowfullscreen style="display: block; width: 100%; height: 450px; "></iframe> 
                </div>
            </section>
        </div>
        <div id="unidades" class="section">
            <section>
                <div class="container">
                    <div class="section-title">
                        <h2 data-animate="fadeInDown" class="Oswald">Servicios</h2>
                    </div>

                    <div class="row services-block">
                        <?php
                        $colServicio = count($unidadesNegocio);
                        if ($colServicio == 2) {
                            $colmd = 'col-md-6';
                        } else {
                            $colmd = 'col-md-4';
                        }
                        ?>
                        <?php foreach ($unidadesNegocio as $item): ?>
                            <div class="<?= $colmd; ?>" data-animate="fadeInDown">
                                <div class="services-item">
                                    <span class="sws-icon icon_camera_alt"></span>
                                    <h3 class="SourceSansPro-Regular"><?= utf8_encode($item['titulo']); ?></h3>
                                    <p><?= utf8_encode($item['contenido']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div> <!-- container -->
            </section>
        </div> <!-- section -->
        <div class="section st-padding-xl parallax" data-stellar-background-ratio="0.5"  data-stellar-vertical-offset="-150" style="background-image: url('<?= ASSETS; ?>img/fondos/<?= $configSitio['img_frase']; ?>');">
            <section>
                <div class="container testimonial" data-animate="bounceIn">
                    <h3 class="citation-big" style="color:#fff;">“<?= utf8_encode($configSitio['frase']); ?>” </h3>
                    <p class="author-big" style="color:#fff;"><?= utf8_encode($configSitio['autor_frase']); ?></p>
                </div> <!-- container -->
            </section>
        </div> <!-- section -->
        <div id="trabajos" class="section st-invert no-padding">
            <section>

                <ul class="gallety-filters Oswald">
                    <li class="active"><a data-filter="*" href="#">TODOS</a></li>
                    <?php foreach ($helper->getCategorias() as $item): ?>
                        <li><a data-filter="<?= strtolower(utf8_encode($item['tag'])); ?>" href="#"><?= utf8_encode($item['descripcion']); ?></a></li>
                    <?php endforeach; ?>
                    <li class="gf-underline"></li>
                </ul>

                <ul id="gallery-w-preview" class="gallery gl-cols-4 gl-fixed-items">
                    <?php foreach ($helper->getContenidoPrincipal() as $contenido): ?>
                        <li class="gl-item gl-fixed-ratio-item gl-loading" data-category="<?= $helper->cleanUrl(strtolower(utf8_encode($contenido['tag']))); ?>">
                            <a href="#">
                                <figure>
                                    <img src="<?= URL; ?>public/assets/img/trabajos/<?= $contenido['img']; ?>" alt="">
                                    <figcaption>
                                        <div class="middle"><div class="middle-inner">
                                                <p class="gl-item-title sourcePro"><?= utf8_encode($contenido['titulo']); ?></p>
                                            </div></div>
                                    </figcaption>

                                </figure>
                                <div class="divTitulosPost">
                                    <p class="tipoEvento"><?= utf8_encode($contenido['categoria']); ?></p>
                                    <p class="tituloPost"><?= (strlen($contenido['titulo']) > 35) ? substr(utf8_encode($contenido['titulo']), 0, 35) . '...' : utf8_encode($contenido['titulo']) ?></p>
                                    <p class="fechaPost"><?= $helper->mesEspanol(date('F', strtotime($contenido['fecha']))) . '-' . date('Y', strtotime($contenido['fecha'])); ?></p>
                                </div>
                            </a>
                            <div class="gl-preview" style="diplay:none;" data-category="<?= $helper->cleanUrl(strtolower(utf8_encode($contenido['tag']))); ?>">
                                <span class="glp-arrow"></span>
                                <a href="#" class="glp-close"><i class="fa fa-times" aria-hidden="true"></i></a>
                                <div class="row gl-preview-container">
                                    <?php
                                    $archivos = $helper->getArchivosPOst($contenido['id']);
                                    $fechaUltimoPost = $contenido['fecha'];
                                    ?>
                                    <?php if ($archivos['tipo'] == 'imagen'): ?>
                                        <div class="col-sm-8">
                                            <div id="carousel-gallery-1" class="carousel slide" data-ride="carousel" data-interval="false">
                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <?php foreach ($archivos['imagenes'] as $item): ?>
                                                        <div class="item <?= ($item['principal'] == 1) ? 'active' : ''; ?>">
                                                            <img src="<?= URL; ?>public/archivos/<?= $item['imagen']; ?>" alt="slide">
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                                <ol class="carousel-indicators">
                                                    <?php
                                                    for ($i = 0; $i <= (count($archivos['imagenes']) - 1); $i++):
                                                        ?>
                                                        <li data-target="#carousel-gallery-1" data-slide-to="<?= $i; ?>"></li>
                                                    <?php endfor; ?>
                                                </ol>
                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-post-1" data-slide="prev">
                                                    <span></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-post-1" data-slide="next">
                                                    <span></span>
                                                </a>

                                            </div> <!-- carousel -->
                                        </div>
                                    <?php else: ?>
                                        <?php
                                        $imgVideo = '';
                                        foreach ($archivos['imagenes'] as $item) {
                                            if ($item['principal'] == 1) {
                                                $imgVideo = utf8_encode($item['imagen']);
                                            }
                                        }
                                        ?>
                                        <div class="col-sm-8">
                                            <div class="glp-video">
                                                <?php foreach ($archivos['video'] as $item): ?>
                                                    <iframe src="https://www.youtube.com/embed/<?= utf8_encode($item['archivo']); ?>" frameborder="0" allowfullscreen></iframe>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php $textoResumido = (strlen($contenido['contenido']) > 180) ? substr(utf8_encode($contenido['contenido']), 0, 180) . '...' : $contenido['contenido']; ?>
                                    <div class="col-sm-4 lg-preview-descr sourcePro">
                                        <h4><?= utf8_encode($contenido['titulo']); ?></h4>
                                        <p><?= strip_tags($textoResumido); ?></p>
                                        <a href="<?= URL; ?>post/contenido/<?= $contenido['id'] . '/' . $this->helper->getPostTitle($contenido['id'])['url']; ?>" class="btn btn-primary glp-readmore linkWhite">Leer màs</a>
                                    </div>
                                </div>
                            </div> <!-- gl-preview -->
                        </li>
                    <?php endforeach; ?>
                </ul> <!-- gallery -->
                <div class="load-more-block">
                    <a href="#" class="footer-loadmore" data-url="<?= URL; ?>" data-fecha="<?= $fechaUltimoPost; ?>" data-items="8">Cargar más</a>
                    <span class="loading-spinner" style="display:none;"></span>
                </div>
            </section>
        </div> <!-- section -->
        <div id="clientes" class="section st-bg-grey-lighter">
            <section>
                <div class="container">
                    <h2 class="section-title Oswald" data-animate="fadeInDown">Clientes</h2>
                    <p class="section-descr"><?= utf8_encode($configSitio['texto_cliente']); ?></p>
                    <section class="center slider">
                        <?php foreach ($clientes as $item): ?>
                            <div>
                                <img src="<?= ASSETS; ?>img/clientes/<?= $item['img']; ?>" alt="<?= utf8_encode($item['descripcion']); ?>">
                            </div>
                        <?php endforeach; ?>
                    </section>

                </div> <!-- container -->
            </section>
        </div> <!-- section -->
        <div id="trabaja" class="section st-invert">
            <section>
                <div class="container container-800 text-center">
                    <div class="section-title">
                        <h2 data-animate="fadeInDown" class="Oswald"><?= utf8_encode($configSitio['titulo_trabaja']); ?></h2>
                        <p data-animate="flipInX"><?= utf8_encode($configSitio['texto_trabaja']); ?></p>
                    </div>
                </div>
                <div class="container some-ff-block">
                    <div class="row">
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-wide btnTrabaja">Vamos</button>
                        </div>
                    </div>
                </div>
            </section>
        </div> <!-- section -->
        <div id="contacto" class="section st-invert parallax" data-stellar-background-ratio="0.5"  data-stellar-vertical-offset="-150" style="background-image: url('<?= ASSETS; ?>img/fondos/<?= utf8_encode($configSitio['img_contacto']); ?>');">
            <section>
                <div class="container">
                    <h2 class="section-title Oswald" data-animate="fadeInDown">Contacto</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="margin-btm-md sourcePro">Déjanos un mensaje</h4>
                            <form role="form" id="frmContacto" class="contact-form validation-engine ajax-send">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label class="sr-only" for="input_name">Nombre *</label>
                                        <input type="text" name="name" class="form-control validate[required]" id="input_name" placeholder="Nombre *">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="sr-only" for="input_email">Email *</label>
                                        <input type="email" name="email" class="form-control validate[required,custom[email]]" id="input_email" placeholder="Email *">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label class="sr-only" for="input_subject">Asunto</label>
                                        <input type="text" name="subject" class="form-control" id="input_subject" placeholder="Asunto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="input_message">Mensaje</label>
                                    <textarea name="message" class="form-control validate[required]" rows="7" id="input_message" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-wide">Enviar</button>
                                    <span class="loading-spinner" style="display:none;"></span>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <h4 class="margin-btm-md sourcePro"><?= utf8_encode($sedes['principal']['tipo_oficina']); ?></h4>
                            <div><i class="fa fa-map-marker paddinMarker" aria-hidden="true"></i>
                                <?= $sedes['principal']['direccion']; ?>
                                <p>
                                    <i class="fa fa-phone" aria-hidden="true"></i> 
                                    <?= utf8_encode($sedes['principal']['telefono']); ?>
                                </p>
                                <?php if (!empty($sedes['principal']['email'])): ?>
                                    <p>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <a href="mailto:<?= utf8_encode($sedes['principal']['email']); ?>"><?= utf8_encode($sedes['principal']['email']); ?></a>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div> <!-- container -->
                    <div class="row">
                        <?php foreach ($sedes['sedes'] as $item): ?>
                            <div class="col-md-3 col-md-offset-1">
                                <h4 class="margin-btm-md sourcePro"><?= utf8_encode($item['tipo_oficina']); ?></h4>
                                <div><i class="fa fa-map-marker paddinMarker" aria-hidden="true"></i>
                                    <?= $item['direccion']; ?>
                                    <p>
                                        <i class="fa fa-phone" aria-hidden="true"></i> 
                                        <?= utf8_encode($item['telefono']); ?>
                                    </p>
                                    <?php if (!empty($item['email'])): ?>
                                        <p>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <a href="mailto:<?= utf8_encode($item['email']); ?>"><?= utf8_encode($item['email']); ?></a>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </section>
        </div> <!-- section -->


        <div class="section st-no-padding contact-map-onepage">
            <section>
                <div id="gmap" data-latitud="<?= utf8_encode($configSitio['latitud']); ?>" data-longitud="<?= utf8_encode($configSitio['longitud']); ?>"></div>
            </section>
        </div> <!-- section -->


        <div id="footer" class="widget-footer">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3 class="wg-title sourcePro">Nosotros</h3>
                                <p><?= $helper->getNosotrosFooter(); ?>...</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i> <?= $configSitio['telefono']; ?>
                                </p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:<?= $configSitio['email']; ?>"><?= $configSitio['email']; ?></a>
                                </p>
                            </div> <!-- widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3 class="wg-title sourcePro">Contactanos</h3>
                                <form role="form" id="frmContactoFooter" class="contact-form validation-engine ajax-send">
                                    <div class="form-group">
                                        <label class="sr-only" for="input_name_widget">Nombre *</label>
                                        <input type="text" name="name" class="form-control validate[required]" id="input_name_widget" placeholder="Nombre *">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="input_email_widget">Email *</label>
                                        <input type="email" name="email" class="form-control validate[required,custom[email]]" id="input_email_widget" placeholder="Email *">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="input_message_widget">Mensaje</label>
                                        <textarea name="message" class="form-control validate[required]" rows="4" id="input_message_widget" placeholder="Mensaje"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-wide">Enviar</button>
                                    <span class="loading-spinner" style="display:none;"></span>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3 class="wg-title sourcePro">Últimos Trabajos</h3>
                                <ul class="wg-popular-posts">
                                    <?php foreach ($helper->getUltimosTrabajos() as $item): ?>
                                        <li>
                                            <figure><a href="#"><img src="<?= ASSETS; ?>img/trabajos/<?= $item['img']; ?>" alt="" class="img-responsive"></a></figure>
                                            <div class="body">
                                                <p class="wg-pp-title"><a href="#"><?= utf8_encode($item['titulo']); ?></a></p>
                                                <p class="wg-info"><time datetime="2014-01-16"><?= $helper->mesEspanol(date('F', strtotime($item['fecha']))) . '-' . date('Y', strtotime($item['fecha'])); ?></time></p>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div> <!-- widget -->
                        </div>
                    </div>
                </div>
                <div class="ft-copyright">
                    <div class="container">
                        <div class="mb-social">
                            <?php foreach ($redes as $item): ?>
                                <a href="<?= $item['url']; ?>"><i class="<?= $item['fontawesome']; ?>"></i></a>
                            <?php endforeach; ?>
                        </div>
                        <p>Powered by <a href="https://imagenwebhq.com"><img src="<?= ASSETS; ?>img/logo-iweb-white.png" alt="" style="width: 47px; position: relative; top: -1px;" ></a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div> <!-- main -->
</div> <!-- wrapper -->
