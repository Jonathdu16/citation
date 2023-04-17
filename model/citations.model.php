<?php

/**
 * Composants d'accès aux données de la table citations
 */

require_once __DIR__.'/pdo.php';

 /**
* Undocumented function
* @param PDO $pdo
* @return array $citations
*/

function citations_fetchAll(PDO $pdo){
    $sql = 'SELECT citations.id, citations.citation, citations.explication, DATE_FORMAT(citations.date_modif, "%d/%m/%Y") as date_modif, auteurs.auteur FROM citations LEFT JOIN auteurs ON auteurs.id = citations.auteurs_id';
    $q = $pdo->query($sql);
    return $q->fetchAll(PDO::FETCH_ASSOC);
}

 /**
* Retourne un enregistrement sélectionné par son id
*
* @param PDO $pdo
* @param int $id
* @return array | false
*/

// function fetchById(PDO $pdo, int $id){
//     avec un tableau ordonnée
//     $sql = 'SELECT * FROM citations WHERE citations.id = ?';
//     $q = $pdo->prepare($sql);
//     $q->execute([$id]);
//     return $q->fetchAll(PDO::FETCH_ASSOC);
// }

// function fetchById(PDO $pdo, int $id){
//     avec un tableau associatif
//     $sql = 'SELECT * FROM citations WHERE citations.id = :id';
//     $q = $pdo->prepare($sql);
//     $q->execute([
//         ':id' => $id,
//     ]);
//     return $q->fetchAll(PDO::FETCH_ASSOC);
// }

// function fetchById(PDO $pdo, int $id){
//     avec les méthodes bindParam / bindValue
//     $sql = 'SELECT * FROM citations WHERE citations.id = :id';
//     $q = $pdo->prepare($sql);
//     $q->execute([
//         ':id' => $id,
//     ]);
//     return $q->fetchAll(PDO::FETCH_ASSOC);
// }

 /**
* Ajoute une citation
*
* @param PDO $pdo
* @return array | false
*/

function citations_add(PDO $pdo, string $citation, string $explication = null, int $auteurs_id = null){
     $sql = 'INSERT INTO citations(citations.citation, citations.explication, citations.auteurs_id) VALUES (:citation, :explication, :auteurs_id)';

     $q = $pdo->prepare($sql);
     $q->bindValue(':citation', $citation);
     $q->bindValue(':explication', $explication);
     $q->bindValue(':auteurs_id', $auteurs_id);
     return $q->execute();
 }


 /**
* Modifie une citation
*
* @param PDO $pdo
* @return array | false
*/

// function update(PDO $pdo, string $citation, string $explication = null, int $auteurs_id = null, int $id){
    
//     $sql = 'UPDATE citations SET citation = :citation, explication = :explication, auteurs_id = :auteurs_id WHERE id = :id';

//     $q = $pdo->prepare($sql);
//     $q->bindValue(':citation', $citation);
//     $q->bindValue(':explication', $explication);
//     $q->bindValue(':auteurs_id', $auteurs_id);
//     $q->bindValue(':id', $id);
//     return $q->execute();
// }

 /**
* Supprime une citation
*
* @param PDO $pdo
* @param integer $id
* @return array | false
*/

function citations_delete(PDO $pdo, int $id){
    $sql = 'DELETE FROM citations WHERE id = ?';
    $q = $pdo->prepare($sql);
    return $q->execute([$id]);
}