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

}
