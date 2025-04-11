<?php

$routes=[
        'home'=>'/pages/home.php',
        'profil'=>'/pages/profil.php',
        'connexion' => '/pages/connexion.php',
        'deconnexion' =>'/pages/deconnexion.php',
        'cookie_consent' => '/pages/cookie_consent.php',
        'inscription' => '/pages/inscription.php'
    ];
$page=isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';
// echo __DIR__;
if (array_key_exists($page, $routes)){
    include_once __DIR__ . $routes[$page];
} else{
    include_once __DIR__ . $routes['404'];
}
?>