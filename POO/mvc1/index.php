<?php


// Point d'entrée de l'application
session_start(); // Démarre une session PHP pour gérer les variables de session (authentification, paniers, etc.)

// Définit le chemin de base du projet comme constante ROOT_PATH
define('ROOT_PATH', __DIR__); // __DIR__ retourne le chemin du dossier courant (où se trouve ce script)

// Fonction d'autoload pour charger automatiquement les classes PHP utilisées dans le projet
spl_autoload_register(function ($class) {
    // Remplace les antislashs des namespaces par des slashs pour construire le chemin du fichier
    $class = str_replace('\\', '/', $class);
    
    // Construit le chemin complet du fichier de classe à partir de ROOT_PATH
    $file = ROOT_PATH . '/' . $class . '.php';
    
    // Vérifie si le fichier existe, puis l'inclut
    if (file_exists($file)) {
        require_once $file;
    }
});

// Charge les fichiers de configuration (base de données, constantes, etc.)
require_once 'config/config.php';

// Initialise le système de routage (MVC) et traite la requête HTTP entrante
$router = new app\core\Router(); // Crée une instance du routeur (basée sur ta structure MVC)
$router->dispatch(); // Lance le processus de "dispatch" pour rediriger vers le bon contrôleur/action
