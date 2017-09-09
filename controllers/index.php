<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->title = 'Cardumen el Bagre';
        $this->view->description = 'Inicio';
        $this->view->keywords = 'Inicio';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }

}
