<?php

class Contenido_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function mostrarModalTrabaja() {
        $formulario = '
                    <div class="col-md-12">
                        <h3 class="SourceSansPro-Regular">Envíanos tus datos y adjuntá tu CV</h3>
                    </div>
                    <div class="col-md-12">
                        <form method="post" id="frmTrabaja" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cv-name" placeholder="Nombre Completo *" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="cv-email" placeholder="Dirección de Email *" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="cv-telephone" placeholder="Teléfono *" required="">
                            </div>
                            <div class="form-group">
                                <textarea rows="8" class="form-control" name="cv-message" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Adjunte su C.V.</label>
                                <span class="tiposArchivos">Tipos de Archivos Permitios</span>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Archivos Pdf"><img src="' . ASSETS . 'img/pdf-icon.png" alt="PDF"></a>/'
                . '             <a href="#" data-toggle="tooltip" data-placement="top" title="Archivos de Word"><img src="' . ASSETS . 'img/word-icon.png" alt="Word"></a>
                                <div class="html5fileupload trabajaFile" data-form="true" data-valid-extensions="pdf,PDF,doc,DOC,docx,DOCX" style="width: 100%;">
                                    <input type="file" name="file" />
                                </div>
                                <script type="text/javascript">
                                    $(".html5fileupload.trabajaFile").html5fileupload();
                                </script>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary" id="btn-submit-cv" value="Enviar">
                            </div>
                        </form>
                    </div>';
        $data = array(
            'titulo' => 'Enviar C.V.',
            'contenido' => $formulario
        );
        return json_encode($data);
    }

}
