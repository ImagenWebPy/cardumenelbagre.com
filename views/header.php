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
        <link rel="stylesheet" href="<?= PUBLIC_FILES; ?>plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= ASSETS; ?>layerslider/css/layerslider.css">
        <link rel="stylesheet" href="<?= ASSETS; ?>css/custom.css">
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
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
            }
        }
        ?>
    </head>
    <body data-spy="scroll" data-target=".top-main-menu-scrollspy" data-offset="60">