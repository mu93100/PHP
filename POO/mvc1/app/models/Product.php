<?php
// Déclare le namespace pour l'autoloading automatique
namespace app\models;

// Importe la classe Database pour interagir avec la base de données
use app\core\Database;

// Modèle Product : gère toutes les opérations liées aux produits
class Product {
    private $db; // Instance de la base de données

    // Constructeur : initialise la connexion à la base via le singleton Database
    public function __construct() {
        $this->db = Database::getInstance();
    }

    // 🔍 Récupère tous les produits, triés par date de création décroissante
    public function getAllProducts() {
        return $this->db->fetchAll(
            "SELECT * FROM products ORDER BY created_at DESC"
        );
    }

    // 🔎 Récupère un seul produit par son ID
    public function getProductById($id) {
        return $this->db->fetch(
            "SELECT * FROM products WHERE id = ?", 
            [$id] // paramètre sécurisé via requête préparée
        );
    }

    // ➕ Ajoute un nouveau produit dans la base de données
    public function addProduct($data) {
        $this->db->query(
            "INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)",
            [
                $data['name'],
                $data['description'],
                $data['price'],
                $data['image']
            ]
        );

        // Retourne l'ID du produit inséré
        return $this->db->lastInsertId();
    }

    // 🛠️ Met à jour un produit existant par son ID
    public function updateProduct($id, $data) {
        $this->db->query(
            "UPDATE products SET name = ?, description = ?, price = ?, image = ? WHERE id = ?",
            [
                $data['name'],
                $data['description'],
                $data['price'],
                $data['image'],
                $id
            ]
        );

        return true; // Tu pourrais vérifier les lignes affectées pour plus de robustesse
    }

    // ❌ Supprime un produit par son ID
    public function deleteProduct($id) {
        $this->db->query(
            "DELETE FROM products WHERE id = ?",
            [$id]
        );

        return true;
    }
}
