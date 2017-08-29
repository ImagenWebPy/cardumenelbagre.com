<?php

/**
 * ARCHIVO DE CONFIGURACIONES
 * @author "Raul Ramirez" <raul.chuky@gmail.com>
 * @version 1 2017-08-28
 */
// Always provide a TRAILING SLASH (/) AFTER A PATH
$host = getHost();
switch ($host) {
    case 'localhost':
        define('URL', 'http://localhost/cardumenelbagre.com/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'cardumen_db');
        break;
    default :
        define('URL', 'http://192.168.90.195/institucional/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'cardumen_db');
        break;
}
define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');

// Salt utilizado para el hash de la BD
define('HASH_PASSWORD_KEY', '!@123456789ABCDEFGHIJKLMNOPRSTWYZ[¿]{?}<->');

// Constantes varias
define('SITE_TITLE', 'Cardumen el Bagre :: ');
define('ARCHIVOS', URL . 'public/archivos/');
define('PUBLIC_FILES', URL . 'public/');
define('ASSETS', URL . 'public/assets/');
define('CANT_REG_PAGINA', 16);

function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}
