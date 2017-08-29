<script src="<?= ASSETS; ?>js/vendor/jquery-1.10.2.min.js"></script>
<script src="<?= ASSETS; ?>js/vendor/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?= ASSETS; ?>js/vendor/jquery.touchSwipe.min.js"></script>

<script src="<?= ASSETS; ?>js/bootstrap/carousel.js"></script>
<script src="<?= ASSETS; ?>js/bootstrap/tab.js"></script>
<script src="<?= ASSETS; ?>js/bootstrap/collapse.js"></script>
<script src="<?= ASSETS; ?>js/bootstrap/scrollspy.js"></script>
<script src="<?= ASSETS; ?>js/bootstrap/affix.js"></script>
<script src="<?= ASSETS; ?>js/bootstrap/transition.js"></script>

        <!--[if IE]><script type="text/javascript" src="<?= ASSETS; ?>js/vendor/excanvas.js"></script><![endif]-->
<script src="<?= ASSETS; ?>js/vendor/jquery.knob.min.js"></script>
<script src="<?= ASSETS; ?>js/vendor/fastclick.min.js"></script>
<script src="<?= ASSETS; ?>js/vendor/jquery.stellar.min.js"></script>

<script src="<?= ASSETS; ?>js/vendor/jquery.mousewheel.js"></script>
<script src="<?= ASSETS; ?>js/vendor/perfect-scrollbar.min.js"></script>
<script src="<?= ASSETS; ?>js/vendor/jquery.mtmenu.js"></script>

<script src="<?= ASSETS; ?>js/vendor/isotope.pkgd.min.js"></script>

<script src="<?= ASSETS; ?>js/vendor/jquery.validationEngine.js"></script>
<script src="<?= ASSETS; ?>js/vendor/jquery.validationEngine-en.js"></script>

<!-- LayerSlider script files -->
<script src="<?= ASSETS; ?>plugins/layerslider/js/greensock.js" type="text/javascript"></script>
<script src="<?= ASSETS; ?>plugins/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="<?= ASSETS; ?>plugins/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

<script src="<?= ASSETS; ?>js/plugins.js"></script>
<script src="<?= ASSETS; ?>js/main.js"></script>
<script src="<?= ASSETS; ?>js/jquery.youtubebackground.js"></script>
<script>
    jQuery(function ($) {

        $('#background-video').YTPlayer({
            fitToBackground: true,
            videoId: '9lvptGdodCA',
            height: "100%",
            width: "100%",
            mute: false,
            callback: function () {
                videoCallbackEvents();
            }
        });

        var videoCallbackEvents = function () {
            var player = $('#background-video').data('ytPlayer').player;
            player.addEventListener('onStateChange', function (event) {
                console.log("Player State Change", event);

                // OnStateChange Data
                if (event.data === 0) {
                    console.log('video ended');
                } else if (event.data === 2) {
                    console.log('paused');
                }
            });
        }
    });
</script>
<?php
#cargamos los js de las vistas
if (isset($this->external_js)) {
    foreach ($this->external_js as $external) {
        echo '<script async defer src="' . $external . '"></script>';
    }
}
if (isset($this->public_js)) {
    foreach ($this->public_js as $public_js) {
        echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
    }
}
if (isset($this->js)) {
    foreach ($this->js as $js) {
        echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
    }
}
?>

</body>
</html>