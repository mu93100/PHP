<?php
// Namespace pour que cette classe soit correctement auto-chargée
namespace app\core;

// Importation de la classe PDO et PDOException pour gérer la BDD
use PDO;
use PDOException;

// Classe qui gère la connexion à la base de données avec PDO (Design Pattern Singleton)
class Database {
    // Attribut statique qui contiendra l'unique instance de la classe
    private static $instance = null;

    // Attribut privé qui stocke la connexion PDO
    private $conn;

    // Constructeur privé → empêche l’instanciation directe (singleton)
    private function __construct() {
        try {
            // Création de l'objet PDO avec les constantes de config (voir config.php)
            $this->conn = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, // Ex : mysql:host=localhost;dbname=mvc
                DB_USER,     // Nom d’utilisateur
                DB_PASS,     // Mot de passe
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,          // Active les exceptions sur erreur
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     // Retourne les résultats sous forme de tableau associatif
                    PDO::ATTR_EMULATE_PREPARES => false                   // Désactive l'émulation des requêtes préparées
                ]
            );
        } catch (PDOException $e) {
            // En cas d’erreur de connexion → stoppe le script et affiche un message
            die("Database Connection Error: " . $e->getMessage());
        }
    }

    // 📦 Méthode statique pour accéder à l’unique instance (singleton)
    public static function getInstance() {
        // Si aucune instance n’existe, on en crée une
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // 🔌 Retourne l’objet PDO directement (utile si besoin personnalisé)
    public function getConnection() {
        return $this->conn;
    }

    // 🔎 Exécute une requête SQL préparée avec paramètres
    public function query($sql, $params = []) {
        try {
            // Prépare la requête SQL
            $stmt = $this->conn->prepare($sql);

            // Exécute la requête avec les paramètres passés (sécurisé contre les injections SQL)
            $stmt->execute($params);

            // Retourne l’objet statement (PDOStatement) pour enchaîner un fetch par exemple
            return $stmt;
        } catch (PDOException $e) {
            // En cas d'erreur dans la requête
            die("Query Error: " . $e->getMessage());
        }
    }

    // 🧾 Récupère plusieurs résultats (plusieurs lignes)
    public function fetchAll($sql, $params = []) {
        // Appelle la méthode query puis fetchAll sur le statement
        return $this->query($sql, $params)->fetchAll();
    }

    // 📄 Récupère un seul résultat (une seule ligne)
    public function fetch($sql, $params = []) {
        return $this->query($sql, $params)->fetch();
    }

    // 🆔 Récupère l’ID de la dernière insertion
    public function lastInsertId() {
        return $this->conn->lastInsertId();
    }
}
