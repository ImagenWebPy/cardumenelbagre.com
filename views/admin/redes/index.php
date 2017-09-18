<?php
$helper = new Helper();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Redes
            <small>Redes Sociales</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Redes</li>
        </ol>
    </section>
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listado</h3>
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarRed">Agregar Red Social</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tblRedes" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Red</th>
                                    <th>Perfil</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Red</th>
                                    <th>Perfil</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#tblRedes").DataTable({
            "aaSorting": [[0, "asc"]],
            "paging": true,
            "orderCellsTop": true,
            //"scrollX": true,
            //"scrollCollapse": true,
            "fixedColumns": true,
            "iDisplayLength": 25,
            "ajax": {
                "url": "<?= URL ?>admin/cargarDTRedes/",
                "type": "post"
            },
            "columns": [
                {"data": "red"},
                {"data": "perfil"},
                {"data": "estado"},
                {"data": "accion"}
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
        $(document).on("click", ".btnAgregarRed", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                $.ajax({
                    url: "<?= URL; ?>admin/modalAgregarRed",
                    type: "POST",
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("click", ".btnEditarRed", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/modalEditarRed",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmEditarRed", function (e) {
            var url = "<?= URL ?>admin/editRed"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarRed").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    if (data['type'] == 'success') {
                        $("#red" + data['id']).html(data['row']);
                        $(".genericModal").modal("toggle");
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
        $(document).on("click", ".btnEliminarRed", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/modalEliminarRed",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmEliminarRed", function (e) {
            var url = "<?= URL ?>admin/deleteRed"; // the script where you handle the form input.
            var id = $("#btnEliminarRed").attr("data-id");
            $.ajax({
                type: "POST",
                url: url,
                data: {id: id}, // serializes the form's elements.
                success: function (data)
                {
                    if (data['type'] == 'success') {
                        $("#red" + data['id']).remove();
                        $(".genericModal").modal("toggle");
                    }
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>