<!-- 
// <?php
// if(isset($_GET['article'])){
//     echo $_GET["article"]."<br>";
//     echo $_GET["category"]."<br>";
//     echo $_GET["prix"]."<br>";
// }else{
//     echo $_GET["hotel"]."<br>";
//     echo $_GET["location-nuit"]."<br>";
//     echo $_GET["localisation"]."<br>";
// }

// if (isset($_GET['article'])) {
//     echo "Article : " . htmlspecialchars($_GET['article']) . "<br>";
//     echo "Prix : " . htmlspecialchars($_GET['prix']) . " €<br>";
//     echo "Catégorie : " . htmlspecialchars($_GET['categorie']) . "<br>";
// }
// elseif (isset($_GET['hotel'])) {
//     echo "Hôtel : " . htmlspecialchars($_GET['hotel']) . "<br>";
//     echo "Prix par nuit : " . htmlspecialchars($_GET['location-nuit']) . " €<br>";
//     echo "Localisation : " . htmlspecialchars($_GET['localisation']) . "<br>";
// }
// else {
//     echo "Aucune information valide fournie dans l'URL.";
// }  -->
////////A VERIFIER EN DESSOUS FACUNDO GITHUB
//?> --> -->

<?php
// Vérification des données reçues

$nom = isset($_GET['nom']) ? htmlspecialchars($_GET['nom']) : 'Nom inconnu';
$prenom = isset($_GET['prenom']) ? htmlspecialchars($_GET['prenom']) : 'Nom inconnu';

var_dump($_GET);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
    <h2>Données reçues :</h2>
    <p><strong>Nom :</strong> <?= $nom ?></p>
    <p><strong>Prenom :</strong> <?= $prenom ?></p>

    <a href="page1.php">⏪ Revenir au formulaire</a>
</body>
</html>