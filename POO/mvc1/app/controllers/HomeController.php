<?php
// Déclaration du namespace pour le bon fonctionnement de l'autoload
namespace app\controllers;

// Importation des classes nécessaires
use app\core\Controller;   // Classe de base du contrôleur (probablement avec les méthodes view() et model())
use app\models\Product;    // Modèle Product (accès aux produits depuis la BDD)

// Contrôleur principal de l'application, qui gère la page d'accueil
class HomeController extends Controller {
    // Attribut pour accéder au modèle Product
    private $productModel;

    // Constructeur : on charge le modèle Product une seule fois ici
    public function __construct() {
        // Appelle la méthode model() héritée du contrôleur de base
        // Cela permet de récupérer une instance du modèle "Product"
        $this->productModel = $this->model('Product');
    }

    // Méthode par défaut appelée lorsque l'URL est vide ou "/home/index"
    public function index() {
        // Récupère tous les produits depuis la base de données via le modèle
        $products = $this->productModel->getAllProducts();

        // Prépare les données à envoyer à la vue
        $data = [
            'title' => 'Welcome to ' . APP_NAME,  // Titre dynamique (APP_NAME défini dans config.php)
            'products' => $products               // Liste des produits récupérés
        ];

        // Charge la vue "home/index" et lui transmet les données
        // Cela va chercher le fichier : app/views/home/index.php
        $this->view('home/index', $data);
    }
}
