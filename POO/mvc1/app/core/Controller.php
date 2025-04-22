<?php
// Déclare le namespace pour l'autoload
namespace app\core;

// Classe mère des contrôleurs, utilisée comme base par tous les autres
class Controller {

    // 🔧 Charge un modèle à partir de son nom
    protected function model($model) {
        // Construit le nom complet de la classe modèle avec namespace
        $modelClass = 'app\\models\\' . $model;

        // Crée et retourne une instance du modèle (ex : new app\models\User())
        return new $modelClass();
    }

    // 🎨 Charge une vue et injecte des données
    protected function view($view, $data = []) {
        // Vérifie que le fichier de vue existe bien
        if (file_exists('app/views/' . $view . '.php')) {
            // Convertit les clés du tableau $data en variables locales (ex: $title, $user)
            extract($data);

            // Inclut l'en-tête HTML
            require_once 'app/views/layouts/header.php';

            // Inclut la vue principale demandée (ex: profile/edit.php)
            require_once 'app/views/' . $view . '.php';

            // Inclut le pied de page HTML
            require_once 'app/views/layouts/footer.php';
        } else {
            // Si la vue n'existe pas, stoppe le script avec un message d'erreur
            die("View does not exist");
        }
    }

    // 🔁 Redirige l'utilisateur vers une autre URL interne
    protected function redirect($url) {
        // Crée l'en-tête HTTP de redirection
        header('Location: ' . BASE_URL . '/' . $url);
        exit(); // Interrompt immédiatement le script
    }

    // 👤 Vérifie si un utilisateur est connecté
    protected function isLoggedIn() {
        // On vérifie que la variable de session `user_id` est définie
        return isset($_SESSION['user_id']);
    }

    // 🛡️ Vérifie si l'utilisateur est un administrateur
    protected function isAdmin() {
        // On vérifie que l'utilisateur est connecté et qu'il a un rôle admin
        return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true;
    }

    // 🔐 Bloque l'accès à une page si l'utilisateur **n'est pas connecté**
    protected function requireLogin() {
        if (!$this->isLoggedIn()) {
            // Redirige vers la page de connexion si non connecté
            $this->redirect('auth/login');
        }
    }

    // 🔐 Bloque l'accès à une page si l'utilisateur **n'est pas admin**
    protected function requireAdmin() {
        if (!$this->isAdmin()) {
            // Redirige vers la page d'accueil si l'utilisateur n'est pas admin
            $this->redirect('home');
        }
    }
}
