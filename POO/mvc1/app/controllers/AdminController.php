<?php
// Déclaration du namespace pour l'autoloading
namespace app\controllers;

// Importation des classes nécessaires
use app\core\Controller;
use app\models\User;
use app\models\Product;

// Contrôleur dédié à la gestion des fonctionnalités d'administration
class AdminController extends Controller {
    private $userModel;
    private $productModel;

    // Constructeur : instancie les modèles nécessaires
    public function __construct() {
        // Chargement du modèle utilisateur
        $this->userModel = $this->model('User');
        // Chargement du modèle produit
        $this->productModel = $this->model('Product');
    }

    // Tableau de bord admin
    public function index() {
        $this->requireAdmin(); // Vérifie que l'utilisateur est administrateur

        // Récupère tous les utilisateurs et produits
        $users = $this->userModel->getAllUsers();
        $products = $this->productModel->getAllProducts();

        // Prépare les données à envoyer à la vue
        $data = [
            'title' => 'Admin Dashboard',
            'users_count' => count($users),
            'products_count' => count($products)
        ];

        // Affiche la vue avec les données
        $this->view('admin/index', $data);
    }

    // Page de gestion des utilisateurs
    public function users() {
        $this->requireAdmin(); // Vérifie que l'utilisateur est admin

        // Récupère tous les utilisateurs
        $users = $this->userModel->getAllUsers();

        // Données à passer à la vue
        $data = [
            'title' => 'Manage Users',
            'users' => $users
        ];

        $this->view('admin/users', $data);
    }

    // Page de gestion des produits
    public function products() {
        $this->requireAdmin();

        // Récupère tous les produits
        $products = $this->productModel->getAllProducts();

        $data = [
            'title' => 'Manage Products',
            'products' => $products
        ];

        $this->view('admin/products', $data);
    }

  // Formulaire d'ajout de produit
public function addProduct() {
    $this->requireAdmin(); // Autorisation admin

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Nettoyage et conversion des données
        $name = trim($_POST['name']);
        $description = trim($_POST['description']);
        $price = floatval($_POST['price']);

        $errors = [];
        $imagePath = null;

        // Validation des champs texte
        if (empty($name)) {
            $errors['name'] = 'Product name is required';
        }
        if (empty($description)) {
            $errors['description'] = 'Product description is required';
        }
        if ($price <= 0) {
            $errors['price'] = 'Price must be greater than zero';
        }

        // Gestion de l'image (upload)
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['image']['tmp_name'];
            $fileName = basename($_FILES['image']['name']);
            $targetDir = 'public/img/';
            $finalName = time() . '_' . $fileName;
            $targetPath = $targetDir . $finalName;

            // Crée le dossier si inexistant
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            // Déplace le fichier
            if (move_uploaded_file($tmpName, $targetPath)) {
                $imagePath = $targetPath;
            } else {
                $errors['image'] = 'Failed to upload image.';
            }
        } else {
            $errors['image'] = 'Image is required.';
        }

        // Si tout est OK
        if (empty($errors)) {
            $data = [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'image' => $imagePath
            ];

            if ($this->productModel->addProduct($data)) {
                $_SESSION['success_message'] = 'Product added successfully';
                $this->redirect('admin/products');
            } else {
                $errors['add'] = 'Failed to add product. Please try again later.';
            }
        }

        // Affiche avec erreurs
        $data = [
            'title' => 'Add Product',
            'product' => compact('name', 'description', 'price'),
            'errors' => $errors
        ];

        $this->view('admin/product_form', $data);
    } else {
        // GET = formulaire vide
        $data = [
            'title' => 'Add Product',
            'product' => ['name' => '', 'description' => '', 'price' => '', 'image' => ''],
            'errors' => []
        ];

        $this->view('admin/product_form', $data);
    }
}


// Modification d'un produit existant
public function editProduct($id) {
    $this->requireAdmin();

    // Récupère le produit
    $product = $this->productModel->getProductById($id);
    if (!$product) {
        $this->redirect('admin/products');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = trim($_POST['name']);
        $description = trim($_POST['description']);
        $price = floatval($_POST['price']);

        $errors = [];
        $imagePath = $product['image']; // Garde l'image actuelle si rien n'est uploadé

        // Validations
        if (empty($name)) {
            $errors['name'] = 'Product name is required';
        }
        if (empty($description)) {
            $errors['description'] = 'Product description is required';
        }
        if ($price <= 0) {
            $errors['price'] = 'Price must be greater than zero';
        }

        // Gestion de l'upload image si nouveau fichier fourni
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['image']['tmp_name'];
            $fileName = basename($_FILES['image']['name']);
            $targetDir = 'public/img/';
            $finalName = time() . '_' . $fileName;
            $targetPath = $targetDir . $finalName;

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }

            if (move_uploaded_file($tmpName, $targetPath)) {
                $imagePath = $targetPath;
            } else {
                $errors['image'] = 'Failed to upload image.';
            }
        }

        if (empty($errors)) {
            $data = [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'image' => $imagePath
            ];

            if ($this->productModel->updateProduct($id, $data)) {
                $_SESSION['success_message'] = 'Product updated successfully';
                $this->redirect('admin/products');
            } else {
                $errors['update'] = 'Failed to update product.';
            }
        }

        $data = [
            'title' => 'Edit Product',
            'product' => [
                'id' => $id,
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'image' => $imagePath
            ],
            'errors' => $errors
        ];

        $this->view('admin/product_form', $data);
    } else {
        // Affiche formulaire pré-rempli
        $data = [
            'title' => 'Edit Product',
            'product' => $product,
            'errors' => []
        ];

        $this->view('admin/product_form', $data);
    }
}



    // Suppression d’un produit
    public function deleteProduct($id) {
        $this->requireAdmin();

        // Supprime via le modèle
        if ($this->productModel->deleteProduct($id)) {
            $_SESSION['success_message'] = 'Product deleted successfully';
        } else {
            $_SESSION['error_message'] = 'Failed to delete product';
        }

        // Redirige vers la liste des produits
        $this->redirect('admin/products');
    }
}
