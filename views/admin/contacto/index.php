<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contacto
            <small>Ver datos de contacto</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Contacto</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listado de Contactos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="tblContacto" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Visto</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Visto</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Asunto</th>
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
        $("#tblContacto").DataTable({
            "aaSorting": [[1, "desc"]],
            "paging": true,
            "orderCellsTop": true,
            //"scrollX": true,
            //"scrollCollapse": true,
            "fixedColumns": true,
            "iDisplayLength": 20,
            "ajax": {
                "url": "<?= URL ?>admin/cargarDTContacto/",
                "type": "post"
            },
            "columns": [
                {"data": "visto"},
                {"data": "fecha"},
                {"data": "nombre"},
                {"data": "email"},
                {"data": "asunto"},
                {"data": "accion"}
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            },
            "aoColumnDefs": [
                {"aTargets": [0], "mData": null, "sClass": "visto"}
            ]
        });
        $(document).on("click", ".btnDatosContacto", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/modalVerContacto",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                    if (data['cambiar_estado'] == true) {
                        $('#contacto_' + data['id'] + '>td:first').html('<a class="pointer text-green"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>');
                    }
                });
            }
            e.handled = true;
        });
    });
</script>