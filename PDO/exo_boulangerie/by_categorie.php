<H1>B Y    C A T E G O R I E</H1>


<?php

$dsn = "mysql:host=localhost;dbname=boulangerie_simple"; // Remplacer 'societe' par le nom réel de votre base
$user = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe de l'utilisateur MySQL

try {
    
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
    echo "Connexion réussie";
} catch (PDOException $exception) {
    // Affichage de l'erreur si la connexion échoue
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
    exit;
}

var_dump($_GET);

if (!isset($_GET['category'])) {
    die("aucune catégorie n'a été trouvée");
}

$categorie_get=$_GET['categorie_get'];
$sql = "SELECT * FROM produit WHERE categorie = :categorie_get";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':categorie_get' => $categorie_get
]);

$produits = $stmt->fetchAll();
echo "<pre>";
print_r($produits);
echo "</pre>";
?>

<section>

    <?php foreach ($produits as $produit) : ?>
        <div>
            <h3><?= $produit['nom'] ?></h3>
            <p><?= $produit['prix'] ?> €</p>
            <p><?= "Categorie : ".  $produit['categorie'] ?></p>
        </div>
    <?php endforeach; ?>
</section>
