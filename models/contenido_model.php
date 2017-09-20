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

    public function loadMore($data) {
        $fecha = $data['fecha'];
        $items_per_page = $data['items'];
        $sql = $this->db->select("SELECT  p.id,
                                          p.titulo,
                                          p.contenido,
                                          (SELECT pa.descripcion FROM post_archivo pa WHERE pa.id_post = p.id AND pa.img_principal = 1 AND pa.estado = 1 AND pa.id_tipo_archivo = 1) AS img,
                                          c.descripcion AS categoria,
                                          c.id AS id_categoria,
                                          c.tag,
                                          p.fecha
                                FROM post p
                                LEFT JOIN post_categoria pc ON pc.id_post = p.id 
                                LEFT JOIN categoria c ON c.id = pc.id_categoria
                                WHERE p.estado = 1
                                and p.fecha < '$fecha'
                                ORDER BY p.fecha DESC
                                LIMIT $items_per_page");
        $lista = '';
        $fechaUltimoPost = '';
        foreach ($sql as $contenido) {
            $tituloPost = (strlen($contenido['titulo']) > 35) ? substr(utf8_encode($contenido['titulo']), 0, 35) . '...' : utf8_encode($contenido['titulo']);
            $fechaPost = $this->helper->mesEspanol(date('F', strtotime($contenido['fecha']))) . '-' . date('Y', strtotime($contenido['fecha']));
            $contenidoResumido = (strlen($contenido['contenido']) > 180) ? substr(utf8_encode($contenido['contenido']), 0, 180) . '...' : utf8_encode($contenido['contenido']);
            $lista .= '<li class="gl-item gl-fixed-ratio-item gl-loading" data-category="' . $this->helper->cleanUrl(strtolower(utf8_encode($contenido['tag']))) . '">
                        <a href="#">
                            <figure>
                                <img src="' . URL . 'public/assets/img/trabajos/' . $contenido['img'] . '" alt="">
                                <figcaption>
                                    <div class="middle"><div class="middle-inner">
                                            <p class="gl-item-title sourcePro">' . utf8_encode($contenido['titulo']) . '</p>
                                        </div></div>
                                </figcaption>

                            </figure>
                            <div class="divTitulosPost">
                                <p class="tipoEvento">' . $this->helper->cleanUrl(strtolower(utf8_encode($contenido['tag']))) . '</p>
                                <p class="tituloPost">' . $tituloPost . '</p>
                                <p class="fechaPost">' . $fechaPost . '</p>
                            </div>
                        </a>
                        <div class="gl-preview" style="diplay:none;" data-category="' . utf8_encode($contenido['categoria']) . '">
                            <span class="glp-arrow"></span>
                            <a href="#" class="glp-close"></a>
                            <div class="row gl-preview-container">';
            $archivos = $this->helper->getArchivosPOst($contenido['id']);
            if ($archivos['tipo'] == 'imagen') {
                $lista .= '         <div class="col-sm-8">
                                        <div id="carousel-gallery-1" class="carousel slide" data-ride="carousel" data-interval="false">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">';
                foreach ($archivos['imagenes'] as $item) {
                    $lista .= '                 <div class="item ' . ($item['principal'] == 1) ? 'active' : '' . '">
                                                    <img src="' . URL . 'public/assets/img/trabajos/' . $item['imagen'] . '" alt="slide">
                                                </div>';
                }
                $lista .= '                 </div>
                                            <ol class="carousel-indicators">';
                for ($i = 0; $i <= (count($archivos['imagenes']) - 1); $i++) {
                    $lista .= '                 <li data-target="#carousel-gallery-1" data-slide-to="' . $i . '"></li>';
                }
                $lista .= '                 </ol>
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#carousel-post-1" data-slide="prev">
                                                <span></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-post-1" data-slide="next">
                                                <span></span>
                                            </a>
                                        </div> <!-- carousel -->
                                    </div>';
            } else {
                $imgVideo = '';
                foreach ($archivos['imagenes'] as $item) {
                    if ($item['principal'] == 1) {
                        $imgVideo = utf8_encode($item['imagen']);
                    }
                }
                $lista .= ' <div class="col-sm-8">
                                        <div class="glp-video">';

                foreach ($archivos['video'] as $item) {
                    $lista .= '             <iframe src="https://www.youtube.com/embed/' . utf8_encode($item['archivo']) . '" frameborder="0" allowfullscreen></iframe>';
                }

                $lista .= '             </div>
                                    </div>';
            }
            $lista .= '<div class="col-sm-4 lg-preview-descr sourcePro">
                                    <h4>' . utf8_encode($contenido['titulo']) . '</h4>
                                    ' . $contenidoResumido . '
                                    <a href="' . URL . 'post/contenido/' . $contenido['id'] . '/' . $this->helper->getPostTitle($contenido['id'])['url'] . '" class="btn btn-primary glp-readmore linkWhite">Leer màs</a>
                                </div>
                            </div>
                        </div> <!-- gl-preview -->
                    </li>';
            $fechaUltimoPost = $contenido['fecha'];
        }
        $datos = array(
            'lista' => $lista,
            'fecha_ultimo_post' => $fechaUltimoPost
        );
        return $datos;
    }

    public function enviarFrmContacto($data) {
        #obtenemo el email
        $sql = $this->db->select("select email from config_sitio where id = 1");
        $destinatario = $sql[0]['email'];
        $nombre = $data['name'];
        $email = $data['email'];
        $asunto = $data['subject'];
        $mensaje = $data['message'];
        $fecha = date('Y-m-d H:i:s');
        $asuntoMail = 'Contacto desde el sitio web';
        $this->db->insert('contacto', array(
            'nombre' => utf8_decode($nombre),
            'email' => utf8_decode($email),
            'asunto' => utf8_decode($asunto),
            'mensaje' => utf8_decode($mensaje),
            'fecha' => $fecha
        ));
        $asunto = "Contacto desde el sitio web - Formulario de Contacto";
        $message = "<h2>Hola, se ha contactado la siguiente persona</h2>
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td>$nombre</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <td>Asunto:</td>
                            <td>$asunto</td>
                        </tr>
                        <tr>
                            <td>Mensaje:</td>
                            <td>$mensaje</td>
                        </tr>
                        <tr>
                            <td>Fecha:</td>
                            <td>$fecha</td>
                        </tr>
                        <tr>
                            <td>Este mensaje tambien lo puede leer en el administrador del sitio.</td>
                        </tr>
                    </table>";
        $this->helper->sendMail($destinatario, $asuntoMail, $message);
        return json_encode(TRUE);
    }

    public function enviarFrmContactoFooter($data) {
        #obtenemo el email
        $sql = $this->db->select("select email from config_sitio where id = 1");
        $destinatario = $sql[0]['email'];
        $nombre = $data['name'];
        $email = $data['email'];
        $mensaje = $data['message'];
        $fecha = date('Y-m-d H:i:s');
        $asuntoMail = 'Contacto desde el sitio web';
        $this->db->insert('contacto', array(
            'nombre' => utf8_decode($nombre),
            'email' => utf8_decode($email),
            'mensaje' => utf8_decode($mensaje),
            'fecha' => $fecha
        ));
        $asunto = "Contacto desde el sitio web - Formulario de Contacto del Pie del Sitio";
        $message = "<h2>Hola, se ha contactado la siguiente persona</h2>
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td>$nombre</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <td>Mensaje:</td>
                            <td>$mensaje</td>
                        </tr>
                        <tr>
                            <td>Fecha:</td>
                            <td>$fecha</td>
                        </tr>
                        <tr>
                            <td>Este mensaje tambien lo puede leer en el administrador del sitio.</td>
                        </tr>
                    </table>";
        $this->helper->sendMail($destinatario, $asuntoMail, $message);
        return json_encode(TRUE);
    }

    public function subir_datos_trabaja($data) {
        $this->db->insert('trabaja', array(
            'nombre' => utf8_decode($data['nombre']),
            'email' => utf8_decode($data['email']),
            'telefono' => utf8_decode($data['telefono']),
            'mensaje' => utf8_decode($data['mensaje']),
            'fecha' => date('Y-m-d H:i:s')
        ));
        $idTrabaja = $this->db->lastInsertId();
        $data = array(
            'id' => $idTrabaja
        );
        return $data;
    }

    public function updateTrabaja($update) {
        $id = $update['id'];
        $actualizar = array(
            'archivo' => $update['archivo']
        );
        $this->db->update('trabaja', $actualizar, "`id` = $id");
    }

}
