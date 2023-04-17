<?php

if(isset($_POST['auteur'], $_POST['bio'])){
    if(!empty($_POST['auteur'])){
        $bio = empty($_POST['bio']) ? NULL : $_POST['bio'];

        if(auteurs_add($pdo, $_POST['auteur'], $bio)){
            $_SESSION['$msg'] = [
                'css'=>'is-succes',
                'txt'=>'Votre auteur a bien été ajoutée'
            ];
        }else{
            $_SESSION['$msg'] = [
                'css'=>'is-warning',
                'txt'=>'Ajout impossible'
            ];  
        }
    }else{
        $_SESSION['$msg'] = [
            'css'=>'is-warning',
            'txt'=>'Merci de compléter tous les champs'
        ];  
    }
}

$auteurs = auteurs_fetchAll($pdo);
require ROOT . '/view/auteurs/list.view.php';