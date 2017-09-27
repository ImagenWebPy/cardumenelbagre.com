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

    public function cargarDTRedes() {
        $datos = array();
        $sql = $this->db->select('SELECT cr.*
                                  FROM config_redes cr');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarRed btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarRed btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'red' . $id,
                'red' => utf8_encode($item['descripcion']),
                'perfil' => utf8_encode($item['url']),
                'estado' => $estado,
                'accion' => $btn . ' | ' . $btnDel
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTUsuarios() {
        $IdUsuario = $_SESSION['usuario']['id'];
        $datos = array();
        $sql = $this->db->select('SELECT * from admin_usuario where id != 1');
        foreach ($sql as $item) {
            $id = $item['id'];
            if ($id == $IdUsuario) {
                $btn = '<a class="btn btn-app pointer btnEditarUsuario btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            } else {
                $btn = '';
            }
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'usuario' . $id,
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'estado' => $estado,
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTCategorias() {
        $datos = array();
        $sql = $this->db->select('SELECT c.*
                                  FROM categoria c');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarCategoria btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarCategoria btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'categoria' . $id,
                'categoria' => utf8_encode($item['descripcion']),
                'tag' => utf8_encode($item['tag']),
                'estado' => $estado,
                'accion' => $btn . ' | ' . $btnDel
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function cargarDTLocales() {
        $datos = array();
        $sql = $this->db->select('SELECT l.*
                                  FROM locales l');
        foreach ($sql as $item) {
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnEditarLocal btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarLocal btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'local' . $id,
                'tipo' => utf8_encode($item['tipo_oficina']),
                'direccion' => utf8_encode($item['direccion']),
                'telefono' => $item['telefono'],
                'estado' => $estado,
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
        $sql = $this->db->select("select * from quienes_somos where id = 1");
        return $sql[0];
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

    public function editTextoCliente($data) {
        $id = 1;
        $update = array(
            "texto_cliente" => trim(utf8_decode($data['texto_cliente']))
        );
        $this->db->update('config_sitio', $update, "id = $id");
        return json_encode(true);
    }

    public function editTextoTrabaja($data) {
        $id = 1;
        $update = array(
            "titulo_trabaja" => trim(utf8_decode($data['titulo_trabaja'])),
            "texto_trabaja" => trim(utf8_decode($data['texto_trabaja']))
        );
        $this->db->update('config_sitio', $update, "id = $id");
        return json_encode(true);
    }

    public function editMetas($data) {
        $id = 1;
        $update = array(
            "title" => utf8_decode($data['title']),
            "description" => utf8_decode($data['description']),
            "keywords" => utf8_decode($data['keywords'])
        );
        $this->db->update('metas', $update, "id = $id");
        return TRUE;
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

    public function unlinkImgMarker() {
        $dir = 'public/assets/img/';
        $sql = $this->db->select("select map_marker from config_sitio where id = 1");
        unlink($dir . $sql[0]['map_marker']);
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

    public function uploadImgMarker($data) {
        $update = array(
            'map_marker' => $data['img']
        );
        $this->db->update('config_sitio', $update, "id = 1");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/assets/img/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImgFondoFrase($data) {
        $update = array(
            'img_frase' => $data['img']
        );
        $this->db->update('config_sitio', $update, "id = 1");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/assets/img/fondos/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImgContacto($data) {
        $update = array(
            'img_contacto' => $data['img']
        );
        $this->db->update('config_sitio', $update, "id = 1");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/assets/img/fondos/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'content' => $contenido
        );
        return $datos;
    }

    public function uploadImgFondoQuienes($data) {
        $update = array(
            'img_background' => $data['img']
        );
        $this->db->update('quienes_somos', $update, "id = 1");
        $contenido = '<img class="img-responsive" src="' . URL . 'public/assets/img/fondos/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'content' => $contenido
        );
        return $datos;
    }

    public function unlinkImgFondoFrase() {
        $dir = 'public/assets/img/fondos/';
        $sql = $this->db->select("select img_frase from config_sitio where id = 1");
        unlink($dir . $sql[0]['img_frase']);
    }

    public function unlinkImgContacto() {
        $dir = 'public/assets/img/fondos/';
        $sql = $this->db->select("select img_contacto from config_sitio where id = 1");
        unlink($dir . $sql[0]['img_contacto']);
    }

    public function unlinkImgFondoQuienes() {
        $dir = 'public/assets/img/fondos/';
        $sql = $this->db->select("select img_background from quienes_somos where id = 1");
        unlink($dir . $sql[0]['img_background']);
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

    public function modalAgregarRed() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Red Social</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddRed">
                    <div class="form-group">
                        <label>Nombre Red</label>
                        <input type="text" name="red[descripcion]" class="form-control" placeholder="Nombre red Social" value="">
                    </div>
                    <div class="form-group">
                        <label>Font-Aweome Icon</label>
                        <input type="text" name="red[fontawesome]" class="form-control" placeholder="FontAwesome Icon" value="">
                    </div>
                    <div class="form-group">
                        <label>Url del Perfil</label>
                        <input type="text" name="red[url]" class="form-control" placeholder="URL del Perfil" value="">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="red[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Red</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Red Social',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalAgregarUsuario() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Usuario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddUsuario">
                    <div class="form-group">
                        <label>Nombre Usuario</label>
                        <input type="text" name="usuario[nombre]" class="form-control" placeholder="Nombre Usuario" value="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="usuario[email]" class="form-control" placeholder="Email" value="">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="usuario[contrasena]" class="form-control" placeholder="Contraseña" value="">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="usuario[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Usuario',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalAgregarCategoria() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Categoria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddCategoria">
                    <div class="form-group">
                        <label>Nombre Categoria</label>
                        <input type="text" name="categoria[descripcion]" class="form-control" placeholder="Nombre Categoria" value="">
                    </div>
                    <div class="form-group">
                        <label>Tag</label>
                        <input type="text" name="categoria[tag]" class="form-control" placeholder="FontAwesome Icon" value="">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="categoria[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Categoria</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Categoria',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalAgregarLocal() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Local</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddLocal">
                    <div class="form-group">
                        <label>Tipo de Oficina</label>
                        <input type="text" name="local[tipo_oficina]" class="form-control" placeholder="Ingrese el titulo" value="">
                    </div>
                    <div class="form-group">
                        <label>Direccion</label>
                        <textarea id="editor1" name="local[direccion]" rows="10" cols="80">
                        </textarea>
                    </div>
                    <script>
                        CKEDITOR.replace("local[direccion]");
                    </script>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="local[telefono]" class="form-control" placeholder="Ingrese el titulo" value="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="local[email]" class="form-control" placeholder="Ingrese el titulo" value="">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="local[casa_central]" value="1">
                                Es casa Central?
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="local[estado]" value="1" checked>
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
            'titulo' => 'Agregar Nuevo Local',
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

    public function modalEditarRed($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from config_redes where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Red Social</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" id="frmEditarRed">
                    <input type="hidden" name="red[id]" value="' . $id . '">
                    <div class="form-group">
                        <label>Nombre Red</label>
                        <input type="text" name="red[descripcion]" class="form-control" placeholder="Nombre red Social" value="' . utf8_encode($sql[0]['descripcion']) . '">
                    </div>
                    <div class="form-group">
                        <label>Font-Aweome Icon</label>
                        <input type="text" name="red[fontawesome]" class="form-control" placeholder="FontAwesome Icon" value="' . utf8_encode($sql[0]['fontawesome']) . '">
                    </div>
                    <div class="form-group">
                        <label>Url del Perfil</label>
                        <input type="text" name="red[url]" class="form-control" placeholder="URL del Perfil" value="' . utf8_encode($sql[0]['url']) . '">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="red[estado]" value="1" ' . $checked . '>
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
            'titulo' => 'Editar ' . utf8_encode($sql[0]['descripcion']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarUsuario($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from admin_usuario where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Red Social</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" id="frmEditarUsuario">
                    <input type="hidden" name="usuario[id]" value="' . $id . '">
                    <div class="form-group">
                        <label>Nombre Usuario</label>
                        <input type="text" name="usuario[nombre]" class="form-control" placeholder="Nombre Usuario" value="' . utf8_encode($sql[0]['nombre']) . '">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="usuario[email]" class="form-control" placeholder="Email" value="' . utf8_encode($sql[0]['email']) . '">
                    </div>';
        $form .= $this->helper->messageAlert('info', 'Solo si ingresa una valor en el campo contraseña este se modificará');
        $form .= '  <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="usuario[contrasena]" class="form-control" placeholder="Contraseña" value="">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="usuario[estado]" value="1" ' . $checked . '>
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
            'titulo' => 'Editar Usuario ' . utf8_encode($sql[0]['nombre']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarCategoria($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from categoria where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Categoria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" id="frmEditarCateoria">
                    <input type="hidden" name="categoria[id]" value="' . $id . '">
                    <div class="form-group">
                        <label>Nombre Categoria</label>
                        <input type="text" name="categoria[descripcion]" class="form-control" placeholder="Nombre Categoria" value="' . utf8_encode($sql[0]['descripcion']) . '">
                    </div>
                    <div class="form-group">
                        <label>Tag</label>
                        <input type="text" name="categoria[tag]" class="form-control" placeholder="FontAwesome Icon" value="' . utf8_encode($sql[0]['tag']) . '">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="categoria[estado]" value="1" ' . $checked . '>
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
            'titulo' => 'Editar ' . utf8_encode($sql[0]['descripcion']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEditarLocal($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from locales where id = $id");
        $checkedCasa = ($sql[0]['casa_central'] == 1) ? 'checked' : '';
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar Unidad</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" id="frmEditarLocal">
                    <input type="hidden" name="local[id]" value="' . $id . '">
                    <div class="form-group">
                        <label>Tipo Oficina</label>
                        <input type="text" name="local[tipo_oficina]" class="form-control" placeholder="Ingrese el Tipo" value="' . utf8_encode($sql[0]['tipo_oficina']) . '">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea id="editor1" name="local[direccion]" rows="10" cols="80">
                        ' . utf8_encode($sql[0]['direccion']) . '
                        </textarea>
                    </div>
                    <script>
                        CKEDITOR.replace("local[direccion]");
                    </script>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="local[telefono]" class="form-control" placeholder="Ingrese el Telefono" value="' . utf8_encode($sql[0]['telefono']) . '">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="local[email]" class="form-control" placeholder="Ingrese el Email" value="' . utf8_encode($sql[0]['email']) . '">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="local[casa_central]" value="1" ' . $checkedCasa . '>
                                Casa Central
                            </label>
                        </div>
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="local[estado]" value="1" ' . $checked . '>
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
            'titulo' => 'Editar ' . utf8_encode($sql[0]['tipo_oficina']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function frmAddLocal($data) {
        $this->db->insert('locales', array(
            'tipo_oficina' => utf8_decode($data['tipo_oficina']),
            'direccion' => utf8_decode($data['direccion']),
            'telefono' => utf8_decode($data['telefono']),
            'email' => utf8_decode($data['email']),
            'casa_central' => utf8_decode($data['casa_central']),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
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

    public function frmAddRed($data) {
        $this->db->insert('config_redes', array(
            'descripcion' => utf8_decode($data['descripcion']),
            'fontawesome' => utf8_decode($data['fontawesome']),
            'url' => utf8_decode($data['url']),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddUsuario($data) {
        $this->db->insert('admin_usuario', array(
            'nombre' => utf8_decode($data['nombre']),
            'email' => utf8_decode($data['email']),
            'contrasena' => Hash::create('sha256', utf8_decode($data['contrasena']), HASH_PASSWORD_KEY),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddCategoria($data) {
        $this->db->insert('categoria', array(
            'descripcion' => utf8_decode($data['descripcion']),
            'tag' => utf8_decode($data['tag']),
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

    public function editUsuario($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        if (empty($data['contrasena'])) {
            $update = array(
                'nombre' => utf8_decode($data['nombre']),
                'email' => $data['email'],
                'estado' => $estado
            );
        } else {
            $update = array(
                'nombre' => utf8_decode($data['nombre']),
                'email' => $data['email'],
                'contrasena' => Hash::create('sha256', $data['contrasena'], HASH_PASSWORD_KEY),
                'estado' => $estado
            );
        }
        $this->db->update('admin_usuario', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM admin_usuario where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estadoEdit = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-success">Activo</span></a>';
        } else {
            $estadoEdit = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['nombre']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['email']) . '</td>'
                . '<td>' . $estadoEdit . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarUsuario btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function editCategoria($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            'descripcion' => utf8_decode($data['descripcion']),
            'tag' => $data['tag'],
            'estado' => $estado
        );
        $this->db->update('categoria', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM categoria where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estadoEdit = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-success">Activo</span></a>';
        } else {
            $estadoEdit = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['descripcion']) . '</td>'
                . '<td>' . utf8_encode($sql[0]['tag']) . '</td>'
                . '<td>' . $estadoEdit . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarCategoria btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> | '
                . '<a class="btn btn-app pointer btnEliminarCategoria btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function editLocal($data) {
        $id = $data['id'];
        $casa_central = 0;
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        if (!empty($data['casa_central'])) {
            $casa_central = 1;
        }
        $update = array(
            'tipo_oficina' => utf8_decode($data['tipo_oficina']),
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'email' => $data['email'],
            'casa_central' => $casa_central,
            'estado' => $estado
        );
        $this->db->update('locales', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM locales where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estadoEdit = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-success">Activo</span></a>';
        } else {
            $estadoEdit = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td class="sorting_1">' . utf8_encode($sql[0]['tipo_oficina']) . '</td>
            <td>' . utf8_encode($sql[0]['direccion']) . '</td>
            <td>' . utf8_encode($sql[0]['telefono']) . '</td>
            <td>' . $estadoEdit . '</td>
            <td><a class="btn btn-app pointer btnEditarLocal btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> | 
            <a class="btn btn-app pointer btnEliminarLocal btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>';
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

    public function modalEliminarRed($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM config_redes where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarRed" method="POST">
                    <input type="hidden" name="id" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la Red Social "<strong>' . utf8_encode($sql[0]['descripcion']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnEliminarRed" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['descripcion']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEliminarCategoria($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM categoria where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarCategoria" method="POST">
                    <input type="hidden" name="id" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar la Categoría"<strong>' . utf8_encode($sql[0]['descripcion']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnEliminarCategoria" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['descripcion']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function modalEliminarLocal($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM locales where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarLocal" method="POST">
                    <input type="hidden" name="contacto[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar el local "<strong>' . utf8_encode($sql[0]['tipo_oficina']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnEliminarLocal" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['tipo_oficina']),
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

    public function deleteRed($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from config_redes where id = :id");
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

    public function deleteCategoria($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from categoria where id = :id");
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

    public function deleteLocal($data) {
        $id = $data['id'];
        try {
            $sth = $this->db->prepare("delete from locales where id = :id");
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

    public function cargarDTClientes() {
        $datos = array();
        $sql = $this->db->select('select * from clientes');
        foreach ($sql as $item) {
            $id = $item['id'];
            $img = '<img src="' . ASSETS . 'img/clientes/' . $item['img'] . '" class="img-responsive" style="width: 150px;">';
            $btn = '<a class="btn btn-app pointer btnEditarCliente btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-edit"></i> Editar</a>';
            $btnDel = '<a class="btn btn-app pointer btnEliminarCliente btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
            } else {
                $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'cliente_' . $id,
                'descripcion' => utf8_encode($item['descripcion']),
                'img' => $img,
                'estado' => $estado,
                'accion' => $btn . ' | ' . $btnDel
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function modalAgregarCliente() {
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Cliente</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmAddCliente" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="cliente[descripcion]" class="form-control" placeholder="Ingrese la marca" value="">
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="cliente[url]" class="form-control" placeholder="Ingrese la marca" value="">
                    </div>';
        $form .= $this->helper->messageAlert('warning', 'Tamaño de imagen recomendada: 350px x 300px.');
        $form .= '  <div class="form-group">
                        <label>Imagen</label>
                        <div class="html5fileupload fileMarca" data-form="true" data-url="html5fileupload.php" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%;">
                            <input type="file" name="file_archivo" />
                        </div>
                    </div>
                    <script>
                        $(".html5fileupload.fileMarca").html5fileupload();
                    </script>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="cliente[estado]" value="1" checked>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Agregar Cliente</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Agregar Cliente',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function frmAddCliente($data) {
        $this->db->insert('clientes', array(
            'descripcion' => utf8_decode($data['descripcion']),
            'url' => utf8_decode($data['url']),
            'estado' => $data['estado']
        ));
        $id = $this->db->lastInsertId();
        return $id;
    }

    public function frmAddClienteImg($img) {
        $id = $img['id'];
        $update = array(
            'img' => $img['imagen']
        );
        $this->db->update('clientes', $update, "id = $id");
    }

    public function modalEditarCliente($data) {
        $id = $data['id'];
        $sql = $this->db->select("select * from clientes where id = $id");
        $checked = ($sql[0]['estado'] == 1) ? 'checked' : '';
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Cliente</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" method="POST" action="' . URL . 'admin/frmEditarCliente" enctype="multipart/form-data" id="frmEditarCliente">
                    <input type="hidden" value="' . $id . '" name="cliente[id]">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="cliente[descripcion]" class="form-control" placeholder="Ingrese el Cliente" value="' . utf8_encode($sql[0]['descripcion']) . '">
                    </div>
                    <div class="form-group">
                        <label>URL</label>
                        <input type="text" name="cliente[url]" class="form-control" placeholder="Ingrese la url" value="' . utf8_encode($sql[0]['url']) . '">
                    </div>
                    <!-- checkbox -->
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="cliente[estado]" value="1" ' . $checked . '>
                                Estado
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Edita Contenido</button>
                    </div>
                </form>';
        $form .= $this->helper->messageAlert('warning', 'Tamaño de imagen recomendada: 350px x 300px.');
        $form .= ' <div class="form-group">
                        <label>Imagen</label>
                        <div class="html5fileupload fileUploadCliente" data-url="' . URL . 'admin/uploadImgCliente" data-valid-extensions="JPG,JPEG,jpg,png,jpeg" style="width: 100%;">
                            <input type="file" name="file" />
                        </div>
                </div>
                <script>
                    $(".html5fileupload.fileUploadCliente").html5fileupload({
                        data:{id:' . $id . '},
                        onAfterStartSuccess: function(response) {
                            $("#imgCliente" + response.id).html(response.content);
                        }
                    });
                </script>
                <h4>Imagen Actual</h4>
                <div class="imgActualMarca" id="imgCliente' . $id . '">';
        if (!empty($sql[0]['img'])) {
            $form .= '<img class="img-responsive" src="' . ASSETS . 'img/clientes/' . $sql[0]['img'] . '">';
        }
        $form .= '</div>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Editar Cliente',
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function editCliente($data) {
        $id = $data['id'];
        $estado = 1;
        if (empty($data['estado'])) {
            $estado = 0;
        }
        $update = array(
            'descripcion' => utf8_decode($data['descripcion']),
            'url' => utf8_decode($data['url']),
            'estado' => $estado
        );
        $this->db->update('clientes', $update, "id = $id");
        #obtenemos la fila
        $sql = $this->db->select("SELECT * FROM clientes where id = $id");
        if ($sql[0]['estado'] == 1) {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="1"><span class="label label-success">Activo</span></a>';
        } else {
            $estado = '<a class="pointer btnCambiarEstado" data-id="' . $id . '" data-estado="0"><span class="label label-danger">Inactivo</span></a>';
        }
        $row = '<td>' . $sql[0]['descripcion'] . '</td>'
                . '<td><img src="' . ASSETS . 'img/clientes/' . $sql[0]['img'] . '" class="img-responsive" style="width: 150px;"></td>'
                . '<td>' . $estado . '</td>'
                . '<td><a class="btn btn-app pointer btnEditarCliente btnSmall" data-id="' . $id . '"><i class="fa fa-edit"></i> Editar</a> '
                . '| <a class="btn btn-app pointer btnEliminarCliente btnSmall" data-id="' . $id . '"><i class="fa fa-ban" aria-hidden="true"></i> Eliminar</a></td>';
        $datos = array(
            'type' => 'success',
            'id' => $id,
            'row' => $row
        );
        return $datos;
    }

    public function unlinkActualClienteImg($idPost) {
        $dir = 'public/assets/img/clientes/';
        $sql = $this->db->select("select img from clientes where id = $idPost");
        unlink($dir . $sql[0]['img']);
    }

    public function uploadImgCliente($data) {
        $id = $data['id'];
        $update = array(
            'img' => $data['img']
        );
        $this->db->update('clientes', $update, "id = $id");
        $contenido = '<img class="img-responsive" src="' . ASSETS . 'img/clientes/' . $data['img'] . '">';
        $datos = array(
            "result" => true,
            'id' => $id,
            'content' => $contenido
        );
        return $datos;
    }

    public function modalEliminarCliente($data) {
        $id = $data['id'];
        $sql = $this->db->select("SELECT * FROM clientes where id = $id");
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del mensaje</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form role="form" id="frmEliminarCliente" method="POST">
                    <input type="hidden" name="cliente[id]" value="' . $id . '">
                    <div class="alert alert-danger alert-dismissible">
                        <h4><i class="icon fa fa-ban"></i> ¿Está seguro de que desea eliminar el siguiente cliente "<strong>' . utf8_encode($sql[0]['descripcion']) . '</strong>"?</h4>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btnDeleteCliente" class="btn btn-danger" data-id="' . $id . '">Eliminar</button>
                    </div>
                </form>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'Eliminar ' . utf8_encode($sql[0]['descripcion']),
            'contenido' => $form
        );
        return json_encode($datos);
    }

    public function deleteCliente($data) {
        $id = $data['id'];
        $this->unlinkActualClienteImg($id);
        try {
            $sth = $this->db->prepare("delete from clientes where id = :id");
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

    public function cargarDTTrabaja() {
        $datos = array();
        $sql = $this->db->select('SELECT * FROM trabaja');

        foreach ($sql as $item) {
            $test = strstr($item['archivo'], '.', FALSE);
            switch (strtolower($test)) {
                case '.jpg':
                case '.jpeg':
                    $fa_icon = '<i class="fa fa-file-image-o" aria-hidden="true"></i>';
                    break;
                case '.pdf':
                    $fa_icon = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
                    break;
                case '.docx':
                case '.doc':
                    $fa_icon = '<i class="fa fa-file-word-o" aria-hidden="true"></i>';
                    break;
                case '.xlsx':
                case '.xls':
                    $fa_icon = '<i class="fa fa-file-excel-o" aria-hidden="true"></i>';
                    break;
            }
            $id = $item['id'];
            $btn = '<a class="btn btn-app pointer btnDatosTrabaja btnSmall" data-id="' . $item['id'] . '"><i class="fa fa-eye" aria-hidden="true"></i> Ver Datos</a>';
            if ($item['estado'] == 1) {
                $estado = '<a class="pointer text-green"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            } else {
                $estado = '<a class="pointer text-red"><i class="fa fa-stop-circle-o" aria-hidden="true"></i></a>';
            }
            array_push($datos, array(
                'DT_RowId' => 'cv_' . $id,
                'visto' => $estado,
                'fecha' => date('d-m-Y', strtotime($item['fecha'])),
                'nombre' => utf8_encode($item['nombre']),
                'email' => utf8_encode($item['email']),
                'archivo' => $fa_icon,
                'accion' => $btn
            ));
        }
        $json = '{"data": ' . json_encode($datos) . '}';
        return $json;
    }

    public function modalVerTrabaja($data) {
        $id = $data['id'];
        $cambiarEstado = FALSE;
        $sql = $this->db->select("SELECT * from trabaja where id = $id");
        if ($sql[0]['estado'] == 0) {
            #cambiamos el estado del mensaje
            $update = array(
                'estado' => 1
            );
            $this->db->update('trabaja', $update, "id = $id");
            $cambiarEstado = TRUE;
        }
        $form = '<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos del C.V. enviado</h3>
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
                    <dt>Teléfono: </dt>
                    <dd>' . utf8_encode($sql[0]['telefono']) . '</dd>
                    <dt>Mensaje: </dt>
                    <dd>' . utf8_encode($sql[0]['mensaje']) . '</dd>
                    <dt>Archivo: </dt>
                    <dd><a href="' . URL . 'public/archivos/cv/' . utf8_encode($sql[0]['archivo']) . '" title="Descargar" target="_blank">' . utf8_encode($sql[0]['archivo']) . '</a></dd>
                </dl>
            </div>
          </div>';
        $datos = array(
            'titulo' => 'C.V. de ' . utf8_encode($sql[0]['nombre']),
            'contenido' => $form,
            'id' => $id,
            'cambiar_estado' => $cambiarEstado
        );
        return json_encode($datos);
    }

    public function metas() {
        $sql = $this->db->select("select * from metas where id = 1");
        return $sql[0];
    }

    public function getVideoInicio() {
        $sql = $this->db->select("SELECT * FROM `config_videos` where id = 1;");
        return $sql[0];
    }

    public function getReel() {
        $sql = $this->db->select("SELECT * FROM `config_videos` where id = 2;");
        return $sql[0];
    }

    public function editVideoInicio($data) {
        $id = 1;
        $update = $data;
        $this->db->update('config_videos', $update, "id = $id");
        $datos = array(
            'contenido' => '<iframe src="https://www.youtube.com/embed/' . $data['valor'] . '" frameborder="0" allowfullscreen style="display: block;"></iframe>'
        );
        return json_encode($datos);
    }

    public function editVideoReel($data) {
        $id = 2;
        $update = $data;
        $this->db->update('config_videos', $update, "id = $id");
        $datos = array(
            'contenido' => '<iframe src="https://www.youtube.com/embed/' . $data['valor'] . '" frameborder="0" allowfullscreen style="display: block;"></iframe>'
        );
        return json_encode($datos);
    }

    public function editDatosContacto($data) {
        $id = 1;
        $telefono = $data['telefono'];
        $email = $data['email'];
        $update = array(
            'email' => $email,
            'telefono' => $telefono
        );
        $this->db->update('config_sitio', $update, "id = $id");
        $datos = array(
            'email' => $email,
            'telefono' => $telefono
        );
        return json_encode($datos);
    }

    public function editLatLong($data) {
        $id = 1;
        $latitud = $data['latitud'];
        $longitud = $data['longitud'];
        $update = array(
            'latitud' => $latitud,
            'longitud' => $longitud
        );
        $this->db->update('config_sitio', $update, "id = $id");
        $datos = array(
            'latitud' => $latitud,
            'longitud' => $longitud
        );
        return json_encode($datos);
    }

    public function editFrase($data) {
        $id = 1;
        $frase = $data['frase'];
        $autor = $data['autor'];
        $update = array(
            'frase' => utf8_decode($frase),
            'autor_frase' => utf8_decode($autor)
        );
        $this->db->update('config_sitio', $update, "id = $id");
        $datos = array(
            'frase' => $frase,
            'autor' => $autor
        );
        return json_encode($datos);
    }

    public function getDatosConfig() {
        $sql = $this->db->select("select * from config_sitio where id = 1");
        return $sql[0];
    }

    public function imgFondo() {
        $sql = $this->db->select("select img_contacto from config_sitio where id = 1");
        return $sql[0]['img_contacto'];
    }

    public function textoCliente() {
        $sql = $this->db->select("select texto_cliente from config_sitio where id = 1");
        return $sql[0]['texto_cliente'];
    }

    public function datosTrabaja() {
        $sql = $this->db->select("select titulo_trabaja, texto_trabaja from config_sitio where id = 1");
        return $sql[0];
    }

    public function getColores() {
        $sql = $this->db->select("SELECT * FROM `config_colores` where estado = 1;");
        return $sql;
    }

    public function editColores($data) {
        $idTitulo = $data['titulo_id'];
        $updateTitulo = array(
            'hex' => $data['titulo_hex']
        );
        $this->db->update('config_colores', $updateTitulo, "id = $idTitulo");
        if (!empty($data['contenido_id'])) {
            $idContenido = $data['contenido_id'];
            $updateContenido = array(
                'hex' => $data['contenido_hex']
            );
            $this->db->update('config_colores', $updateContenido, "id = $idContenido");
        }
        $sql = $this->db->select("select seccion from config_colores where id = $idTitulo");
        $datos = array(
            'type' => 'success',
            'titulo' => $sql[0]['seccion'],
            'contenido' => 'Se han actualizado correctamente los coleres de la sección'
        );
        return json_encode($datos);
    }

}
