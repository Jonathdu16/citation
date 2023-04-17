<?php

/**
 * Définit quelques constantes
 */

define('ROOT', dirname(__DIR__));
define('DEV', true);
define('DEBUG', true);

if(DEV){
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'citations');
}