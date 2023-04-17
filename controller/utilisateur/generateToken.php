<?php

require_once ROOT.'inc/conf.php';
require_once ROOT.'model/pdo.php';

// On crée le  header

$header = [
    'typ' => 'JWT',
    'alg' => 'HS256'
];

// On crée le contenu (playload)
$playload = [
    'user_id' => 123,
    'roles' => [
        'ROLE_ADMIN',
        'ROLE_USER'
    ],
    'email' => 'contact@demo.fr'
];

// On encode en base64

$base64Header = base64_encode(json_encode($header));
$base64Playload = base64_encode(json_encode($playload));

// On "nettoie" les valeurs encodées
// On retire les +, / et =
$base64Header = str_replace(['+', '/', '='], ['-', '_', ''], $base64Header);
$base64Playload = str_replace(['+', '/', '='], ['-', '_', ''], $base64Playload);

// On génére la signature

$secret = base64_encode('SECRET');

$signature = hash_hmac('sha256', $base64Header.'.'.$base64Playload, $secret, true);

$base64signature = base64_encode($signature);

$signature = str_replace(['+', '/', '='], ['-', '_', ''], $base64signature);

// On crée le token

$jwt = $base64Header.'.' . $base64Playload . '.' . $signature;

echo $jwt;

