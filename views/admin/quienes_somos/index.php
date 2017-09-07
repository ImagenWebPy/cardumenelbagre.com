<?php
$helper = new Helper();
$quienesSomos = $this->quienesSomos;
$elEquipo = $this->elEquipo;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quiénes Somos
            <small>Información de la Empresa</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Quiénes Somos</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Quienes Somos
                            <small>Contenido</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <div class="box-body pad">
                        <form id="frmQuienesSomos" method="POST">
                            <div class="box-body">
                                <textarea id="editor1" name="quieneSomos" rows="10" cols="80">
                                    <?= $quienesSomos; ?>      
                                </textarea>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-block btn-primary">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">El Equipo
                            <small>Contenido</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <form id="frmElEquipo" method="POST">
                            <div class="box-body">
                                <textarea id="editor1" name="elEquipo" rows="10" cols="80">
                                    <?= utf8_encode($elEquipo['el_equipo']); ?>      
                                </textarea>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-block btn-primary">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">El Equipo
                            <small>Imagen</small>
                        </h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                        <?= $this->helper->messageAlert('warning', 'Las imagenes se redimensionaran proporcionalmente en las dimensiones 690px x 635px.'); ?>
                        <form method="POST" action="">
                            <div class="fields-group-1 groups ">
                                <div class="group-title">Sube el archivo</div>
                                <div class="form-group">
                                    <div class="html5fileupload equipo uploadFileInput" data-url="<?= URL; ?>admin/upload_img_equipo" data-max-filesize="2048000" data-valid-extensions="jpg,jpeg,JPG,JPEG,png,PNG" style="width: 100%;">
                                        <input type="file" name="resumido" required="required" />
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>
                            $(".html5fileupload.equipo").html5fileupload({
                                data: {id: 1},
                                onAfterStartSuccess: function (response) {
                                    $("#imgEquipo").html(response.content);
                                }
                            });
                        </script>
                        <p>&nbsp;</p>
                        <h3>Imagen Actual</h3>
                        <div class="col-md-6" id="imgEquipo">
                            <img src="<?= URL; ?>public/assets/img/<?= $elEquipo['img_equipo']; ?>">
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
</div>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('quieneSomos');
        CKEDITOR.replace('elEquipo');
        $(document).on("submit", "#frmQuienesSomos", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var url = "<?= URL ?>admin/editQuienesSomos"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#frmQuienesSomos").serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                        $(".genericModal .modal-title").html('Quienes Somos');
                        $(".genericModal .modal-body").html('Se ha modificado correctamente el contenido de Quienes Somos');
                        $(".genericModal").modal("toggle");
                    }
                });
                e.preventDefault(); // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmElEquipo", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var url = "<?= URL ?>admin/editElEquipo"; // the script where you handle the form input.
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $("#frmElEquipo").serialize(), // serializes the form's elements.
                    success: function (data)
                    {
                        $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                        $(".genericModal .modal-title").html('Quienes Somos');
                        $(".genericModal .modal-body").html('Se ha modificado correctamente el contenido de El Equipo');
                        $(".genericModal").modal("toggle");
                    }
                });
                e.preventDefault(); // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
    });
</script>