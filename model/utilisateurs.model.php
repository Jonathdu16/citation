<?php

require __DIR__ . '/pdo.php';


function get_password(PDO $pdo, string $mail){
    $sql = 'SELECT mot_de_passe FROM utilisateurs WHERE mail = ?';
    $q = $pdo->prepare($sql);
    $q->execute([$mail]);
    return $q->fetchColumn();
}

function fetchAll(PDO $pdo){
    $sql = 'SELECT id, nom, prenom, mail, is_admin  FROM utilisateurs ';
    $q = $pdo->prepare($sql);
    $q->execute();
    return $q->fetch(PDO::FETCH_ASSOC);
}

function fetchAllByMail(PDO $pdo, string $mail){
    $sql = 'SELECT id, nom, prenom, mail, is_admin  FROM utilisateurs WHERE mail = ?';
    $q = $pdo->prepare($sql);
    $q->execute([$mail]);
    return $q->fetch(PDO::FETCH_ASSOC);
}

function updateUsers(PDO $pdo, string $prenom, string $nom, string $mail, int $id){
    $sql = 'UPDATE utilisateurs SET prenom = :prenom, nom = :nom, mail = :mail WHERE id ='.$id;
    $q = $pdo->prepare($sql);
        $q->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $q->bindValue(':nom', $nom, PDO::PARAM_STR);
        $q->bindValue(':mail', $mail, PDO::PARAM_STR);
    $q->execute();
}

