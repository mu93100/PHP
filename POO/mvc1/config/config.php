<?php
// ==============================
// ⚙️ Configuration de la base de données
// ==============================

// Hôte de la base de données (en général 'localhost' en local)
define('DB_HOST', 'localhost');

// Nom d'utilisateur pour accéder à la base de données
define('DB_USER', 'root');

// Mot de passe de l'utilisateur BDD (à adapter selon ton environnement) // A CHANGER // define('DB_PASS', 'votre_mot_de_passe');
define('DB_PASS', '');

// Nom de la base de données utilisée par l'application // A CHANGER // 'mvc'
define('DB_NAME', 'mvc');


// ==============================
// 🌐 Configuration de l'URL de base
// ==============================

// URL de base du projet (à utiliser pour générer des liens dynamiques dans les vues)
// Exemple : http://localhost/mvc1
define('BASE_URL', 'http://localhost/PHP/POO/mvc1/'); // mettre l'adresse qui apparait ds URL de l'index // A CHANGER // http://localhost/PHP/mvc1/




// ==============================
// 🧱 Configuration de l'application
// ==============================

// Nom de l'application (affiché dans les titres, le header, etc.) // A CHANGER // PHP MVC App facu'
define('APP_NAME', 'PHP MVC App facu');

// Version de l'application (à afficher dans le footer ou pour la gestion des versions) // a changer 'APP_VERSION facu', '1.0.1'
define('APP_VERSION facu', '1.0.1');


// ==============================
// 🐞 Affichage des erreurs PHP (en développement)
// ==============================

// Active l'affichage des erreurs à l'écran
ini_set('display_errors', 1);

// Active l'affichage des erreurs au démarrage de PHP
ini_set('display_startup_errors', 1);

// Définit le niveau de rapport d'erreurs (ici, toutes les erreurs, avertissements et notices)
error_reporting(E_ALL);


// ==============================
// 🕒 Fuseau horaire par défaut
// ==============================

// Définit le fuseau horaire utilisé par date(), time(), etc.
date_default_timezone_set('Europe/Paris');

// 🕑 Résultat :
// L’heure utilisée par toutes les fonctions date(), time(), DateTime, etc. sera celle de la France.

// Cela prend en compte l’heure d’été et d’hiver automatiquement. ✔️
