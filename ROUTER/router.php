<?php

$routes=[
        'home'=>'/pages/home.php',
        'profil'=>'/pages/profil.php',
        'apropos'=>'/pages/apropos.php',
        '404' => '/pages/404.php',
        'connexion' => '/pages/connexion.php',
        'deconnexion' =>'/pages/deconnexion.php',
        'language' => '/pages/language.php',
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
<!-- $page=isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';
// ternaire ? : ::: si si la donnée 'page' existe ALORS affiche 'page' ss les espaces et caractères spé 
// SINON affiche 'home' === clé qui correspond à un URL -->

<?php




?>