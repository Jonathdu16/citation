<?php

if(isset($_POST['citation'], $_POST['auteur'], $_POST['explication'])){
    if(!empty($_POST['citation'])){
        $auteurs_id = empty($_POST['auteur']) ? NULL : $_POST['auteur'];
        $explication = empty($_POST['explication']) ? NULL : $_POST['explication'];

        

        if(citations_add($pdo, $_POST['citation'], $explication,  $auteurs_id)){
            $_SESSION['$msg'] = [
                'css'=>'is-succes',
                'txt'=>'Votre citation ajoutée'
            ];
        }else{
            $_SESSION['$msg'] = [
                'css'=>'is-warning',
                'txt'=>'MorteCouille'
            ];  
        }
    }else{
        $_SESSION['$msg'] = [
            'css'=>'is-warning',
            'txt'=>'Merci de compléter tous les champs'
        ];  
    }
}
$citations = citations_fetchAll($pdo);
require ROOT . '/view/citations/list.view.php';