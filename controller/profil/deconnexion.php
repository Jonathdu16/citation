<?php
require_once ROOT . '/model/utilisateurs.model.php';

if(isset($_GET['action']) && $_GET['action'])try {
    //code...
} catch (Throwable $th) {
    //throw $th;
}

unset($_SESSION['profil']);

if(!isset($_SESSION['profil'])){
    require ROOT . '/view/utilisateurs/connexion.php';
}