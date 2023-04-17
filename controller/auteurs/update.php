<?php

require_once ROOT . '/model/auteurs.model.php';

// Fichier pour modifier un auteur



if(isset($_POST['auteur'], $_POST['bio'], $_POST['id'])){
    if(!empty($_POST['auteur']) && !empty($_POST['id'])){
        $auteurs_id = empty($_POST['bio']) ? NULL : $_POST['bio'];
        if(auteurs_update($pdo, $_POST['auteur'], $_POST['bio'], $_POST['id'])){
            $msg = [
                'css'=>'is-success',
                'txt'=>'Mis à jour de l\'auteur parfaitement réaliser !'
            ];
            header('Location: index.php?controller='.$_GET['controller']);
        }else{
            $msg = [
                'css'=>'is-warning',
                'txt'=>'Action impossible'
            ];

        };
    };
}else{
    $auteurs = auteurs_fetchAllforUpdate($pdo, $_GET['id']);
};


require ROOT.'/view/auteurs/update.view.php';   