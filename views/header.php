<?php
$helper = new Helper();
$colores = $helper->getColores();
$vQuieneSomos = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vElEquipo = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vDemoReel = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vServicios = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vFrase = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vTrabajos = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vClientes = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vTrabaja = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vContacto = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
$vFooter = array('titulo' => array('id' => '', 'hex' => ''), 'contenido' => array('id' => '', 'hex' => ''));
foreach ($colores as $item) {
    switch ($item['seccion']) {
        case 'Quienes Somos':
            if ($item['tipo'] == 'Titulo') {
                $vQuieneSomos['titulo']['id'] = $item['id'];
                $vQuieneSomos['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vQuieneSomos['contenido']['id'] = $item['id'];
                $vQuieneSomos['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'El Equipo':
            if ($item['tipo'] == 'Titulo') {
                $vElEquipo['titulo']['id'] = $item['id'];
                $vElEquipo['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vElEquipo['contenido']['id'] = $item['id'];
                $vElEquipo['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'Demo Reel':
            if ($item['tipo'] == 'Titulo') {
                $vDemoReel['titulo']['id'] = $item['id'];
                $vDemoReel['titulo']['hex'] = $item['hex'];
            }
            break;
        case 'Servicios':
            if ($item['tipo'] == 'Titulo') {
                $vServicios['titulo']['id'] = $item['id'];
                $vServicios['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vServicios['contenido']['id'] = $item['id'];
                $vServicios['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'Frase':
            if ($item['tipo'] == 'Titulo') {
                $vFrase['titulo']['id'] = $item['id'];
                $vFrase['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vFrase['contenido']['id'] = $item['id'];
                $vFrase['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'Trabajos':
            if ($item['tipo'] == 'Titulo') {
                $vTrabajos['titulo']['id'] = $item['id'];
                $vTrabajos['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vTrabajos['contenido']['id'] = $item['id'];
                $vTrabajos['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'Clientes':
            if ($item['tipo'] == 'Titulo') {
                $vClientes['titulo']['id'] = $item['id'];
                $vClientes['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vClientes['contenido']['id'] = $item['id'];
                $vClientes['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'Trabaja':
            if ($item['tipo'] == 'Titulo') {
                $vTrabaja['titulo']['id'] = $item['id'];
                $vTrabaja['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vTrabaja['contenido']['id'] = $item['id'];
                $vTrabaja['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'Contacto':
            if ($item['tipo'] == 'Titulo') {
                $vContacto['titulo']['id'] = $item['id'];
                $vContacto['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vContacto['contenido']['id'] = $item['id'];
                $vContacto['contenido']['hex'] = $item['hex'];
            }
            break;
        case 'Footer':
            if ($item['tipo'] == 'Titulo') {
                $vFooter['titulo']['id'] = $item['id'];
                $vFooter['titulo']['hex'] = $item['hex'];
            }
            if ($item['tipo'] == 'Contenido') {
                $vFooter['contenido']['id'] = $item['id'];
                $vFooter['contenido']['hex'] = $item['hex'];
            }
            break;
    }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?= $this->title ?></title>
        <meta name="description" content="<?= $this->description ?>">
        <meta name="keywords" content="<?= $this->keywords ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?= ASSETS; ?>css/style.css">
        <link rel="stylesheet" href="<?= PUBLIC_FILES; ?>plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= PUBLIC_FILES; ?>plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= ASSETS; ?>plugins/layerslider/css/layerslider.css">
        <link rel="stylesheet" href="<?= PUBLIC_FILES; ?>plugins/slick/slick/slick.css">
        <link rel="stylesheet" href="<?= PUBLIC_FILES; ?>plugins/slick/slick/slick-theme.css">
        <link rel="stylesheet" href="<?= PUBLIC_FILES; ?>plugins/file-upload/assets/css/html5fileupload.css">
        <link rel="stylesheet" href="<?= ASSETS; ?>css/custom.css">
        <!--REDEFINIMOS LOS COLORES-->
        <style type="text/css">
            .textoQuienesSomos h3 {color: <?= $vQuieneSomos['titulo']['hex']; ?> !important;}
            .textoQuienesSomos p {color: <?= $vQuieneSomos['contenido']['hex']; ?> !important;}
            .textoElEquipo h2 {color: <?= $vElEquipo['titulo']['hex']; ?> !important;}
            .textoElEquipo p {color: <?= $vElEquipo['contenido']['hex']; ?> !important;}
            .textoDemoReel h2 {color: <?= $vDemoReel['titulo']['hex']; ?> !important;}
            .textoServicios h2 {color: <?= $vServicios['titulo']['hex']; ?> !important;}
            .textoServiciosList h3 {color: <?= $vServicios['titulo']['hex']; ?> !important;}
            .textoServiciosList p {color: <?= $vServicios['contenido']['hex']; ?> !important;}
            .textoFrase h3 {color: <?= $vFrase['titulo']['hex']; ?> !important;}
            .textoFrase p {color: <?= $vFrase['contenido']['hex']; ?> !important;}
            .textoTrabajosTitulo li a{color: <?= $vTrabajos['titulo']['hex']; ?> !important;}
            .textoTrabajosContenido h4 {color: <?= $vTrabajos['contenido']['hex']; ?> !important;}
            .textoTrabajosContenido p {color: <?= $vTrabajos['contenido']['hex']; ?> !important;}
            .textoClientes h2 {color: <?= $vClientes['titulo']['hex']; ?> !important;}
            .textoClientes p {color: <?= $vClientes['contenido']['hex']; ?> !important;}
            .textoTrabaja h2 {color: <?= $vTrabaja['titulo']['hex']; ?> !important;}
            .textoTrabaja p {color: <?= $vTrabaja['contenido']['hex']; ?> !important;}
            .textoContacto h2 {color: <?= $vContacto['titulo']['hex']; ?> !important;}
            .textoContacto h4 {color: <?= $vContacto['titulo']['hex']; ?> !important;}
            .textoContacto p {color: <?= $vContacto['contenido']['hex']; ?> !important;}
            .textoFooter h3 {color: <?= $vFooter['titulo']['hex']; ?> !important;}
            .textoFooter p {color: <?= $vFooter['contenido']['hex']; ?> !important;}
            .wg-pp-title a {color: <?= $vFooter['contenido']['hex']; ?> !important;}
        </style>
        <script src="<?= ASSETS; ?>js/vendor/modernizr-2.6.2.min.js"></script>
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/' . $public_css . '" type="text/css">';
            }
        }
        ?>
        <script src="<?= ASSETS; ?>js/vendor/jquery-1.10.2.min.js"></script>
        <?php
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
            }
        }
        ?>
        <!--FILE UPLOAD-->
        <script src="<?= PUBLIC_FILES; ?>plugins/file-upload/assets/js/html5fileupload.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".top-main-menu-scrollspy" data-offset="60">