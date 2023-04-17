<?php

require_once ROOT.'/model/utilisateurs.model.php';

if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'update' :
            $action = $_GET['action'];
            break;
        default :
            require_once ROOT.'/controller/404/index.php';
    }
}else{
    $action = 'update';
}

require_once __DIR__.'/'.$action.'.php';