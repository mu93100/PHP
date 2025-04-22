<?php
// Déclaration du namespace utilisé pour le chargement automatique
namespace app\controllers;

// Import des classes nécessaires
use app\core\Controller;
use app\models\User;




// Contrôleur d'authentification (connexion, inscription, déconnexion)
class AuthController extends Controller {
    private $userModel;

    // Constructeur : instancie le modèle utilisateur
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    // Page de connexion
    public function login() {
        // Si déjà connecté, redirige vers l'accueil
        if ($this->isLoggedIn()) {
            $this->redirect('home');
        }



        // Si formulaire soumis (méthode POST)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Nettoie les données envoyées
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            
            // Initialise un tableau d'erreurs
            $errors = [];
            
            // Vérifie les champs requis
            if (empty($username)) {
                $errors['username'] = 'Username is required';
            }

            if (empty($password)) {
                $errors['password'] = 'Password is required';
            }

            // Si aucun champ vide, on tente de connecter l'utilisateur
            if (empty($errors)) {
                $user = $this->userModel->login($username, $password);

                if ($user) {
                    // Connexion réussie : on crée une session utilisateur
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['is_admin'] = $user['is_admin'];
                    setcookie('cookie_mvc_username', $user['username'], time() + (86400 * 30), "/mvc1/");
            setcookie('cookie_mvc_password', $password, time() + (86400 * 30), "/mvc1/");
            setcookie('cookie_mvc_is_admin', $user['is_admin'], time() + (86400 * 30), "/mvc1/");
            

                    // Redirige selon le rôle
                    if ($user['is_admin']) {
                        $this->redirect('admin');
                    } else {
                        $this->redirect('profile');
                    }
                } else {
                    // Erreur de connexion
                    $errors['login'] = 'Invalid username or password';
                }
            }

            // S'il y a des erreurs ou tentative échouée, recharge la vue avec les erreurs
            $data = [
                'title' => 'Login',
                'username' => $username,
                'errors' => $errors
            ];

            $this->view('auth/login', $data);
        } else {
          
            $data = [
                'title' => 'Login',
                'username' => '',
                'errors' => []
            ];

            $this->view('auth/login', $data);
        }
    }

     /**
     * Méthode appelée lorsqu'un utilisateur soumet le formulaire d'inscription.
     *
     * Le lien entre le formulaire HTML et cette méthode se fait automatiquement
     * grâce au système de routage personnalisé de l'application.
     *
     * Exemple d'action dans la vue HTML :
     * <form action="<?= BASE_URL; ?>/auth/register" method="POST">
     *
     * Voici le fonctionnement détaillé :
     *
     * 1. L'attribut `action` du formulaire génère une URL du type :
     *    http://localhost/mvc1/auth/register
     *
     * 2. Le routeur (Router.php) découpe cette URL :
     *    - 'auth'       → correspond au contrôleur 'AuthController'
     *    - 'register'   → correspond à la méthode 'register()' dans ce contrôleur
     *
     * 3. Si la méthode est bien définie dans le contrôleur, le routeur l'appelle :
     *    $controller = new AuthController();
     *    $controller->register();
     *
     * 4. Si la requête est de type POST, cette méthode traitera les données
     *    envoyées via le formulaire.
     *
     * Ce mécanisme est 100% automatique grâce au routing MVC de l'application.
     */

    // Page d'inscription
    public function register() {
        // Si déjà connecté, redirige vers l'accueil
        if ($this->isLoggedIn()) {
            $this->redirect('home');
        }

        // Si formulaire soumis
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Nettoyage des champs
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $confirmPassword = trim($_POST['confirm_password']);

            $errors = [];

            // Validation du nom d'utilisateur
            if (empty($username)) {
                $errors['username'] = 'Username is required';
            } elseif (strlen($username) < 3) {
                $errors['username'] = 'Username must be at least 3 characters';
            } elseif ($this->userModel->getUserByUsername($username)) {
                $errors['username'] = 'Username is already taken';
            }

            // Validation de l'email
            if (empty($email)) {
                $errors['email'] = 'Email is required';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Invalid email format';
            } elseif ($this->userModel->getUserByEmail($email)) {
                $errors['email'] = 'Email is already registered';
            }

            // Validation du mot de passe
            if (empty($password)) {
                $errors['password'] = 'Password is required';
            } elseif (strlen($password) < 6) {
                $errors['password'] = 'Password must be at least 6 characters';
            }

            // Vérification de la confirmation du mot de passe
            if ($password !== $confirmPassword) {
                $errors['confirm_password'] = 'Passwords do not match';
            }

            // Si aucun problème, on enregistre l'utilisateur
            if (empty($errors)) {
                $userId = $this->userModel->register($username, $email, $password);

                if ($userId) {
                    // Connexion immédiate après inscription
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['username'] = $username;
                    $_SESSION['is_admin'] = false;

                    $this->redirect('profile');
                } else {
                    $errors['register'] = 'Registration failed. Please try again later.';
                }
            }

            // Affiche le formulaire avec les erreurs (le cas échéant)
            $data = [
                'title' => 'Register',
                'username' => $username,
                'email' => $email,
                'errors' => $errors
            ];

            $this->view('auth/register', $data);
        } else {
        
            $data = [
                'title' => 'Register',
                'username' => '',
                'email' => '',
                'errors' => []
            ];

            $this->view('auth/register', $data);
        }
    }

    // Déconnexion
    public function logout() {
        // Supprime toutes les données de session
        $_SESSION = [];

        // Détruit la session
        session_destroy();

        // Redirige vers l'accueil
        $this->redirect('home');
    }
}
