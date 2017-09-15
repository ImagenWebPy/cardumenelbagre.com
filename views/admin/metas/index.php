<?php
$helper = new Helper();
$metas = $this->metas;
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Meta Etiquetas  
            <small>Información de la Empresa</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL_ADMIN; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Metas Etiquetas</li>
        </ol>
    </section>
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Etiquetas del sitio</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?= URL; ?>admin/editMetas/">
                <div class="box-body">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Título del sitio</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="title"><?= utf8_encode($metas['title']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Decripción del sitio</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="description"><?= utf8_encode($metas['description']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Keywords(Tags)</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="keywords"><?= utf8_encode($metas['keywords']); ?></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Guardar Cambios</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </section>
</div>