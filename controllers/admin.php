<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index() {
        $this->view->title = 'Dashboard';
        $this->view->render('admin/header');
        $this->view->render('admin/index/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function contacto() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css", "plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Contacto';
        $this->view->imgFondo = $this->model->imgFondo();
        $this->view->render('admin/header');
        $this->view->render('admin/contacto/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function unidades_negocio() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Contacto';
        $this->view->render('admin/header');
        $this->view->render('admin/unidades_negocio/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function redes() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Contacto';
        $this->view->render('admin/header');
        $this->view->render('admin/redes/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function locales() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Contacto';
        $this->view->render('admin/header');
        $this->view->render('admin/locales/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function metas() {
        $this->view->metas = $this->model->metas();
        $this->view->title = 'Metas Etiquetas';
        $this->view->render('admin/header');
        $this->view->render('admin/metas/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function datos() {
        $this->view->getVideoInicio = $this->model->getVideoInicio();
        $this->view->getReel = $this->model->getReel();
        $this->view->getDatosConfig = $this->model->getDatosConfig();
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->title = 'Dato Generales';
        $this->view->render('admin/header');
        $this->view->render('admin/datos/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function cargarDTContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTContacto();
        echo $data;
    }

    public function cargarDTUnidades() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTUnidades();
        echo $data;
    }

    public function cargarDTCategorias() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTCategorias();
        echo $data;
    }

    public function cargarDTRedes() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTRedes();
        echo $data;
    }

    public function cargarDTLocales() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTLocales();
        echo $data;
    }

    public function modalVerContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalVerContacto($data);
        echo $datos;
    }

    public function quienes_somos() {
        $this->view->public_css = array("plugins/html5fileupload/html5fileupload.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/html5fileupload/html5fileupload.min.js");
        $this->view->quienesSomos = $this->model->quienesSomos();
        $this->view->elEquipo = $this->model->elEquipo();
        $this->view->title = 'Quiénes Somos';
        $this->view->render('admin/header');
        $this->view->render('admin/quienes_somos/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function editQuienesSomos() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'quiene_somos' => $_POST['quieneSomos']
        );
        $datos = $this->model->editQuienesSomos($data);
        echo $datos;
    }

    public function editTextoCliente() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'texto_cliente' => $this->helper->cleanInput($_POST['texto_cliente'])
        );
        $datos = $this->model->editTextoCliente($data);
        echo $datos;
    }

    public function editElEquipo() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'el_equipo' => $_POST['elEquipo']
        );
        $datos = $this->model->editElEquipo($data);
        echo $datos;
    }

    public function upload_img_equipo() {
        if (!empty($_POST)) {
            $this->model->unlinkImgEquipo();
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 960;
            $alto = 639;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'img' => $filename
            );
            $response = $this->model->uploadImgEquipo($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/assets/img/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function upload_img_marker() {
        if (!empty($_POST)) {
            $this->model->unlinkImgMarker();
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 60;
            $alto = 52;
            //$this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'img' => $filename
            );
            $response = $this->model->uploadImgMarker($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/assets/img/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function upload_img_fondoFrase() {
        if (!empty($_POST)) {
            $this->model->unlinkImgFondoFrase();
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/fondos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'img' => $filename
            );
            $response = $this->model->uploadImgFondoFrase($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/assets/img/fondos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function upload_img_fondoContacto() {
        if (!empty($_POST)) {
            $this->model->unlinkImgContacto();
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/fondos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'img' => $filename
            );
            $response = $this->model->uploadImgContacto($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/assets/img/fondos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function upload_img_fondoQuienesSomos() {
        if (!empty($_POST)) {
            $this->model->unlinkImgFondoQuienes();
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/fondos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1920;
            $alto = 1080;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'img' => $filename
            );
            $response = $this->model->uploadImgFondoQuienes($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/assets/img/fondos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function modalAgregarUnidad() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarUnidad();
        echo $datos;
    }

    public function modalAgregarRed() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarRed();
        echo $datos;
    }

    public function modalAgregarCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarCategoria();
        echo $datos;
    }

    public function modalAgregarLocal() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarLocal();
        echo $datos;
    }

    public function frmAddUnidad() {
        if (!empty($_POST)) {
            $data = array(
                'titulo' => $this->helper->cleanInput($_POST['unidad']['titulo']),
                'contenido' => $_POST['unidad']['contenido'],
                'estado' => (!empty($_POST['unidad']['estado'])) ? $_POST['unidad']['estado'] : 0
            );
            $datos = $this->model->frmAddUnidad($data);
            if (!empty($datos)) {
                Session::set('message', array(
                    'type' => 'success',
                    'mensaje' => 'Se ha agregado correctamente la Unidad de Negocio'
                ));
            } else {
                Session::set('message', array(
                    'type' => 'error',
                    'mensaje' => 'Lo sentimos ha ocurrido un error...'
                ));
            }
            header('Location:' . URL . 'admin/unidades_negocio/');
        }
    }

    public function frmAddRed() {
        if (!empty($_POST)) {
            $data = array(
                'descripcion' => $this->helper->cleanInput($_POST['red']['descripcion']),
                'fontawesome' => $_POST['red']['fontawesome'],
                'url' => $_POST['red']['url'],
                'estado' => (!empty($_POST['red']['estado'])) ? $_POST['red']['estado'] : 0
            );
            $datos = $this->model->frmAddRed($data);
            if (!empty($datos)) {
                Session::set('message', array(
                    'type' => 'success',
                    'mensaje' => 'Se ha agregado correctamente la Red Social'
                ));
            } else {
                Session::set('message', array(
                    'type' => 'error',
                    'mensaje' => 'Lo sentimos ha ocurrido un error...'
                ));
            }
            header('Location:' . URL . 'admin/redes/');
        }
    }

    public function frmAddCategoria() {
        if (!empty($_POST)) {
            $data = array(
                'descripcion' => $this->helper->cleanInput($_POST['categoria']['descripcion']),
                'tag' => $_POST['categoria']['tag'],
                'estado' => (!empty($_POST['categoria']['estado'])) ? $_POST['categoria']['estado'] : 0
            );
            $datos = $this->model->frmAddCategoria($data);
            if (!empty($datos)) {
                Session::set('message', array(
                    'type' => 'success',
                    'mensaje' => 'Se ha agregado correctamente la categoría'
                ));
            } else {
                Session::set('message', array(
                    'type' => 'error',
                    'mensaje' => 'Lo sentimos ha ocurrido un error...'
                ));
            }
            header('Location:' . URL . 'admin/trabajos/');
        }
    }

    public function frmAddLocal() {
        if (!empty($_POST)) {
            $data = array(
                'tipo_oficina' => $this->helper->cleanInput($_POST['local']['tipo_oficina']),
                'direccion' => $_POST['local']['direccion'],
                'telefono' => $this->helper->cleanInput($_POST['local']['telefono']),
                'email' => $this->helper->cleanInput($_POST['local']['email']),
                'casa_central' => (!empty($_POST['local']['casa_central'])) ? $_POST['local']['casa_central'] : 0,
                'estado' => (!empty($_POST['local']['estado'])) ? $_POST['local']['estado'] : 0
            );
            $datos = $this->model->frmAddLocal($data);
            if (!empty($datos)) {
                Session::set('message', array(
                    'type' => 'success',
                    'mensaje' => 'Se ha agregado correctamente el Local'
                ));
            } else {
                Session::set('message', array(
                    'type' => 'error',
                    'mensaje' => 'Lo sentimos ha ocurrido un error...'
                ));
            }
            header('Location:' . URL . 'admin/locales/');
        }
    }

    public function editMetas() {
        if (!empty($_POST)) {
            $data = array(
                'title' => $this->helper->cleanInput($_POST['title']),
                'description' => $this->helper->cleanInput($_POST['description']),
                'keywords' => $this->helper->cleanInput($_POST['keywords']),
            );
            $datos = $this->model->editMetas($data);
            if (!empty($datos)) {
                Session::set('message', array(
                    'type' => 'success',
                    'mensaje' => 'Se han actualizado correctamente los datos'
                ));
            } else {
                Session::set('message', array(
                    'type' => 'error',
                    'mensaje' => 'Lo sentimos ha ocurrido un error...'
                ));
            }
            header('Location:' . URL . 'admin/metas/');
        }
    }

    public function modalEditarUnidad() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarUnidad($data);
        echo $datos;
    }

    public function modalEditarRed() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarRed($data);
        echo $datos;
    }

    public function modalEditarCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarCategoria($data);
        echo $datos;
    }

    public function modalEditarLocal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarLocal($data);
        echo $datos;
    }

    public function editUnidad() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['unidad']['id']),
            'titulo' => $this->helper->cleanInput($_POST['unidad']['titulo']),
            'contenido' => $_POST['unidad']['contenido'],
            'estado' => (!empty($_POST['unidad']['estado'])) ? $this->helper->cleanInput($_POST['unidad']['estado']) : 0
        );
        $data = $this->model->editUnidad($data);
        echo json_encode($data);
    }

    public function editRed() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['red']['id']),
            'descripcion' => $this->helper->cleanInput($_POST['red']['descripcion']),
            'fontawesome' => $this->helper->cleanInput($_POST['red']['fontawesome']),
            'url' => $this->helper->cleanInput($_POST['red']['url']),
            'estado' => (!empty($_POST['red']['estado'])) ? $this->helper->cleanInput($_POST['red']['estado']) : 0
        );
        $data = $this->model->editRed($data);
        echo json_encode($data);
    }

    public function editCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['categoria']['id']),
            'descripcion' => $this->helper->cleanInput($_POST['categoria']['descripcion']),
            'tag' => $this->helper->cleanInput($_POST['categoria']['tag']),
            'estado' => (!empty($_POST['categoria']['estado'])) ? $this->helper->cleanInput($_POST['categoria']['estado']) : 0
        );
        $data = $this->model->editCategoria($data);
        echo json_encode($data);
    }

    public function editLocal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['local']['id']),
            'tipo_oficina' => $this->helper->cleanInput($_POST['local']['tipo_oficina']),
            'direccion' => $_POST['local']['direccion'],
            'telefono' => $this->helper->cleanInput($_POST['local']['telefono']),
            'email' => $this->helper->cleanInput($_POST['local']['email']),
            'casa_central' => (!empty($_POST['local']['casa_central'])) ? $this->helper->cleanInput($_POST['local']['casa_central']) : 0,
            'estado' => (!empty($_POST['local']['estado'])) ? $this->helper->cleanInput($_POST['local']['estado']) : 0
        );
        $data = $this->model->editLocal($data);
        echo json_encode($data);
    }

    public function modalEliminarUnidad() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarUnidad($data);
        echo $datos;
    }

    public function modalEliminarRed() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarRed($data);
        echo $datos;
    }

    public function modalEliminarCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarCategoria($data);
        echo $datos;
    }

    public function modalEliminarLocal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarLocal($data);
        echo $datos;
    }

    public function modalEliminarPost() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarPost($data);
        echo $datos;
    }

    public function deleteUnidad() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteUnidad($data);
        echo json_encode($data);
    }

    public function deleteRed() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteRed($data);
        echo json_encode($data);
    }

    public function deleteCategoria() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteCategoria($data);
        echo json_encode($data);
    }

    public function deleteLocal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteLocal($data);
        echo json_encode($data);
    }

    public function deletePost() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deletePost($data);
        echo json_encode($data);
    }

    public function trabajos() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css", "plugins/html5fileupload/html5fileupload.css", "plugins/tagsinput/jquery.tagsinput.css", "plugins/datepicker/datepicker3.css", "plugins/daterangepicker/daterangepicker.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js", "plugins/tagsinput/jquery.tagsinput.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js", "plugins/moment/moment.min.js", "plugins/daterangepicker/daterangepicker.js", "plugins/datepicker/bootstrap-datepicker.js");
        $this->view->title = "Trabajos";

        $this->view->render('admin/header');
        $this->view->render('admin/trabajos/index');
        $this->view->render('admin/footer');

        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function clientes() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css", "plugins/html5fileupload/html5fileupload.css", "plugins/tagsinput/jquery.tagsinput.css", "plugins/datepicker/datepicker3.css", "plugins/daterangepicker/daterangepicker.css");
        $this->view->publicHeader_js = array("plugins/html5fileupload/html5fileupload.min.js", "plugins/tagsinput/jquery.tagsinput.js");
        $this->view->public_js = array("plugins/ckeditor/ckeditor.js", "plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js", "plugins/moment/moment.min.js", "plugins/daterangepicker/daterangepicker.js", "plugins/datepicker/bootstrap-datepicker.js");
        $this->view->title = "Trabajos";
        $this->view->textoCliente = $this->model->textoCliente();
        $this->view->render('admin/header');
        $this->view->render('admin/clientes/index');
        $this->view->render('admin/footer');

        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function trabaja_nosotros() {
        $this->view->public_css = array("plugins/datatables/dataTables.bootstrap.css");
        $this->view->public_js = array("plugins/datatables/jquery.dataTables.min.js", "plugins/datatables/dataTables.bootstrap.min.js");
        $this->view->title = 'Trabaja con nosotros';
        $this->view->render('admin/header');
        $this->view->render('admin/trabaja_nosotros/index');
        $this->view->render('admin/footer');
        if (!empty($_SESSION['message']))
            unset($_SESSION['message']);
    }

    public function listadoTrabajos() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->listadoTrabajos();
        echo $data;
    }

    public function mostrarModalEditarTrabajo() {
        $data = array(
            'id' => $this->helper->cleanInput($_POST['post'])
        );
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->mostrarModalEditarTrabajo($data);
        echo $datos;
    }

    public function modificarVideoTrabajo() {
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'id_post' => $this->helper->cleanInput($_POST['id_post']),
            'video' => $this->helper->cleanInput($_POST['video'])
        );
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modificarVideoTrabajo($data);
        echo $datos;
    }

    public function imgPrincipal() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->imgPrincipal($data);
        echo json_encode($datos);
    }

    public function mostrarImgBtn() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->mostrarImgBtn($data);
        echo json_encode($datos);
    }

    public function eliminarIMG() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->eliminarIMG($data);
        echo json_encode($datos);
    }

    public function uploadImage() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];

            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/trabajos/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;

            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 1280;
            $alto = 720;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'archivo' => $filename
            );
            $response = $this->model->uploadImage($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = 'public/assets/img/trabajos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function guardarDatosPost() {
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id']),
            'titulo' => $this->helper->cleanInput($_POST['titulo']),
            'fecha' => $this->helper->cleanInput($_POST['fecha']),
            'categoria' => $this->helper->cleanInput($_POST['categoria']),
            'estado' => $this->helper->cleanInput($_POST['estado']),
            'tags2' => $this->helper->cleanInput($_POST['tags2']),
            'contenido' => $_POST['contenido']
        );
        $this->model->guardarDatosPost($data);
        header('Location: ' . URL . 'admin/trabajos');
    }

    public function agregarContenido() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->agregarContenido();
        echo json_encode($datos);
    }

    public function agregarDatosPost() {
        #DATOS DEL POST
        $titulo = $this->helper->cleanInput($_POST['titulo']);
        $fecha = $this->helper->cleanInput($_POST['fecha']);
        $categoria = $this->helper->cleanInput($_POST['categoria']);
        $estado = $this->helper->cleanInput($_POST['estado']);
        $tags = $this->helper->cleanInput($_POST['tags2']);
        $contenido = $_POST['contenido'];
        #Insertamos los datos para obtener el ID
        $data = array(
            'titulo' => $titulo,
            'fecha' => $fecha,
            'categoria' => $categoria,
            'tipo_evento' => $tipo_evento,
            'estado' => $estado,
            'tags' => $tags,
            'contenido' => $contenido
        );
        $datos = $this->model->agregarDatosPost($data);
        $id = $datos['id'];
        #SUBIMOS LOS ARCHIVOS
        $error = false;
        $absolutedir = dirname(__FILE__);
        $dir = 'public/assets/img/trabajos/';
        $serverdir = $dir;
        #IMAGENES
        $cantImagenes = count($_FILES['file_archivo']['name']) - 1;
        $imagenes = array();
        for ($i = 0; $i <= $cantImagenes; $i++) {
            $newname = $id . '_' . $_FILES['file_archivo']['name'][$i];
            $fname = $this->helper->cleanUrl($newname);

            $contents = file_get_contents($_FILES['file_archivo']['tmp_name'][$i]);

            $handle = fopen($serverdir . $fname, 'w');
            fwrite($handle, $contents);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = "public/assets/img/trabajos/$fname";
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $fname;
            $ancho = 1280;
            $alto = 720;
            $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            $imagenes [] = $fname;
        }
        #INSERTAMOS LAS IMAGENES EN LA BD
        $videos = array($_POST['video']);
        $dataFiles = array(
            'id' => $id,
            'imagenes' => $imagenes,
            'videos' => $videos
        );
        $this->model->agregarDatosPostFiles($dataFiles);
        header('Location: ' . URL . 'admin/trabajos');
    }

    public function cargarDTClientes() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTClientes();
        echo $data;
    }

    public function modalAgregarCliente() {
        header('Content-type: application/json; charset=utf-8');
        $datos = $this->model->modalAgregarCliente();
        echo $datos;
    }

    public function frmAddCliente() {
        if (!empty($_POST)) {
            $data = array(
                'descripcion' => $this->helper->cleanInput($_POST['cliente']['descripcion']),
                'url' => $this->helper->cleanInput($_POST['cliente']['url']),
                'estado' => (!empty($_POST['cliente']['estado'])) ? $_POST['cliente']['estado'] : 0
            );
            $idPost = $this->model->frmAddCliente($data);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/clientes/';
            $serverdir = $dir;
            #IMAGENES
            $filename = '';
            if (!empty($_FILES)) {
                foreach ($_FILES as $inputname => $file) {
                    $newname = $_POST[$inputname . '_name'];
                    $ext = explode('.', $file['name']);
                    $extension = strtolower(end($ext));
                    $fname = $this->helper->cleanUrl($idPost . '_' . $newname . '.' . $extension);
                    //$fname = $this->helper->cleanUrl($newname . '.' . $extension);

                    $contents = file_get_contents($file['tmp_name']);

                    $handle = fopen($serverdir . $fname, 'w');
                    fwrite($handle, $contents);
                    fclose($handle);

                    #############
                    #SE REDIMENSIONA LA IMAGEN
                    #############
                    # ruta de la imagen a redimensionar 
                    $imagen = $serverdir . $fname;
                    # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
                    $imagen_final = $fname;
                    $ancho = 350;
                    $alto = 300;
                    $this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
                    #############
                    $filename = $fname;
                }
                $img = array(
                    'id' => $idPost,
                    'imagen' => $filename
                );
                $this->model->frmAddClienteImg($img);
            }
            Session::set('message', array(
                'type' => 'success',
                'mensaje' => 'Se ha agregado correctamente el cliente'
            ));
            header('Location:' . URL . 'admin/clientes/');
        }
    }

    public function modalEditarCliente() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEditarCliente($data);
        echo $datos;
    }

    public function editCliente() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['cliente']['id']),
            'descripcion' => $this->helper->cleanInput($_POST['cliente']['descripcion']),
            'url' => $this->helper->cleanInput($_POST['cliente']['url']),
            'estado' => (!empty($_POST['cliente']['estado'])) ? $this->helper->cleanInput($_POST['cliente']['estado']) : 0
        );
        $data = $this->model->editCliente($data);
        echo json_encode($data);
    }

    public function uploadImgCliente() {
        if (!empty($_POST)) {
            $idPost = $_POST['data']['id'];
            $this->model->unlinkActualClienteImg($idPost);
            $error = false;
            $absolutedir = dirname(__FILE__);
            $dir = 'public/assets/img/clientes/';
            $serverdir = $dir;
            $tmp = explode(',', $_POST['file']);
            $file = base64_decode($tmp[1]);
            $ext = explode('.', $_POST['filename']);
            $extension = strtolower(end($ext));
            $name = $_POST['name'];
            $filename = $this->helper->cleanUrl($idPost . '_' . $name);
            $filename = $filename . '.' . $extension;
            //$filename				= $file.'.'.substr(sha1(time()),0,6).'.'.$extension;
            $handle = fopen($serverdir . $filename, 'w');
            fwrite($handle, $file);
            fclose($handle);
            #############
            #SE REDIMENSIONA LA IMAGEN
            #############
            # ruta de la imagen a redimensionar 
            $imagen = $serverdir . $filename;
            # ruta de la imagen final, si se pone el mismo nombre que la imagen, esta se sobreescribe 
            $imagen_final = $filename;
            $ancho = 350;
            $alto = 300;
            //$this->helper->redimensionar($imagen, $imagen_final, $ancho, $alto, $serverdir);
            #############
            header('Content-type: application/json; charset=utf-8');
            $data = array(
                'id' => $idPost,
                'img' => $filename
            );
            $response = $this->model->uploadImgCliente($data);
            echo json_encode($response);
            //echo json_encode(array('result'=>true));
        } else {
            $filename = basename($_SERVER['QUERY_STRING']);
            $file_url = '/public/archivos/' . $filename;
            header('Content-Type: 				application/octet-stream');
            header("Content-Transfer-Encoding: 	Binary");
            header("Content-disposition: 		attachment; filename=\"" . basename($file_url) . "\"");
            readfile($file_url);
            exit();
        }
    }

    public function modalEliminarCliente() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalEliminarCliente($data);
        echo $datos;
    }

    public function deleteCliente() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $data = $this->model->deleteCliente($data);
        echo json_encode($data);
    }

    public function cargarDTTrabaja() {
        header('Content-type: application/json; charset=utf-8');
        $data = $this->model->cargarDTTrabaja();
        echo $data;
    }

    public function modalVerTrabaja() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'id' => $this->helper->cleanInput($_POST['id'])
        );
        $datos = $this->model->modalVerTrabaja($data);
        echo $datos;
    }

    public function editVideoInicio() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'valor' => $this->helper->cleanInput($_POST['valor'])
        );
        $datos = $this->model->editVideoInicio($data);
        echo $datos;
    }

    public function editVideoReel() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'valor' => $this->helper->cleanInput($_POST['valor'])
        );
        $datos = $this->model->editVideoReel($data);
        echo $datos;
    }

    public function editDatosContacto() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'email' => $this->helper->cleanInput($_POST['email']),
            'telefono' => $this->helper->cleanInput($_POST['telefono'])
        );
        $datos = $this->model->editDatosContacto($data);
        echo $datos;
    }

    public function editLatLong() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'latitud' => $this->helper->cleanInput($_POST['latitud']),
            'longitud' => $this->helper->cleanInput($_POST['longitud'])
        );
        $datos = $this->model->editLatLong($data);
        echo $datos;
    }

    public function editFrase() {
        header('Content-type: application/json; charset=utf-8');
        $data = array(
            'frase' => $this->helper->cleanInput($_POST['frase']),
            'autor' => $this->helper->cleanInput($_POST['autor'])
        );
        $datos = $this->model->editFrase($data);
        echo $datos;
    }

}
