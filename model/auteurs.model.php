<?php


require __DIR__ . '/pdo.php';



function auteurs_fetchAll(PDO $pdo){
    $sql = 'SELECT auteurs.id, auteurs.auteur, auteurs.bio, DATE_FORMAT(auteurs.date_modif, "%d/%m/%Y") as date_modif FROM auteurs ORDER BY auteur';
    $q = $pdo->query($sql);
    return $q->fetchAll(PDO::FETCH_ASSOC);
}

function auteurs_fetchAllforUpdate(PDO $pdo, $id){
    $sql = 'SELECT * FROM auteurs WHERE id='.$id;
    $q = $pdo->query($sql);
    return $q->fetchAll(PDO::FETCH_ASSOC);
}

function auteurs_add(PDO $pdo, string $auteur, string $bio){
    $sql = 'INSERT INTO auteurs(auteurs.auteur, auteurs.bio) VALUES (:auteur, :bio)';

    $q = $pdo->prepare($sql);
    $q->bindValue(':auteur', $auteur);
    $q->bindValue(':bio', $bio);
    return $q->execute();
}

function auteurs_delete(PDO $pdo, int $id){
    $sql = 'DELETE FROM auteurs WHERE id = ?';
    $q = $pdo->prepare($sql);
    return $q->execute([$id]);
}

function auteurs_update(PDO $pdo, string $auteur, string $bio, int $id){
    $sql = 'UPDATE auteurs SET auteurs.auteur = :auteur, auteurs.bio = :bio WHERE id ='.$id;
    $q = $pdo->prepare($sql);
        $q->bindValue(':auteur', $auteur);
        $q->bindValue(':bio', $bio);
    return $q->execute();
}

