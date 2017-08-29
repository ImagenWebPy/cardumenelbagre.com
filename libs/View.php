<?php

class View {

    public $helper;

    function __construct() {
        $this->helper = new Helper();
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/' . $name . '.php';
        }
    }

}
