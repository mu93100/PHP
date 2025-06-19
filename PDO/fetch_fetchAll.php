<?php
function br() {
    echo "<br>";
}
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Connexion à la base de données avec PDO
$dsn = 'mysql:host=localhost;dbname=ecole;charset=utf8';
$user = 'root';       // À adapter
$password = '';       // À adapter

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connexion établie😁🐸👻🥨";
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}

/*
|---------------------------------------------------------------
| EXEMPLE 1 : Récupérer un seul élève avec fetch() (sécurisé)
|---------------------------------------------------------------
| On utilise prepare() + execute() même sans paramètre.
*/
$sql = "SELECT * FROM eleves "; // select ds table eleves ds phpMyAdmin
$stmt = $pdo->prepare($sql);
var_dump($stmt); br();


$stmt->execute(); // Même sans paramètres, on exécute 

echo "<pre>" . "S T M T " . " ";
print_r(get_class_methods($stmt));
echo "</pre>";
echo "<pre>" . "P D O " . " ";
print_r(get_class_methods($pdo));
echo "</pre>";

// FETCH_ASSOC ::: fetch récupère les données sous forme de tab associatif
// FETCH_NUM ::: fetch récupère les données sous forme d'index
$eleve = $stmt->fetch(PDO::FETCH_ASSOC); 
echo "<pre>" . "eleve " . " ";
print_r($eleve);
echo "</pre>";
$eleve = $stmt->fetch(PDO::FETCH_ASSOC); 
echo "<pre>" . "eleve 2nd fetch " . " ";
print_r($eleve);
echo "</pre>";
$eleve = $stmt->fetch(PDO::FETCH_NUM); 
echo "<pre>" . "eleve 3eme fetch en index" . " ";
print_r($eleve);
echo "</pre>";

//récupérer ts les éléves
$sql = "SELECT * FROM eleves" ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$eleves = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>" . "eleve ALL 🥨👻🐸😁🏳️‍🌈🏴‍☠️👄🐛" . " ";
print_r($eleves);
echo "</pre>";
echo 'Liste de noms avec FOREACH nom + ordi';
foreach ($eleves as $key => $value) {
    echo " $value[nom] : ordi $value[ordinateur_numero] ";
    br();
};
echo " 🎈🎈🎈🎈🎈 $eleves[3][nom] . $eleves[3][ordinateur_numero] ";

// récuperer 1 éléve par index (ID)
$sql = "SELECT * FROM eleves WHERE id=5";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 

$eleve = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<pre>" . "eleve id/index 5" . " ";
print_r($eleve);
echo "</pre>";

// trier par ordre alphabétique avec requete SQL
$sql = "SELECT * FROM eleves ORDER BY nom ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 

$eleves = $stmt-> fetchAll(PDO::FETCH_ASSOC);
echo "<pre>" . "eleves ordre ASC" . " ";
print_r($eleves);
echo "</pre>";

//avec Fo PHP
$sql = "SELECT * FROM eleves";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 

$listeElevesAll = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>" . "listeElevesAll  " . " ";
print_r($listeElevesAll);
echo "</pre>";

$listeAvecNoms = array_column($listeElevesAll, "nom" );
echo "<pre>" . "listeAvecNoms  " . " ";
print_r($listeAvecNoms);
echo "</pre>";

foreach ($listeAvecNoms as $nom) {
    echo $nom;
    br();
}
// FAFA
// SELECT colonne1, colonne2, colonne3
// FROM table
// ORDER BY colonne1 DESC, colonne2 ASC

// echo "<h3>Un seul élève (avec fetch)</h3>";
// echo "ID: {$eleve['id']} - Nom: {$eleve['nom']} - PC: {$eleve['ordinateur_numero']}<br>";


// echo "<h3>Liste des élèves avec fetch()</h3>";
// $sql = "SELECT * FROM eleves";
// var_dump($sql);
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// // dans $tmt il y a une liste invisible des eleves
// // quand on fait un fetch on recupère la premiere ligne de ce resultat
// // avec un deuxieme feth() on recupère la deuxiemme ligne du resultat :
// // exemple :
// var_dump($stmt);
// $ligne1 = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($ligne1); // 🔹 Tu vois la première ligne

// $ligne2 = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($ligne2); // 🔹 Deuxième ligne

// $ligne3 = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($ligne3); // 🔹 Troisième ligne
// $elevess = $stmt->fetch(PDO::FETCH_ASSOC);

// // de cette maniere avec la boucle while on recupère 1 par 1 les eleves

// while ($eleves = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo "ID: {$eleve['id']} - Nom: {$eleve['nom']} - PC: {$eleve['ordinateur_numero']}<br>";
// }

// /*
// |---------------------------------------------------------------
// | EXEMPLE 2 : Récupérer tous les élèves avec fetchAll()
// |---------------------------------------------------------------
// */

// $sqlAll = "SELECT * FROM eleves";
// $stmtAll = $pdo->prepare($sqlAll);
// $stmtAll->execute();

// $eleves = $stmtAll->fetchAll(PDO::FETCH_ASSOC);
// // ici nous avons recuperer tout les éléves d'un coup

// echo "<h3>Liste complète des élèves avec  fetchAll</h3>";
// var_dump($eleves);
// foreach ($eleves as $e) {
//     echo "ID: {$e['id']} - Nom: {$e['nom']} - PC: {$e['ordinateur_numero']}<br>";
// }
// /*
// |---------------------------------------------------------------
// | EXEMPLE 3 : Trier par nom (ordre alphabétique)
// |---------------------------------------------------------------
// */

// $listeNoms = array_column($eleves, 'nom');
// sort($listeNoms);

// echo "<h3>Noms triés alphabétiquement</h3>";
// foreach ($listeNoms as $nom) {
//     echo $nom . "<br>";
// }

// /*
// |---------------------------------------------------------------
// | EXEMPLE 4 : Filtrer les élèves avec un 'a' dans le nom
// |---------------------------------------------------------------
// */

// $avecA = array_filter($eleves, function($eleve) {
//     return stripos($eleve['nom'], 'a') !== false;
// });

// echo "<h3>Élèves contenant la lettre 'a'</h3>";
// foreach ($avecA as $e) {
//     echo "{$e['nom']} (PC: {$e['ordinateur_numero']})<br>";
// }

// /*
// |---------------------------------------------------------------
// | EXEMPLE 5 : Compter les élèves
// |---------------------------------------------------------------
// */ 
// echo "<h3>Nombre total d'élèves : " . count($eleves) . "</h3>";

// /*
// |---------------------------------------------------------------
// | EXEMPLE 6 : Trier par numéro de PC
// |---------------------------------------------------------------
// */

// usort($eleves, function($a, $b) {
//     return $a['ordinateur_numero'] <=> $b['ordinateur_numero'];
// });

// echo "<h3>Élèves triés par numéro de PC</h3>";
// foreach ($eleves as $e) {
//     echo "{$e['nom']} - PC #{$e['ordinateur_numero']}<br>";
// }

// /*
// |---------------------------------------------------------------
// | EXEMPLE 7 : Supprimer un élève par ID (ex: supprimer l’élève avec ID 12)
// |---------------------------------------------------------------
// | - On utilise exec() pour les requêtes qui ne retournent pas de données (INSERT, DELETE, UPDATE).
// | - Ici on montre aussi prepare() + execute() pour sécuriser contre les injections.
// */
// // ID de l’élève à supprimer (exemple : Adam avec ID 12)
// $idASupprimer = 12;

// // Préparation sécurisée
// $stmt = $pdo->prepare("DELETE FROM eleves WHERE id = :id");
// $stmt->bindParam(':id', $idASupprimer, PDO::PARAM_INT);

// // Exécution
// $stmt->execute();

// if ($stmt->rowCount() > 0) {
//     echo "<h3>Élève avec ID $idASupprimer supprimé avec succès.</h3>";
// } else {
//     echo "<h3>Aucun élève trouvé avec ID $idASupprimer.</h3>";
// }

// /*
// |---------------------------------------------------------------
// | EXEMPLE 8 : Exemple de formulaire de connexion avec verification du user existe dans la base de donnée
// |---------------------------------------------------------------
// | - On utilise exec() pour les requêtes qui ne retournent pas de données (INSERT, DELETE, UPDATE).
// | - Ici on montre aussi prepare() + execute() pour sécuriser contre les injections.
// */

// //  Vérifie si le formulaire a été soumis
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom_utilisateur'])) {

//     // 🔍Nettoie la saisie
//     $nomSaisi = trim($_POST['nom_utilisateur']);

//     //  Préparation de la requête SQL
//     $stmt = $pdo->prepare("SELECT * FROM eleves WHERE nom = :nom");

//     $stmt->execute([
//         ":nom"=> $nomSaisi,
//     ]);

//     //  Récupère un utilisateur si trouvé
//     $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

//     //  Affiche un message en fonction du résultat
//     if ($utilisateur) {
//         echo "<h3>Bienvenue {$utilisateur['nom']} !  Connexion réussie.</h3>";
//     } else {
//         echo "<h3> Utilisateur non trouvé. Veuillez réessayer.</h3>";
//     }
// }
 ?>

<!-- // <h2>Connexion utilisateur</h2>

// <form method="POST">
//     <label for="nom_utilisateur">Nom :</label>
//     <input type="text" name="nom_utilisateur" required>
//     <button type="submit">Se connecter</button>
// </form>

// fetch() Récupère une ligne (utilisable dans une boucle)
// fetchAll()  Récupère toutes les lignes
// array_column()  Extrait une seule colonne d’un tableau
// sort()  Trie un tableau simple
// array_filter()  Filtre les éléments avec une condition
// stripos()   Recherche insensible à la casse
// count() Compte les éléments
// usort() Trie un tableau multidimensionnel -->
