<?php

/**
 * 
 */
class Auth {

    public static function handleLogin() {
        @session_start();
        $logged = (!empty($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : '');
        if (empty($logged)) {
            //session_destroy();
            if (!isset($_SESSION['urlAnterior'])) {
                Session::set('urlAnterior', array(
                    'url' => NULL
                ));
            }
            if (!empty($url)) {
                $_SESSION['urlAnterior']['url'] = $url;
            }
            header('location: ' . URL . 'login/');
            exit();
        }
    }

}
