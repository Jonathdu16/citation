<?php

/**
 * Supprime une citation par son id
 */

 if(isset($_GET['id'])){
    auteurs_delete($pdo, $_GET['id']);
   $msg = [
      'css'=>'is-success',
      'txt'=>'L\'auteur a bien été supprimée'
   ];
 }else{
   $msg = [
      'css'=>'is-warning',
      'txt'=>'Action impossible'
   ];
 }


 $_SESSION['msg'] = $msg;
 header('Location: index.php?controller='.$_GET['controller']);