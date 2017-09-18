<?php

class Contenido extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function mostrarModalTrabaja() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->mostrarModalTrabaja();
        echo $datos;
    }

    public function loadMore() {
        #obtenemos los datos mediante JSON
        $json = json_decode(file_get_contents('php://input'), true);
        $data = array(
            'fecha' => $this->helper->cleanInput($json['fecha']),
            'items' => $this->helper->cleanInput($json['items'])
        );
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->loadMore($data);
        echo json_encode($datos);
    }

}
