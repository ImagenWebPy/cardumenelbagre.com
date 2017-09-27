<?php
$helper = new Helper();
$colores = $this->getColores;
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
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Colores
            <small>Colores de Textos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Colores</li>
        </ol>
    </section>
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quienes Somos</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresQuienesSomos">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="quienes[titulo]" data-id="<?= $vQuieneSomos['titulo']['id']; ?>" value="<?= $vQuieneSomos['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="quienes[contenido]" data-id="<?= $vQuieneSomos['contenido']['id']; ?>" value="<?= $vQuieneSomos['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">El Equipo</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresElEquipo">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="equipo[titulo]" data-id="<?= $vElEquipo['titulo']['id']; ?>" value="<?= $vElEquipo['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="equipo[contenido]" data-id="<?= $vElEquipo['contenido']['id']; ?>" value="<?= $vElEquipo['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Demo Reel</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresDemoReel">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="demo[titulo]" data-id="<?= $vDemoReel['titulo']['id']; ?>" value="<?= $vDemoReel['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Servicios</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresServicios">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="servicios[titulo]" data-id="<?= $vServicios['titulo']['id']; ?>" value="<?= $vServicios['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="servicios[contenido]" data-id="<?= $vServicios['contenido']['id']; ?>" value="<?= $vServicios['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
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
                            <form class="form-horizontal" id="frmModColoresFrase">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="frase[titulo]" data-id="<?= $vFrase['titulo']['id']; ?>" value="<?= $vFrase['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="frase[contenido]" data-id="<?= $vFrase['contenido']['id']; ?>" value="<?= $vFrase['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Trabajos</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresTrabajos">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="trabajos[titulo]" data-id="<?= $vTrabajos['titulo']['id']; ?>" value="<?= $vTrabajos['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="trabajos[contenido]" data-id="<?= $vTrabajos['contenido']['id']; ?>" value="<?= $vTrabajos['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Clientes</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresClientes">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="clientes[titulo]" data-id="<?= $vClientes['titulo']['id']; ?>" value="<?= $vClientes['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="clientes[contenido]" data-id="<?= $vClientes['contenido']['id']; ?>" value="<?= $vClientes['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Trabaja con Nosotros</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresTrabaja">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="trabaja[titulo]" data-id="<?= $vTrabaja['titulo']['id']; ?>" value="<?= $vTrabaja['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="trabaja[contenido]" data-id="<?= $vTrabaja['contenido']['id']; ?>" value="<?= $vTrabaja['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Contacto</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresContacto">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="contacto[titulo]" data-id="<?= $vContacto['titulo']['id']; ?>" value="<?= $vContacto['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="contacto[contenido]" data-id="<?= $vContacto['contenido']['id']; ?>" value="<?= $vContacto['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary collapsed-box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pie de Página</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="display: none;">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="frmModColoresFooter">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Color del Título:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="footer[titulo]" data-id="<?= $vFooter['titulo']['id']; ?>" value="<?= $vFooter['titulo']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Color del Contenido:</label>
                                        <div class="input-group coloresPicker">
                                            <input type="text" name="footer[contenido]" data-id="<?= $vFooter['contenido']['id']; ?>" value="<?= $vFooter['contenido']['hex']; ?>" class="form-control" required>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-block btn-info">Modificar</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(function () {
        $(document).on("submit", "#frmModColoresQuienesSomos", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='quienes[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='quienes[titulo]'").val();
                var contenido_id = $("input[name='quienes[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='quienes[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresElEquipo", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='equipo[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='equipo[titulo]'").val();
                var contenido_id = $("input[name='equipo[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='equipo[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });

        $(document).on("submit", "#frmModColoresDemoReel", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='demo[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='demo[titulo]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresServicios", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='servicios[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='servicios[titulo]'").val();
                var contenido_id = $("input[name='servicios[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='servicios[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresFrase", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='frase[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='frase[titulo]'").val();
                var contenido_id = $("input[name='frase[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='frase[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresTrabajos", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='trabajos[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='trabajos[titulo]'").val();
                var contenido_id = $("input[name='trabajos[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='trabajos[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresClientes", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='clientes[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='clientes[titulo]'").val();
                var contenido_id = $("input[name='clientes[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='clientes[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresTrabaja", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='trabaja[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='trabaja[titulo]'").val();
                var contenido_id = $("input[name='trabaja[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='trabaja[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresContacto", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='contacto[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='contacto[titulo]'").val();
                var contenido_id = $("input[name='contacto[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='contacto[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmModColoresFooter", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.preventDefault();
                var titulo_id = $("input[name='footer[titulo]'").attr("data-id");
                var titulo_hex = $("input[name='footer[titulo]'").val();
                var contenido_id = $("input[name='footer[contenido]'").attr("data-id");
                var contenido_hex = $("input[name='footer[contenido]'").val();
                $.ajax({
                    url: "<?= URL; ?>admin/editColores",
                    type: "POST",
                    data: {titulo_id: titulo_id,
                        titulo_hex: titulo_hex,
                        contenido_id: contenido_id,
                        contenido_hex: contenido_hex
                    },
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
                // avoid to execute the actual submit of the form.
            }
            e.handled = true;
        });
    });
</script>