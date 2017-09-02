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

}
