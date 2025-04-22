<?php
// Le Router se trouve dans le namespace app\core pour l'autoloading
namespace app\core;

// Classe Router qui gère le routage des URL vers les bons contrôleurs et méthodes
class Router {
    // Contrôleur par défaut si aucune URL n'est fournie
    private $controller = 'HomeController';

    // Méthode par défaut dans le contrôleur
    private $method = 'index';

    // Paramètres supplémentaires passés dans l'URL
    private $params = [];

    // Fonction principale qui gère le routage
    public function dispatch() {
        // Analyse l'URL reçue via la méthode parseUrl()
        $url = $this->parseUrl();

        /*
         * ----- Étape 1 : Détermination du contrôleur -----
         * Si une première partie d'URL existe (ex: /auth/login → 'auth')
         */
        if (isset($url[0])) {
            // On capitalise le nom pour respecter la convention de nommage des classes
            $controllerName = ucfirst($url[0]) . 'Controller';

            // On construit le chemin complet du fichier du contrôleur
            $controllerPath = ROOT_PATH . '/app/controllers/' . $controllerName . '.php';

            // On vérifie si le fichier existe
            if (file_exists($controllerPath)) {
                // Si oui, on le définit comme contrôleur courant
                $this->controller = $controllerName;
                // Et on retire cette partie de l'URL
                unset($url[0]);
            } else {
                // Sinon, erreur 404 : contrôleur introuvable
                $this->error404("Contrôleur '$controllerName' introuvable.");
                return;
            }
        }

        // On crée dynamiquement une instance du contrôleur (avec namespace complet)
        $controllerClass = 'app\\controllers\\' . $this->controller;
        $controller = new $controllerClass();

        /*
         * ----- Étape 2 : Détermination de la méthode -----
         * Si une seconde partie d'URL existe (ex: /auth/login → 'login')
         */
        if (isset($url[1])) {
            // Vérifie si la méthode existe dans le contrôleur
            if (method_exists($controller, $url[1])) {
                // Si oui, on la définit comme méthode à exécuter
                $this->method = $url[1];
                // Et on retire cette partie de l'URL
                unset($url[1]);
            } else {
                // Sinon, erreur 404 : méthode inexistante
                $this->error404("Méthode '{$url[1]}' inexistante dans le contrôleur '{$this->controller}'.");
                return;
            }
        }

        /*
         * ----- Étape 3 : Récupération des paramètres restants -----
         * Tous les segments restants dans l'URL sont considérés comme des paramètres
         * Exemple : /product/edit/12 → $params = [12]
         */
        $this->params = $url ? array_values($url) : [];

        /*
         * ----- Étape 4 : Appel dynamique -----
         * On appelle la méthode choisie du contrôleur avec les paramètres
         */
        call_user_func_array([$controller, $this->method], $this->params);
    }

    // Méthode pour analyser l'URL reçue depuis .htaccess (index.php?url=controller/method/params)
    private function parseUrl() {
        if (isset($_GET['url'])) {
            // Supprime le / final s'il existe
            $url = rtrim($_GET['url'], '/');

            // Nettoie l'URL pour éviter les injections ou caractères non valides
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Sépare l'URL en segments (ex: 'auth/login/12' → ['auth', 'login', '12'])
            return explode('/', $url);
        }

        // Si aucune URL reçue, retourne un tableau vide
        return [];
    }

    // Affiche une page 404 personnalisée
    private function error404($message = '') {
        // Envoie le code HTTP 404 au navigateur
        http_response_code(404);

        // Affiche un message d'erreur basique
        echo "<h1>404 - Page non trouvée</h1>";
        if ($message) {
            echo "<p>$message</p>";
        }

        // Stoppe l'exécution du script
        exit;
    }
}
