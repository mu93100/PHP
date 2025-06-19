<!-- //-- Création de la base

CREATE DATABASE IF NOT EXISTS boulangerie_simple;
USE boulangerie_simple;
-- Table des catégories (ex: Pain, Viennoiserie...)
CREATE TABLE IF NOT EXISTS categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

-- Table des produits (catégorie non liée par clé étrangère, juste un champ texte)
CREATE TABLE IF NOT EXISTS produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(5,2) NOT NULL,
    categorie VARCHAR(100) NOT NULL
);
-- Table des utilisateurs
CREATE TABLE IF NOT EXISTS utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    est_admin TINYINT(1) NOT NULL DEFAULT 0
);

-- Données de test - catégories
INSERT INTO categorie (nom) VALUES
('Pain'),
('Viennoiserie'),
('Pâtisserie');
-- Données de test - produits (catégorie en texte)
INSERT INTO produit (nom, prix, categorie) VALUES
('Baguette', 1.00, 'Pain'),
('Croissant', 1.20, 'Viennoiserie'),
('Pain au chocolat', 1.30, 'Viennoiserie'),
('Éclair au chocolat', 2.50, 'Pâtisserie');

-- Données de test - utilisateurs
INSERT INTO utilisateur (nom, prenom, mot_de_passe, est_admin) VALUES
('Durand', 'Marie', 'azerty', 0),
('Martin', 'Paul', 'admin123', 1); -->

<!-- afficher tous les produits dans de jolies card prix /nom du produit/ catégorie.... 
et plus bas écrire marie durant est fan de pain au chocolat ( marie durant a été recuperé de la base de donné et pain au chocolat aussi -->


<?php
function br() {
    echo "<br>";
}
$dsn = 'mysql:host=localhost;dbname=boulangerie_simple;charset=utf8';
$user = 'root';    
$password = '';      

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion établie😁🐸👻🥨";
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}


$sql = "SELECT * FROM produit "; 
$stmt = $pdo->prepare($sql);
var_dump($stmt); br();


$stmt->execute(); // Même sans paramètres, on exécute 



// FETCH_ASSOC ::: fetch récupère les données sous forme de tab associatif
// FETCH_NUM ::: fetch récupère les données sous forme d'index
$listeProduit = $stmt->fetchAll(PDO::FETCH_ASSOC); 
echo "<pre> listeProduit ";
print_r($listeProduit);
echo "</pre>";

foreach ($listeProduit as $key => $value) {
    echo "<div >$value[nom],  $value[categorie], $value[prix]
            </div>";
    br();
}

// écrire marie durant est fan de pain au chocolat ( marie durant a été recuperé de la base de donné et pain au chocolat aussi -->
$sql = "SELECT * FROM utilisateur WHERE nom='Durand'";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 

$marieAime = $stmt->fetch(PDO::FETCH_ASSOC);
echo  $marieAime['prenom'] . "  " .$marieAime['nom'] . "  A I M E   " . $listeProduit[2]['nom'];
// <!-- afficher tous les produits dans de jolies card  nom du produit/ catégorie/ prix

echo '<img src="https://images.ricardocuisine.com/services/recipes/496x670_croissant1.jpg" alt="">';

$sql = "SELECT * FROM categorie";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$cat = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre> categories ";
print_r($cat);
echo "</pre>";
?>
<style>
    .navnav{width: 80%; display: flex; justify-content: space-around; list-style-type:none; border:1px dotted blue}
</style>
<?php
foreach ($cat as $catName ) {
    echo "<nav class='navnav'><li><a style='text-decoration:none;' href='by_categorie.php?categorie_get=' . $catName[nom] . '>" . $catName['nom'] . "</a></li></nav>";
}
var_dump($_GET);
$categorie_get=$_GET['categorie_get'];
$sql = "SELECT * FROM categorie";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$cat = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

