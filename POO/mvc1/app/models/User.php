<?php
// Déclare le namespace du modèle pour l'autoload
namespace app\models;

// Importe la classe Database pour accéder à la BDD via PDO
use app\core\Database;

// Modèle User : gère toutes les opérations sur les utilisateurs
class User {
    private $db; // Contiendra l'instance PDO encapsulée

    // Constructeur : récupère l'instance unique de la BDD
    public function __construct() {
        $this->db = Database::getInstance();
    }

    // 🔎 Récupère un utilisateur par son ID (utile pour afficher le profil)
    public function getUserById($id) {
        return $this->db->fetch(
            "SELECT id, username, email, is_admin, created_at FROM users WHERE id = ?", 
            [$id]
        );
    }

    // 🔍 Récupère un utilisateur via son nom d'utilisateur (utile à l'inscription/login)
    public function getUserByUsername($username) {
        return $this->db->fetch(
            "SELECT * FROM users WHERE username = ?", 
            [$username]
        );
    }

    // 🔍 Récupère un utilisateur via son email (utile pour vérifications)
    public function getUserByEmail($email) {
        return $this->db->fetch(
            "SELECT * FROM users WHERE email = ?", 
            [$email]
        );
    }

    // 🆕 Inscrit un nouvel utilisateur
    public function register($username, $email, $password) {
        // Hachage sécurisé du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insertion dans la table `users`
        $this->db->query(
            "INSERT INTO users (username, email, password) VALUES (?, ?, ?)",
            [$username, $email, $hashedPassword]
        );

        // Retourne l'ID du nouvel utilisateur créé
        return $this->db->lastInsertId();
    }

    // 🔐 Vérifie les identifiants lors de la connexion
    public function login($username, $password) {
        // Récupère l'utilisateur par username
        $user = $this->getUserByUsername($username);

        // Si l'utilisateur existe et que le mot de passe est correct
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        // Sinon, renvoie false (échec de connexion)
        return false;
    }

    // 👥 Récupère tous les utilisateurs (pour tableau admin)
    public function getAllUsers() {
        return $this->db->fetchAll(
            "SELECT id, username, email, is_admin, created_at FROM users ORDER BY created_at DESC"
        );
    }

    // ✏️ Met à jour le profil utilisateur (nom d'utilisateur et email)
    public function updateProfile($id, $data) {
        $this->db->query(
            "UPDATE users SET username = ?, email = ? WHERE id = ?",
            [$data['username'], $data['email'], $id]
        );

        return true;
    }

    // 🔑 Change le mot de passe de l'utilisateur
    public function updatePassword($id, $password) {
        // Hash du nouveau mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Mise à jour dans la BDD
        $this->db->query(
            "UPDATE users SET password = ? WHERE id = ?",
            [$hashedPassword, $id]
        );

        return true;
    }
}
