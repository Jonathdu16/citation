<?php
    require_once ROOT . '/model/auteurs.model.php';

/**
* controller action list
*/

$auteurs = auteurs_fetchAll($pdo);
// Appeler la vue

require ROOT.'/view/auteurs/list.view.php';    