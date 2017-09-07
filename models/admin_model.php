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
}
