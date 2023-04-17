<?php

/**
 * Entree de notre application
 * Appelle le fichier de conf
 * route vers le bon controller
 */

session_start();

require '../inc/conf.php';

if(isset($_GET['controller'])){
    switch($_GET['controller']){
        case 'citations':
        case 'auteurs' :
        case 'profil':
        case 'utilisateur' :
                $controller = $_GET['controller'];
                break;
            default :
                $controller = '404';
    }
}else{
    $controller = 'citations';
}

if(!isset($_SESSION['profil'])){
   $controller = 'profil';
}

require_once ROOT.'/controller/'.$controller.'/index.php';