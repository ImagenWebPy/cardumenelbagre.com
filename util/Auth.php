<?php

/**
 * 
 */
class Auth {

    public static function handleLogin() {
        @session_start();
        $logged = (!empty($_SESSION['usuario']) ? $_SESSION['usuario'] : '');
        if ($logged == false) {
            session_destroy();
            header('location: ' . URL . 'login');
            exit;
        }
    }

}
