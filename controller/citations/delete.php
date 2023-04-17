<?php

/**
 * Supprime une citation par son id
 */

 if(isset($_GET['id'])){
   citations_delete($pdo, $_GET['id']);
   $msg = [
      'css'=>'is-success',
      'txt'=>'La citation a bien été supprimée'
   ];
 }else{
   $msg = [
      'css'=>'is-warning',
      'txt'=>'Action impossible'
   ];
 }

 $_SESSION['msg'] = $msg;
 header('Location: index.php');