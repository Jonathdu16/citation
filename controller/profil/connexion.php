<?php

if(isset($_POST['mail'], $_POST['mot_de_passe'])){
   $hash = get_password($pdo, $_POST['mail']);
    if(is_string($hash) && password_verify($_POST['mot_de_passe'], $hash)){
       $_SESSION['profil'] = fetchAllByMail($pdo, $_POST['mail']);
       $connexions = $_SESSION['profil'];
        header('Location: index.php');
        
    }else{
        echo 'va chier';
    }
   
}
