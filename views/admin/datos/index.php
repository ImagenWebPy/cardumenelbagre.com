<?php
$helper = new Helper();
$video = $this->getVideoInicio;
$reel = $this->getReel;
$datosConfig = $this->getDatosConfig;
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Datos Generales 
            <small>Información Varias</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Datos Generales</li>
        </ol>
    </section>
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Video de la Portada</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModVideoInicio">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">ID del Video de Youtube</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="valor" value="<?= $video['valor']; ?>" placeholder="ID">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <div class="col-md-12" id="videoInicio">
                            <iframe src="https://www.youtube.com/embed/<?= $video['valor']; ?>" frameborder="0" allowfullscreen style="display: block;"></iframe>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Reel</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModReel">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">ID del Video YouTube</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="valor" value="<?= $video['valor']; ?>" placeholder="ID">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <div class="col-md-12" id="videoReel">
                            <iframe src="https://www.youtube.com/embed/<?= $reel['valor']; ?>" frameborder="0" allowfullscreen style="display: block;"></iframe>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Datos de Contacto</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModDatosContacto">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email Sitio</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" value="<?= $datosConfig['email']; ?>" placeholder="ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Teléfono</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="telefono" value="<?= $datosConfig['telefono']; ?>" placeholder="ID">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Google Maps</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModLatLong">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Latitud</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="latitud" value="<?= $datosConfig['latitud']; ?>" placeholder="Latitud">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Longitud</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="longitud" value="<?= $datosConfig['longitud']; ?>" placeholder="Longitud">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <div class="col-md-12">
                            <h4>Marcador</h4>
                            <div class="box-body pad">
                                <?= $this->helper->messageAlert('warning', 'Recomendacione: Suba una imagen PNG con transparencia para el icono de marcador'); ?>
                                <form method="POST" action="">
                                    <div class="fields-group-1 groups ">
                                        <div class="group-title">Sube el archivo</div>
                                        <div class="form-group">
                                            <div class="html5fileupload equipo uploadFileInput" data-url="<?= URL; ?>admin/upload_img_marker" data-max-filesize="2048000" data-valid-extensions="jpg,jpeg,JPG,JPEG,png,PNG" style="width: 100%;">
                                                <input type="file" name="resumido" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    $(".html5fileupload.equipo").html5fileupload({
                                        data: {id: 1},
                                        onAfterStartSuccess: function (response) {
                                            $("#imgMarker").html(response.content);
                                        }
                                    });
                                </script>
                                <p>&nbsp;</p>
                                <h3>Imagen Actual</h3>
                                <div class="col-md-6" id="imgMarker">
                                    <img src="<?= ASSETS; ?>img/<?= $datosConfig['map_marker']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Frase</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModFrase">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Frase</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="frase"><?= utf8_encode($datosConfig['frase']); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Autor</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="autor" value="<?= utf8_encode($datosConfig['autor_frase']); ?>" placeholder="Longitud">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-info pull-right">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <div class="col-md-12">
                            <h4>Imagen Fondo</h4>
                            <div class="box-body pad">
                                <?= $this->helper->messageAlert('warning', 'Las imagen se redimensionará proporcionalmente en las dimensiones 1920px x 1080px.'); ?>
                                <form method="POST" action="">
                                    <div class="fields-group-1 groups ">
                                        <div class="group-title">Sube el archivo</div>
                                        <div class="form-group">
                                            <div class="html5fileupload fondoFrase uploadFileInput" data-url="<?= URL; ?>admin/upload_img_fondoFrase" data-max-filesize="2048000" data-valid-extensions="jpg,jpeg,JPG,JPEG,png,PNG" style="width: 100%;">
                                                <input type="file" name="resumido" required="required" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    $(".html5fileupload.fondoFrase").html5fileupload({
                                        data: {id: 1},
                                        onAfterStartSuccess: function (response) {
                                            $("#imgFondoFrase").html(response.content);
                                        }
                                    });
                                </script>
                                <p>&nbsp;</p>
                                <h3>Imagen Actual</h3>
                                <div class="col-md-6" id="imgFondoFrase">
                                    <img src="<?= ASSETS; ?>img/fondos/<?= $datosConfig['img_frase']; ?>" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
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
                                                icon: '<?= ASSETS; ?>img/pez-marker.png',
                                                map: maps[mapDivId]
                                            });
                                        })
                                    }
                                    $(function () {
                                        $(document).on("submit", "#frmModVideoInicio", function (e) {
                                            if (e.handled !== true) // This will prevent event triggering more then once
                                            {
                                                var url = "<?= URL ?>admin/editVideoInicio"; // the script where you handle the form input.
                                                $.ajax({
                                                    type: "POST",
                                                    url: url,
                                                    data: $("#frmModVideoInicio").serialize(), // serializes the form's elements.
                                                    success: function (data)
                                                    {
                                                        $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                                                        $(".genericModal .modal-title").html('Video del Inicio');
                                                        $(".genericModal .modal-body").html('Se han modificado correctamente el video de la portada');
                                                        $(".genericModal").modal("toggle");

                                                    }
                                                });
                                                e.preventDefault(); // avoid to execute the actual submit of the form.
                                            }
                                            e.handled = true;
                                        });
                                        $(document).on("submit", "#frmModReel", function (e) {
                                            if (e.handled !== true) // This will prevent event triggering more then once
                                            {
                                                var url = "<?= URL ?>admin/editVideoReel"; // the script where you handle the form input.
                                                $.ajax({
                                                    type: "POST",
                                                    url: url,
                                                    data: $("#frmModReel").serialize(), // serializes the form's elements.
                                                    success: function (data)
                                                    {
                                                        $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                                                        $(".genericModal .modal-title").html('Reel');
                                                        $(".genericModal .modal-body").html('Se ha modificado correctamente el Reel');
                                                        $(".genericModal").modal("toggle");
                                                        $("#videoReel").html(data.contenido);
                                                    }
                                                });
                                                e.preventDefault(); // avoid to execute the actual submit of the form.
                                            }
                                            e.handled = true;
                                        });
                                        $(document).on("submit", "#frmModDatosContacto", function (e) {
                                            if (e.handled !== true) // This will prevent event triggering more then once
                                            {
                                                var url = "<?= URL ?>admin/editDatosContacto"; // the script where you handle the form input.
                                                $.ajax({
                                                    type: "POST",
                                                    url: url,
                                                    data: $("#frmModDatosContacto").serialize(), // serializes the form's elements.
                                                    success: function (data)
                                                    {
                                                        $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                                                        $(".genericModal .modal-title").html('Datos de Contacto');
                                                        $(".genericModal .modal-body").html('Se han modificado correctament los datos de contacto');
                                                        $(".genericModal").modal("toggle");
                                                        $("input[name='email']").val(data['email']);
                                                        $("input[name='telefono']").val(data['telefono']);
                                                    }
                                                });
                                                e.preventDefault(); // avoid to execute the actual submit of the form.
                                            }
                                            e.handled = true;
                                        });
                                        $(document).on("submit", "#frmModLatLong", function (e) {
                                            if (e.handled !== true) // This will prevent event triggering more then once
                                            {
                                                var url = "<?= URL ?>admin/editLatLong"; // the script where you handle the form input.
                                                $.ajax({
                                                    type: "POST",
                                                    url: url,
                                                    data: $("#frmModLatLong").serialize(), // serializes the form's elements.
                                                    success: function (data)
                                                    {
                                                        $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                                                        $(".genericModal .modal-title").html('Datos de Contacto');
                                                        $(".genericModal .modal-body").html('Se han modificado correctament los datos de latitud y longitud');
                                                        $(".genericModal").modal("toggle");
                                                        $("input[name='latitud']").val(data['latitud']);
                                                        $("input[name='longitud']").val(data['longitud']);
                                                    }
                                                });
                                                e.preventDefault(); // avoid to execute the actual submit of the form.
                                            }
                                            e.handled = true;
                                        });
                                        $(document).on("submit", "#frmModFrase", function (e) {
                                            if (e.handled !== true) // This will prevent event triggering more then once
                                            {
                                                var url = "<?= URL ?>admin/editFrase"; // the script where you handle the form input.
                                                $.ajax({
                                                    type: "POST",
                                                    url: url,
                                                    data: $("#frmModFrase").serialize(), // serializes the form's elements.
                                                    success: function (data)
                                                    {
                                                        $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                                                        $(".genericModal .modal-title").html('Datos de Contacto');
                                                        $(".genericModal .modal-body").html('Se ha modificado correctamente la frase');
                                                        $(".genericModal").modal("toggle");
                                                        $("input[name='frase']").val(data['frase']);
                                                        $("input[name='autor']").val(data['autor']);
                                                    }
                                                });
                                                e.preventDefault(); // avoid to execute the actual submit of the form.
                                            }
                                            e.handled = true;
                                        });
                                    });
</script>