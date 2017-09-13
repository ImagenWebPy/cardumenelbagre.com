<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function cargarDTContacto() {
        $datos = array();
        $sql = $this->db->select('SELECT c.*
                                  FROM contacto c');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnDatosContacto btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-eye" aria-hidden="true"></i> Ver Datos</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer text-green"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            } else {
                $estado = '<a class="pointer text-red"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'contacto_' . $id,
                'visto' => $estado,
                'fecha' => date('d-m-Y', strtotime($item['fecha'])),
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'asunto' => utf8_encode($item['asunto']),
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTUnidades() {
        $datos = array();
        $sql = $this->db->select('SELECT un.*
                                  FROM unidades_negocio un');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarUnidad btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarUnidad btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'unidades' . $id,
                'titulo' => utf8_encode($item['titulo']),
                'contenido' => substr(utf8_encode(strip_tags($item['contenido'])), 0, 160) . '...',
                'accion' => $btn . ' | ' . $btnDel
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function modalVerContacto($data) {
        $id = $data['id'];
        $cambiarEstado = FALSE;
        $sql = $this->db->select("SELECT c.*
                                FROM contacto c
                                where c.id = $id");
        if ($sql[0]['estado'] == 0) {
            #cambiamos el estado del mensaje
            $update = array(
                'estado' => 1
            );
            $this->db->update('contacto', $update, "id = $id");
            $cambiarEstado = TRUE;
        }
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                    <dt>Enviado el:</dt>
                    <dd>' . date('d-m-Y', strtotime($sql[0]['fecha'])) . '</dd>
                    <dt>Hora:</dt>
                    <dd>' . date('H:i:s', strtotime($sql[0]['fecha'])) . '</dd>
                    <dt>Nombre:</dt>
                    <dd>' . utf8_encode($sql[0]['nombre']) . '</dd>
                    <dt>Email: </dt>
                    <dd>' . utf8_encode($sql[0]['email']) . '</dd>
                    <dt>Asunto: </dt>
                    <dd>' . utf8_encode($sql[0]['asunto']) . '</dd>
                    <dt>Mensaje: </dt>
                    <dd>' . utf8_encode($sql[0]['mensaje']) . '</dd>
                </dl>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Mensaje de ' . utf8_encode($sql[0]['nombre']),
            'contenido' => $form,
            'id' => $id,
            'cambiar_estado' => $cambiarEstado
        );
        return json_encode($datos);
    }

    public function quienesSomos() {
        $sql = $this->db->select("select quienes_somos from quienes_somos where id = 1");
        return utf8_encode($sql[0]['quienes_somos']);
    }

    public function elEquipo() {
        $sql = $this->db->select("select el_equipo, img_equipo from quienes_somos where id = 1");
        return $sql[0];
    }

    public function editQuienesSomos($data) {
        $id = 1;
        $update = array(
            "quienes_somos" => utf8_decode($data['quiene_somos'])
        );
        $this->db->update('quienes_somos', $update, "id = $id");
        return json_encode(true);
    }

    public function editElEquipo($data) {
        $id = 1;
        $update = array(
            "el_equipo" => utf8_decode($data['el_equipo'])
        );
        $this->db->update('quienes_somos', $update, "id = $id");
        return json_encode(true);
    }

    public function unlinkImgEquipo() {
        $dir = 'public/assets/img/';
        $sql = $this->db->select("select img_equipo from quienes_somos where id = 1");
        unlink($dir . $sql[0]['img_equipo']);
    }

    public function uploadImgEquipo($data) {
        $update = array(
            'img_equipo' => $data['img']
        );
        $this->db->update('quienes_somos', $update, "id = 1");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/assets/img/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'content' => $contenido
        );
        return $datos;
    }

    public function modalAgregarUnidad() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Unidad</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddUnidad">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" name="unidad[titulo]" class="form-control" placeholder="Ingrese el titulo" value="">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea id="editor1" name="unidad[contenido]" rows="10" cols="80">
                        </textarea>
                    </div>
                    <script>
                        CKEDITOR.replace("unidad[contenido]");
                    </script>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="unidad[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Unidad</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Unidad de Negocio',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarUnidad($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from unidades_negocio where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Unidad</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" id="frmEditarUnidad">
                    <input type="hidden" name="unidad[id]" value="' . $id . '">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" name="unidad[titulo]" class="form-control" placeholder="Ingrese el titulo" value="' . utf8_encode($sql[0]['titulo']) . '">
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea id="editor1" name="unidad[contenido]" rows="10" cols="80">
                        ' . utf8_encode($sql[0]['contenido']) . '
                        </textarea>
                    </div>
                    <script>
                        CKEDITOR.replace("unidad[contenido]");
                    </script>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="unidad[estado]" value="1" ' . $checked . '>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Editar ' . utf8_encode($sql[0]['titulo']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function frmAddUnidad($data) {
        $this->db->insert('unidades_negocio', array(
            'titulo' => utf8_decode($data['titulo']),
            'contenido' => utf8_decode($data['contenido']),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function editUnidad($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            'titulo' => utf8_decode($data['titulo']),
            'contenido' => $data['contenido'],
            'estado' => $estado
        );
        $this->db->update('unidades_negocio', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM unidades_negocio where id = $id");

        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['titulo']) . '</td>
            <td>' . utf8_encode(strip_tags($sql[0]['contenido'])) . '...</td>
            <td><a class="btn btn-app pointer btnEditarUnidad btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> 
            | <a class="btn btn-app pointer btnEliminarUnidad btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>
            </td>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function modalEliminarUnidad($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM unidades_negocio where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarUnidad" method="POST">
                    <input type="hidden" name="contacto[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la unidad "<strong>' . utf8_encode($sql[0]['titulo']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnEliminarUnidad" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['titulo']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEliminarPost($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM post where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarPost" method="POST">
                    <input type="hidden" name="contacto[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la publicación "<strong>' . utf8_encode($sql[0]['titulo']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnEliminarPost" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['titulo']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function deleteUnidad($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from unidades_negocio where id = :id");
            $sth->execute(array(
                ':id' => $id
            ));
            $datos = array(
                'type' => 'success',
                'id' => $id,
                'contenido' => ''
            );
        } catch (Exception $ex) {
            $datos = array(
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }

        return $datos;
    }

    public function deletePost($data) {
        $id = $data['id'];
        #eliminamos la categoria
        try {
            $sth = $this->db->prepare("delete from post_categoria where id_post = :id");
            $sth->execute(array(
                ':id' => $id
            ));
            $datos = array(
                'type' => 'success',
                'id' => $id,
                'contenido' => ''
            );
        } catch (Exception $ex) {
            $datos = array(
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }
        #eliminamos los archivos
        $sql = $this->db->select("select * from post_archivo where id_post = $id and id_tipo_archivo = 1");
        foreach ($sql as $item) {
            $dir = 'public/assets/img/trabajos/';
            unlink($dir . $item['descripcion']);
        }
        try {
            $sth = $this->db->prepare("delete from post_archivo where id_post = :id");
            $sth->execute(array(
                ':id' => $id
            ));
            $datos = array(
                'type' => 'success',
                'id' => $id,
                'contenido' => ''
            );
        } catch (Exception $ex) {
            $datos = array(
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }
        #eliminamos el post
        try {
            $sth = $this->db->prepare("delete from post where id = :id");
            $sth->execute(array(
                ':id' => $id
            ));
            $datos = array(
                'type' => 'success',
                'id' => $id,
                'contenido' => ''
            );
        } catch (Exception $ex) {
            $datos = array(
                'type' => 'error',
                'id' => $id,
                'contenido' => 'Lo sentimos ha ocurrido un error, no se pudo eliminar el registro'
            );
        }
        return $datos;
    }

    public function listadoTrabajos() {
        $sql = $this->db->select("select p.id,
                                        p.fecha,
                                        p.titulo,
                                        p.estado,
                                        c.descripcion as categoria
                                from post p 
                                LEFT JOIN post_categoria pc on pc.id_post = p.id
                                LEFT JOIN categoria c on c.id = pc.id_categoria
                                ORDER BY p.fecha DESC");
        $datos = array();
        foreach ($sql as $item) {
            $idPost = $item['id'];
            if ($item['estado'] == 1) {
                $estado = '<span><a class="pointer label label-success linkListaEstadoTrabajo" id="estadoTrabajo' . $idPost . '" data-post="' . $idPost . '">Visible</a></span>';
            } else {
                $estado = '<span><a class="pointer label label-danger linkListaEstadoTrabajo" id="estadoTrabajo' . $idPost . '" data-post="' . $idPost . '">Oculto</a></span>';
            }
            $acciones = '<a class="btn btn-sm btnEditTrabajo" data-post="' . $idPost . '"><i class="fa fa-edit"></i>Editar</a> <a class="btn btn-sm btnDeletePost" data-post="' . $idPost . '"><i class="fa fa-trash"></i>Eliminar</a>';
            array_push($datos, array(
                'DT_RowId' => 'trabajo_' . $idPost,
                'fecha' => date('d-m-Y', strtotime($item['fecha'])),
                'titulo' => utf8_encode($item['titulo']),
                'categoria' => utf8_encode($item['categoria']),
                'estado' => $estado,
                'acciones' => $acciones
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function mostrarModalEditarTrabajo($data) {
        $id = $data['id'];
        $selectState1 = '';
        $selectState0 = '';
        $sql = $this->db->select("select p.titulo,
                                        p.contenido,
                                        p.tags,
                                        p.estado,
                                        p.fecha,
                                        pc.id_categoria,
                                        c.descripcion as categoria
                                from post p
                                LEFT JOIN post_categoria pc on pc.id_post = p.id
                                LEFT JOIN categoria c on c.id = pc.id_categoria
                                where p.id = $id");
        if ($sql[0]['estado'] == 1) {
            $selectState1 = 'selected';
        } else {
            $selectState0 = 'selected';
        }
        $contenido = '<div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Editar Contenido</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form role="form" method="POST" action="' . URL . 'admin/guardarDatosPost" class="frmModificarPost">
                                <input type="hidden" value="' . $id . '" name="id">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Título</label>
                                      <input type="text" class="form-control" placeholder="ingrese un título" value="' . utf8_encode($sql[0]['titulo']) . '" name="titulo">
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                    <div class="form-group">
                                        <label>Fecha Evento:</label>
                                        <div class="input-group date">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" class="form-control pull-right datepicker" value="' . date('d-m-Y', strtotime($sql[0]['fecha'])) . '" name="fecha">
                                        </div>
                                        <!-- /.input group -->
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <select class="form-control" name="categoria">';
        foreach ($this->helper->getCategorias() as $item) {
            $actived = ($item['id'] == $sql[0]['id_categoria']) ? 'selected' : '';
            $contenido .= '<option value="' . $item['id'] . '" ' . $actived . '>' . utf8_encode($item['descripcion']) . '</option >';
        }
        $contenido .= '                 </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control" name="estado">
                                          <option value="1" ' . $selectState1 . '>Activo</option>
                                          <option value="0" ' . $selectState0 . '>Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Tags</label>
                                      <input type="text" class="form-control" id="tags" placeholder="Ingrese los tags separados por comas(,)" value="' . utf8_encode($sql[0]['tags']) . '" name="tags">
                                          <p class="help-block">Ingrese palabras separadas por comas(,)</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="box-body pad">
                                        <textarea id="contenido" name="contenido" rows="10" cols="80" name="contenido">' . utf8_encode($sql[0]['contenido']) . '</textarea>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg btnGuardarCambios">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-body --> 
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Imagenes</h3>
                        </div>
                        <div class="box-body">
                            <div class="row" style="margin: 20px;">
                                <div class="col-md-12" style="margin:10px;">
                                    <button type="button" class="btn btn-primary pull-right btnAddImagen"><i class="fa fa-plus" aria-hidden="true"></i> Agregar Imagen</button>
                                </div>
                                <div class="col-md-12 divSubir" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                            Solo se permiten imagenes <strong>.jpg,.png</strong>. Subir imagenes en formato horizontal, porque se redimensionan automaticamente a las dimensiones 1280 x 720.
                                         </div>
                                    </div>
                                    <div class="html5fileupload demo_multi" data-multiple="true" data-url="' . URL . 'admin/uploadImage" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%;">
                                        <input type="file" name="file" />
                                    </div>
                                    <script>
                                        $(".html5fileupload.demo_multi").html5fileupload({
                                            data:{id:' . $id . '},
                                            onAfterStartSuccess: function(response) {
                                                $("#postImagenes" + response.id).append(response.content);
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="row" id="postImagenes' . $id . '">';

        $contenido .= $this->helper->loadGalleryImage($id, 1);
        $video = $this->helper->getFilesPost($id, 2);
        $contenido .= '     </div>    
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Video</h3>
                        </div>
                        <div class="box-body">
                            <div class="row" style="margin: 20px;">
                                <div class="col-md-12" style="margin:10px;">
                                    <button type="button" class="btn btn-primary pull-right btnAddVideo"><i class="fa fa-plus" aria-hidden="true"></i> Actualizar Video</button>
                                </div>
                                <div class="col-md-12 divSubirVideo" style="display:none;">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                            Solo se puede subir un video con extension <strong>.mp4</strong>. Al subir otro, el anterior sera re-emplazado. Tamaño máximo <strong>40MB</strong>
                                         </div>
                                    </div>
                                    <div class="col-md-6">
                                        <form id="frmModificarVideo">
                                            <input type="hidden" value="' . $video[0]['id'] . '" name="id">
                                            <input type="hidden" value="' . $video[0]['id_post'] . '" name="id_post">
                                            <div class="form-group">
                                                <label>Identificador del video</label>
                                                <input type="text" class="form-control" placeholder="Identificador del video" data-id="' . $video[0]['id'] . '" value="' . utf8_encode($video[0]['descripcion']) . '" name="video">
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-block btn-primary btn-lg">Actualizar Video</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="postVideo' . $id . '">';
        if (!empty($video[0])) {
            $contenido .= $this->helper->loadVideo($id);
        } else {
            $contenido .= $this->helper->messageAlert('info', 'Este post no contiene ningún video');
        }
        $contenido .= '     </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(".datepicker").datepicker({
                            format: "dd-mm-yyyy",
                            autoclose: true
                        });
                        $("#tags").tagsInput();
                        CKEDITOR.replace("contenido");
                    </script>';
        $datos = array(
            'titulo' => utf8_encode($sql[0]['titulo']),
            'contenido' => $contenido
        );
        return json_encode($datos);
    }

    public function modificarVideoTrabajo($data) {
        $id = $data['id'];
        $idPost = $data['id_post'];
        $descripcion = $data['video'];
        $update = array(
            'descripcion' => $descripcion
        );
        $this->db->update('post_archivo', $update, "id = $id");
        $video = '<iframe src="https://www.youtube.com/embed/' . $descripcion . '" frameborder="0" allowfullscreen></iframe>';
        $datos = array(
            'id' => $id,
            'id_post' => $idPost,
            'descripcion' => $descripcion,
            'video' => $video
        );
        return json_encode($datos);
    }

    public function imgPrincipal($data) {
        $id = $data['id'];
        $imgActual = $this->helper->getImage($id);
        $idPost = $imgActual[0]['id_post'];
        $oldPrincipal = $this->db->select("select id from post_archivo where id_post = $idPost and img_principal = 1");
        $idOld = $oldPrincipal[0]['id'];
        if ($imgActual[0]['img_principal'] == 1) {
            $updatePrincipal = array(
                'img_principal' => 0
            );
        } else {
            $updatePrincipal = array(
                'img_principal' => 1
            );
        }
        $updatePrincipalOld = array(
            'img_principal' => 0
        );
        $btn = '<span class="label label-success">Principal</span>';
        $btnOld = '<span class="label label-warning">Principal</span>';
        if ($imgActual[0]['estado'] != 0) {
            $this->db->update('post_archivo', $updatePrincipal, "`id` = $id");
            $this->db->update('post_archivo', $updatePrincipalOld, "`id` = $idOld");
            $datos = array(
                'result' => true,
                'id' => $id,
                'content' => $btn,
                'id_old' => $idOld,
                'content_old' => $btnOld
            );
        } else {
            $datos = array(
                'result' => false
            );
        }
        return $datos;
    }

    public function mostrarImgBtn($data) {
        $id = $data['id'];
        $image = $this->helper->getImage($id);
        if ($image[0]['estado'] == 1) {
            $updateEstado = array(
                'estado' => 0
            );
            $labelBg = 'danger';
            $labelText = 'Oculta';
        } else {
            $updateEstado = array(
                'estado' => 1
            );
            $labelBg = 'success';
            $labelText = 'Visible';
        }
        $btn = '';
        if ($image[0]['img_principal'] != 1) {
            $this->db->update('post_archivo', $updateEstado, "`id` = $id");
            $btn = '<span class="label label-' . $labelBg . '">' . $labelText . '</span>';
        } else {
            $btn = '<span class="label label-success">Visible</span>';
        }
        $datos = array(
            'id' => $id,
            'content' => $btn
        );
        return $datos;
    }

    public function eliminarIMG($data) {
        $id = $data['id'];
        $imgActual = $this->helper->getImage($id);
        if ($imgActual[0]['img_principal'] != 1) {
            #Eliminamos la imagen del servidor
            unlink('public/assets/img/trabajos/' . $imgActual[0]['descripcion']);
            #Elimamos de la BD
            $sth = $this->db->prepare("delete from post_archivo where id = :id");
            $sth->execute(array(
                ':id' => $id
            ));
            $datos = array(
                'result' => true,
                'id' => $id
            );
        } else {
            $datos = array(
                'result' => false
            );
        }
        return $datos;
    }

    public function uploadImage($data) {
        $id = $data['id'];
        $this->db->insert('post_archivo', array(
            'id_post' => $id,
            'id_tipo_archivo' => 1,
            'descripcion' => $data['archivo'],
            'estado' => 1
        ));
        $id_img = $this->db->lastInsertId();
        $contenido = $this->helper->loadImage($id_img);
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function guardarDatosPost($data) {
        $idPost = $data['id'];
        #TABLA POST
        $updatePost = array(
            'titulo' => utf8_decode($data['titulo']),
            'contenido' => utf8_decode($data['contenido']),
            'tags' => utf8_decode($data['tags2']),
            'fecha' => date('Y-m-d', strtotime($data['fecha'])) . ' ' . date('H:i:s'),
            'estado' => $data['estado']
        );
        $this->db->update('post', $updatePost, "`id` = $idPost");

        #TABLA POST_CATEGORIA
        $updateCategoria = array(
            'id_categoria' => $data['categoria']
        );
        $this->db->update('post_categoria', $updateCategoria, "`id_post` = $idPost");
    }

    public function agregarContenido() {
        $contenido = '<form role="form" method="POST" action="' . URL . 'admin/agregarDatosPost" class="frmAgregarPost" enctype="multipart/form-data">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Contenido</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" class="form-control" placeholder="ingrese un título" value="" name="titulo">
                                    </div>
                                </div>
                                <div class="cold-md-6">
                                    <div class="form-group">
                                        <label>Fecha Evento:</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" class="form-control pull-right datepicker" value="" name="fecha">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <select class="form-control" name="categoria">';
        foreach ($this->helper->getCategorias() as $item) {
            $contenido .= '             <option value="' . $item['id'] . '">' . utf8_encode($item['descripcion']) . '</option >';
        }
        $contenido .= '             </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select class="form-control" name="estado">
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tags</label>
                                        <input type="text" class="form-control" id="tags" placeholder="Ingrese los tags separados por comas(,)" value="" name="tags">
                                        <p class="help-block">Ingrese palabras separadas por comas(,)</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Contenido</label>
                                    <div class="box-body pad">
                                        <textarea id="contenido" name="contenido" rows="10" cols="80" name="contenido"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body --> 
                        </div>
                        <div class="box box-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title">Imagenes</h3>
                            </div>
                            <div class="box-body">
                                <div class="row" style="margin: 20px;">
                                    <div class="col-md-12 divSubir">
                                        <div class="col-md-12">
                                            <div class="alert alert-warning alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                                Solo se permiten imagenes <strong>.jpg,.png</strong>. Subir imagenes en formato horizontal, porque se redimensionan automaticamente a las dimensiones 1280 x 720.
                                             </div>
                                        </div>
                                        <div class="html5fileupload demo_multi" data-multiple="true" data-form="true" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%; display: inline-block;">
                                            <input type="file" name="file_archivo[]" />
                                        </div>
                                        <script>
                                            $(".html5fileupload.demo_multi").html5fileupload();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Video</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row" style="margin: 20px;">
                                        <div class="col-md-12 divSubirVideo">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible" >
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <h4><i class="icon fa fa-warning"></i> Importante!</h4>
                                                    Solo se puede subir un video con extension <strong>.mp4</strong>. Al subir otro, el anterior sera re-emplazado. Tamaño máximo <strong>40MB</strong>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Identificador del video de YouTube</label>
                                                <input type="text" class="form-control" placeholder="Identificador del video" data-id="1" value="" name="video">
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-success btnFrmAddContenido btn-lg">Agregar Contenido</button>
                            </div>
                        
                        </div>
                    </form>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(".datepicker").datepicker({
                                format: "dd-mm-yyyy",
                                autoclose: true
                            });
                            $("#tags").tagsInput();
                            CKEDITOR.replace("contenido");
                        });
                    </script>';
        return $contenido;
    }

    public function agregarDatosPost($data) {
        #INSERTAMOS EL POST
        $this->db->insert('post', array(
            'titulo' => utf8_decode($data['titulo']),
            'contenido' => utf8_decode($data['contenido']),
            'tags' => utf8_decode($data['tags']),
            'fecha' => date('Y-m-d', strtotime($data['fecha'])),
            'estado' => $data['estado']
        ));
        $id_post = $this->db->lastInsertId();
        #INSERTAMOS EL POST CATEGORIA
        $this->db->insert('post_categoria', array(
            'id_post' => $id_post,
            'id_categoria' => $data['categoria'],
        ));
        $datos = array(
            'id' => $id_post
        );
        return $datos;
    }

    public function agregarDatosPostFiles($data) {
        $id = $data['id'];
        #INSERTAMOS LAS IMAGENES
        $cantImagenes = count($data['imagenes']) - 1;
        for ($i = 0; $i <= $cantImagenes; $i ++) {
            $imgPrincipal = ($i == 0) ? 1 : 0;
            $this->db->insert('post_archivo', array(
                'id_post' => $id,
                'id_tipo_archivo' => 1,
                'descripcion' => $data['imagenes'][$i],
                'img_principal' => $imgPrincipal,
                'estado' => 1
            ));
        }
        #INSERTAMOS EL VIDEO
        if (!empty($data['videos'])) {
            foreach ($data['videos'] as $item) {
                $this->db->insert('post_archivo', array(
                    'id_post' => $id,
                    'id_tipo_archivo' => 2,
                    'descripcion' => $item,
                    'img_principal' => 0,
                    'estado' => 1
                ));
            }
        }
    }

}
