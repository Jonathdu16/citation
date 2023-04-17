<?php

if(isset($_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_GET['id'])){
    if(!empty($_POST['mail'])){
        $prenom = empty($_POST['firstname']) ? NULL : $_POST['firstname'];
        $nom = empty($_POST['lastname']) ? NULL : $_POST['lastname'];
        updateUsers($pdo, $_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_GET['id']);
        $_SESSION['profil'] = $_POST['prenom'];
        $msg = [
            'css'=>'is-warning',
            'txt'=>'Félicitation votre profil à bien été mise à jour !'
        ];
    }else{
        $msg = [
            'css'=>'is-warning',
            'txt'=>'Veuillez spécifier votre adresse mail !'
        ];
    };
}else{
    $profil = fetchAllByMail($pdo, $_SESSION['profil']['mail']);
};


require ROOT.'/view/utilisateurs/update.view.php';   