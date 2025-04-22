<?php
// Déclare le namespace du contrôleur, utilisé pour l'autoloading automatique
namespace app\controllers;

// Importation de la classe de base Controller et du modèle User
use app\core\Controller;
use app\models\User;

// Contrôleur chargé de gérer toutes les actions liées au profil utilisateur
class ProfileController extends Controller {
    private $userModel; // Contiendra l'instance du modèle User

    // Constructeur appelé automatiquement à la création de l'objet
    public function __construct() {
        // On instancie ici le modèle User via une méthode du contrôleur parent
        $this->userModel = $this->model('User');
    }

    // Affiche la page principale du profil utilisateur
    public function index() {
        // Vérifie si l'utilisateur est bien connecté, sinon le redirige
        $this->requireLogin();

        // Récupère les informations de l'utilisateur à partir de son ID stocké en session
        $user = $this->userModel->getUserById($_SESSION['user_id']);

        // Prépare les données à envoyer à la vue
        $data = [
            'title' => 'Profile',
            'user' => $user
        ];

        // Affiche la vue "profile/index" en lui passant les données
        $this->view('profile/index', $data);
    }

    // Permet à l'utilisateur de modifier son pseudo et son email
    public function edit() {
        $this->requireLogin(); // Vérifie que l'utilisateur est connecté

        // Récupère les données actuelles de l'utilisateur
        $user = $this->userModel->getUserById($_SESSION['user_id']);

        // Si le formulaire a été soumis en POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // On nettoie les valeurs reçues du formulaire
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);

            $errors = []; // Tableau pour stocker les erreurs de validation

            // Validation du pseudo
            if (empty($username)) {
                $errors['username'] = 'Username is required';
            } elseif (strlen($username) < 3) {
                $errors['username'] = 'Username must be at least 3 characters';
            } elseif ($username !== $user['username'] && $this->userModel->getUserByUsername($username)) {
                // Vérifie que le nouveau nom d'utilisateur n'est pas déjà utilisé par un autre
                $errors['username'] = 'Username is already taken';
            }

            // Validation de l'email
            if (empty($email)) {
                $errors['email'] = 'Email is required';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Invalid email format';
            } elseif ($email !== $user['email'] && $this->userModel->getUserByEmail($email)) {
                // Vérifie que le nouvel email n'est pas déjà utilisé
                $errors['email'] = 'Email is already registered';
            }

            // Si aucune erreur, on met à jour le profil dans la base de données
            if (empty($errors)) {
                $data = [
                    'username' => $username,
                    'email' => $email
                ];

                if ($this->userModel->updateProfile($_SESSION['user_id'], $data)) {
                    // Met à jour le nom d'utilisateur dans la session
                    $_SESSION['username'] = $username;

                    // Message de confirmation
                    $_SESSION['success_message'] = 'Profile updated successfully';

                    // Redirige vers la page de profil
                    $this->redirect('profile');
                } else {
                    $errors['update'] = 'Failed to update profile. Please try again later.';
                }
            }

            // Recharge le formulaire avec les données déjà saisies + erreurs
            $data = [
                'title' => 'Edit Profile',
                'user' => [
                    'username' => $username,
                    'email' => $email
                ],
                'errors' => $errors
            ];

            $this->view('profile/edit', $data);
        } else {
            // Si requête GET : affiche le formulaire pré-rempli
            $data = [
                'title' => 'Edit Profile',
                'user' => $user,
                'errors' => []
            ];

            $this->view('profile/edit', $data);
        }
    }

    // Permet à l'utilisateur de changer son mot de passe
    public function password() {
        $this->requireLogin(); // Vérifie que l'utilisateur est connecté

        // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // On nettoie les données saisies
            $currentPassword = trim($_POST['current_password']);
            $newPassword = trim($_POST['new_password']);
            $confirmPassword = trim($_POST['confirm_password']);

            $errors = [];

            // Vérifie que l'ancien mot de passe est bien saisi
            if (empty($currentPassword)) {
                $errors['current_password'] = 'Current password is required';
            } else {
                // On récupère les infos utilisateur pour vérifier le mot de passe actuel
                $user = $this->userModel->getUserById($_SESSION['user_id']);
                if (!password_verify($currentPassword, $user['password'])) {
                    $errors['current_password'] = 'Current password is incorrect';
                }
            }

            // Validation du nouveau mot de passe
            if (empty($newPassword)) {
                $errors['new_password'] = 'New password is required';
            } elseif (strlen($newPassword) < 6) {
                $errors['new_password'] = 'New password must be at least 6 characters';
            }

            // Vérifie que la confirmation correspond au nouveau mot de passe
            if ($newPassword !== $confirmPassword) {
                $errors['confirm_password'] = 'Passwords do not match';
            }

            // Si pas d'erreurs, on met à jour le mot de passe
            if (empty($errors)) {
                if ($this->userModel->updatePassword($_SESSION['user_id'], $newPassword)) {
                    $_SESSION['success_message'] = 'Password changed successfully';
                    $this->redirect('profile');
                } else {
                    $errors['update'] = 'Failed to change password. Please try again later.';
                }
            }

            // Si erreurs, on affiche la vue avec messages d’erreur
            $data = [
                'title' => 'Change Password',
                'errors' => $errors
            ];

            $this->view('profile/password', $data);
        } else {
            // Si GET : affiche le formulaire vide pour changer le mot de passe
            $data = [
                'title' => 'Change Password',
                'errors' => []
            ];

            $this->view('profile/password', $data);
        }
    }
}
