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

    public function enviarFrmContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'name' => $this->helper->cleanInput($_POST['name']),
            'email' => $this->helper->cleanInput($_POST['email']),
            'subject' => $this->helper->cleanInput($_POST['subject']),
            'message' => $this->helper->cleanInput($_POST['message']),
        );
        $datos = $this->model->enviarFrmContacto($data);
        echo $datos;
    }

    public function enviarFrmContactoFooter() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'name' => $this->helper->cleanInput($_POST['nameFooter']),
            'email' => $this->helper->cleanInput($_POST['emailFooter']),
            'message' => $this->helper->cleanInput($_POST['messageFooter']),
        );
        $datos = $this->model->enviarFrmContactoFooter($data);
        echo $datos;
    }

    public function trabajaConNosotros() {

        $datos = array(
            'nombre' => $this->helper->cleanInput($_POST['cv-name']),
            'email' => $this->helper->cleanInput($_POST['cv-email']),
            'telefono' => $this->helper->cleanInput($_POST['cv-telephone']),
            'mensaje' => $this->helper->cleanInput($_POST['cv-message'])
        );
        $insert = $this->model->subir_datos_trabaja($datos);
        $id = $insert['id'];
        #SUBIMOS EL ARCHIVO
        $dir = 'public/archivos/cv/';
        $serverdir = $dir;
        $filename = "";
        foreach ($_FILES as $inputname => $file) {
            $newname = $this->helper->cleanUrl($_POST[$inputname . '_name']);
            //$extension = strtolower(end(explode('.', $file['name'])));
            $ext = explode('.', $file['name']);
            $extension = strtolower(end($ext));
            $fname = $id . '_' . $newname . '.' . $extension;
            $contents = file_get_contents($file['tmp_name']);

            $handle = fopen($serverdir . $fname, 'w');
            fwrite($handle, $contents);
            fclose($handle);

            $filename = $fname;
        }
        $update = array(
            'id' => $id,
            'archivo' => $filename
        );
        $this->model->updateTrabaja($update);
        header('Location:' . URL);
    }

}
