<?php
/**
* SUPERGLOBALES PHP : Définitions détaillées
*
* ➤ $_GET :
*   Permet de récupérer les données envoyées par l'URL (ex : page.php?nom=Jean).
*   Les données sont visibles dans l’URL, donc non confidentielles.
*   Utilisé pour les recherches, les liens rapides, ou les filtres.
*
* ➤ $_POST :
*   Permet de récupérer les données envoyées par un formulaire avec method="POST".
*   Les données ne sont pas visibles dans l’URL. Convient pour les données sensibles (ex : mot de passe).
*   Utilisé pour créer, modifier ou supprimer des données.
*
* ➤ $_SESSION :
*   Sert à stocker des données côté serveur pour un utilisateur donné.
*   Les données restent disponibles d’une page à l’autre tant que la session n’est pas détruite ou expirée.
*   Idéal pour conserver un panier, un état de connexion, ou un compteur de visites.
*   Nécessite un appel à session_start() au début du script.
*
* ➤ $_COOKIE :
*   Stocke des informations côté client (navigateur) sous forme de petits fichiers.
*   Utile pour garder des préférences (ex : pseudo, thème, dernier produit consulté).
*   Peut être défini avec setcookie(nom, valeur, expiration).
*   Attention : le cookie n’est disponible qu’à partir du prochain chargement de page.
*
* ➤ Toutes ces variables sont dites "superglobales" car elles sont disponibles dans tous les contextes PHP automatiquement.
*/
/**
* Exercices sur les superglobales PHP
*
* Les superglobales $_GET, $_POST, $_SESSION et $_COOKIE permettent de manipuler
* des données envoyées depuis des formulaires ou stockées côté client/serveur.
*
* Objectif : 20 exercices pratiques.
*
* ➤ 10 exercices avec $_GET et $_POST
* ➤ 10 exercices avec $_SESSION et $_COOKIE
*/
// -------------------------------------------
// EXERCICES 1 à 10 — $_GET et $_POST
// -------------------------------------------

/**
* 5. Créer un formulaire GET avec une liste <select> de couleurs. Afficher un texte dans la couleur choisie.
* 6. Créer un formulaire POST avec une liste déroulante <select> contenant des pays (ex : France, Italie, Japon...).
*    Une fois soumis, afficher un message du style "Vous avez choisi : [pays]".
*    Utilisez <form method="post"> avec une balise <select name="pays"> et des <option>.
* 7. Créer un formulaire POST avec plusieurs cases à cocher <input type="checkbox" name="fruits[]"> pour sélectionner des fruits (ex : pomme, banane, raisin).
*    Afficher ensuite les fruits sélectionnés avec implode(', ', $_POST['fruits']). Cette fonction transforme un tableau en chaîne séparée par des virgules.
* 8. Créer un formulaire simple (un champ <input>) avec méthode GET ou POST, puis afficher la méthode utilisée avec $_SERVER['REQUEST_METHOD'].
*    Cela permet de savoir si l'utilisateur a utilisé un envoi GET ou POST.
* 9. Formulaire POST avec boutons radio <input type="radio"> (homme/femme/autre). Afficher le choix sélectionné.
* 10. Créer un formulaire GET avec plusieurs champs (nom, email, âge) puis afficher toutes les données
*     reçues sous forme de tableau (utiliser print_r($_GET)). Ce formulaire permet de tester la récupération multiple.
*/
 
// -------------------------------------------
// EXERCICES 11 à 20 — $_SESSION et $_COOKIE
// -------------------------------------------
 
/**
* 11. Créer un formulaire POST qui enregistre un nom dans une session.
* 12. Afficher le nom stocké en session s’il existe.
* 13. Ajouter un bouton pour détruire la session.
* 14. Créer un formulaire qui stocke un pseudo dans un cookie pendant 1 heure.
* 15. Afficher le pseudo stocké dans le cookie.
* 16. Ajouter un lien pour supprimer le cookie.
* 17. Créer un compteur de visites avec $_SESSION.
*     Étapes :
*     - Démarrer la session avec session_start();
*     - Vérifier si $_SESSION['visites'] existe avec isset()
*     - Si non, initialiser la variable à 0 : $_SESSION['visites'] = 0;
*     - Ensuite, incrémenter à chaque chargement de page : $_SESSION['visites']++;
*     - Afficher le nombre de visites avec echo
*     => Ce compteur sera conservé tant que l'utilisateur garde la session active (ou jusqu'à fermeture du navigateur).
* 18. Enregistrer le dernier produit consulté dans un cookie via un lien (GET).
* 19. Simuler un panier d'achat en stockant les articles dans une session.
*     Étapes :
*     - Créez plusieurs liens (GET) ou boutons (POST) pour ajouter un article au panier (ex : ?add=banane).
*     - Vérifiez avec isset($_GET['add']) si un produit est demandé.
*     - Si oui, ajoutez-le à $_SESSION['panier'][] via un tableau.
*     - Affichez la liste des produits du panier avec un foreach ou implode().
*     => Le panier est conservé tant que la session est active (utilisateur connecté).
*     Bonus : ajoutez un bouton pour vider le panier (unset($_SESSION['panier'])).
* 20.  Créer un mini système de connexion avec login/password et session.
*/
 
// À vous de coder chaque exercice dans un fichier dédié ou dans un seul fichier avec des conditions !
function br() {
    echo "<br>";
}
?>
* 1. Créer un formulaire qui demande le prénom en GET et l'affiche avec un message de bienvenue.
<form action="" method="get">
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="prenom" placeholder="prenom">
    <input type="submit" name="submit" placeholder="submit">
</form>
<?php
if (isset($_GET["nom"]) && isset($_GET["prenom"]) ) {
    echo "hello " . $_GET ["prenom"] . $_GET["nom"];
}
br();
br();
?>
* 2. Créer un formulaire avec méthode POST demandant nom et prénom, puis les afficher.
form
<form action="" method="post">
    <input type="text" name="nom" placeholder="nom">
    <input type="text" name="prenom" placeholder="prenom">
    <input type="submit" name="submit1">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['submit1'] = $_POST['submit1']; //// CA NE MARCHE PAS // Warning: Undefined array key "submit1" in C:\wamp64\www\PHP\superglobal_GET_etc\exos18avril\exos18avril.php on line 121
    echo "wilkomen ".$_POST['prenom'] . $_POST['nom'];
}
br();
br();
?>
* 3. Créer un formulaire qui demande un email et vérifier s’il est vide (POST).
<form action="" method="post">
    <input type="email" name="email" placeholder="email" required>
    <input type="submit" name="submit2" placeholder="submit">

</form>
<?php
if (isset($_POST["email"]) && !empty($_POST["email"])) {
    echo "👻👻👻👻" . $_POST["email"];
}else {
    echo "pas bon";
}
br();
br();
?>
* 4. Créer un formulaire GET avec deux champs <input type="number">. Afficher la somme des deux après soumission.
*    Utiliser la fonction intval() pour convertir les valeurs string en int. Exemple : intval($_GET['nombre1']).
<form action="" method="get">
    <input type="number" name="A" placeholder="nb A">
    <input type="number" name="B" placeholder="nb B">
    <input type="submit" name="submit3"">
</form>
<?php
if (isset($_GET["A"]) && isset($_GET["B"])) {
    echo $_GET["A"] . "+" . $_GET["B"] . "= " . $_GET["A"]+$_GET["B"];
}
br();
br();
?>
<form action="" method="get">
    <input type="text" name="A" placeholder="nb A">
    <input type="text" name="B" placeholder="nb B">
    <input type="submit" name="submit3"">
</form>
<?php
if (isset($_GET["A"]) && isset($_GET["B"])) {
    echo $_GET["A"] . "+" . $_GET["B"] . "= " . $_GET["A"]+$_GET["B"];
}
br();
br();

?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.classless.min.css">
</head>
<body>
    
    <form method="get" action="">
        <label for="nombre1">Nombre 1 :</label>
        <input type="number" id="nombre1" name="nombre1" required><br><br>
        <label for="nombre2">Nombre 2 :</label>
        <input type="number" id="nombre2" name="nombre2" required><br><br>
        <button type="submit">Calculer la somme</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
        $nombre1 = intval($_GET['nombre1']);
        $nombre2 = intval($_GET['nombre2']);
        $somme = $nombre1 + $nombre2;
        echo "<h2>La somme de $nombre1 et $nombre2 est : $somme</h2>";
    } else {
        echo "<h2>Veuillez entrer deux nombres.</h2>"; 
    }
    ?>
</body>
</html>
 
* 5. Créer un formulaire GET avec une liste <select> de couleurs. Afficher un texte dans la couleur choisie.
<form action="" method="get"> LES TYPES D'INPUT
    <input type="color" name="" placeholder="input color">
    <input type="file" name="" placeholder="input file">
    <input type="number" name="" placeholder="input number">
    <input type="range" name="" placeholder="input range">
    <input type="button" value="moi le btn">
    <input type="datetime" name="" placeholder="input datetime">
    <input type="date" name="" id="" placeholder="input date">
    <input type="email" name="" placeholder="input email">
    <input type="hidden" name="" placeholder="input hidden">
    <input type="image" src="" alt="" placeholder="input image">
    <input type="month" name="" placeholder="input month">
    <input type="password" name="" placeholder="input password">
    <br>
    <label for="" value="input radio">input radio</label>
    <input type="radio" name="" placeholder="input radio">
    <br>
    <input type="reset" value="input_reset" placeholder="input reset">
    <input type="search" name="" placeholder="input search">
    <input type="tel" name="" placeholder="input tel">
    <input type="time" name="" placeholder="input time">
    <input type="url" name="" placeholder="input url">
    <input type="week" name="" placeholder="input week">
</form>
<br>
<br>
<form action="" method="get">
    <select name="couleur" id="">
        <option value="">*  choisit ta couleur  *   </option>
        <option value="bleu">bleu</option>
        <option value="emeraude">emeraude</option>
        <option value="aqua">aqua</option>
        <option value="vert_fluo">vert fluo</option>
        <option value="cochon">rose cochon</option>
    </select>
    <input type="submit" name="choix_couleur" value="ok">
</form> -->

<?php
echo "<pre>";
print_r($_GET["choix_couleur"]);
echo "</pre>";
echo "<pre>";
print_r($_GET);
echo "</pre>";
if (isset($_GET["choix_couleur"]) && isset($_GET["couleur"])) {
    $coul= $_GET["couleur"];
    switch ($coul) {
        case 'aqua':
            echo '<div style="width: 2rem; height: 2rem; background-color: aquamarine "></div>';
            break;
        case 'bleu':
            echo '<div style="width: 2rem; height: 2rem; background-color: blue "></div>';
            break;
        case 'emeraude':
            echo '<div style="width: 2rem; height: 2rem; background-color:rgb(2, 131, 105) "></div>' ;
            break;
        case 'vert_fluo':
            echo '<div style="width: 2rem; height: 2rem; background-color:chartreuse "></div>' ;
            break;
        case 'cochon':
            echo '<div style="width: 2rem; height: 2rem; background-color: #f7a9af "></div>' ;
            break;  
    };
}
br();
br();
echo "<!-- Formulaire NAJIBA COLOR -->";
    // Définir une fonction pour obtenir la couleur associée
    function obtenirCouleur($choix) {
        $couleurs = [
            "rouge" => "red",
            "vert" => "green",
            "noir" => "black"
        ];

    // Retourner la couleur correspondante ou une couleur par défaut
        return isset($couleurs[$choix]) ? $couleurs[$choix] : "gray";
    }
    // Vérifier si un choix a été soumis
    $choix = isset($_GET['choix']) ? $_GET['choix'] : null;
    $couleurAppliquee = $choix ? obtenirCouleur($choix) : "black";
?>
    <!-- Formulaire NAJIBA COLOR -->
    <form method="GET" action="">
        <select name="choix" id="choix">
            <option value="">NAJIBA COLOR</option>
            <option value="rouge">Rouge</option>
            <option value="vert">Vert</option>
            <option value="noir">Noir</option>
        </select>
        <br>
        <input type="submit" value="Soumettre">
    </form>
    <!-- Zone de texte colorée -->
    <div style="margin-top: 20px; font-size: 18px; font-weight: bold; color: <?php echo htmlspecialchars($couleurAppliquee); ?>;">
        <?php echo htmlspecialchars($choix ? $choix : "aucun choix"); ?>
    </div>

<div style="width: 100%"> -->

<!-- * 6. Créer un formulaire POST avec une liste déroulante <select> contenant des pays (ex : France, Italie, Japon...).
*    Une fois soumis, afficher un message du style "Vous avez choisi : [pays]". -->
<!-- *    Utilisez <form method="post"> avec une balise <select name="pays"> et des <option>. -->
<form action="" method="post">
    <select name="pays" id="">
        <option value="">*  choisit ton pays  *</option>

        <option value="France">France</option>
        <option value="Italie">Italie</option>
        <option value="Japon">Japon</option>
        <option value="Madere">Madère</option>
    </select>

    <input type="submit" name="choix_pays" value="ok">
</form>

<?php

echo "🏁";
print_r($_POST["pays"]);
br();
echo "🏁";
print_r($_POST["choix_pays"]);
echo "nnnnn" . $_POST['pays'];
br();
echo "🏁";
echo "</pre>";
print_r($_POST);
echo "<pre>";
$drapeau = ['France' => '🏴', 'Italie' => '🏳️', 'Japon' =>'🚩', 'Madere' =>'🏁'];
print_r($drapeau);    
if (isset($_POST['choix_pays'])) { 
    if (array_key_exists($_POST['pays'], $drapeau)) {
        echo $_POST['pays'] . $drapeau[$_POST['pays']];
    }
}

br();
br();
?>
* 7. Créer un formulaire POST avec plusieurs cases à cocher <input type="checkbox" name="fruits[]"> 
pour sélectionner des fruits (ex : pomme, banane, raisin).
*    Afficher ensuite les fruits sélectionnés avec implode(', ', $_POST['fruits']). 
Cette fonction transforme un tableau en chaîne séparée par des virgules.
<form action="" method="post" name="BB">
    <label for="">"pomme"</label>
    <input type="checkbox"  name="fruits[]" value="pomme" > 
    <label for="">figue</label>
    <input type="checkbox" name="fruits[]" value="figue" "> 
    <label for="">framboise"</label>
    <input type="checkbox" name="fruits[]" value="framboise" > 
    <label for="">cerise"</label>
    <input type="checkbox" name="fruits[]" value="cerise""> 
    <label for="">melon"</label>
    <input type="checkbox" name="fruits[]" value="melon"> 
    <label for="">citre"</label>
    <input type="checkbox" name="fruits[]" value="citre" > 

    <input type="submit" name="panier" value="courses__fruits">
</form>

<?php
print_r($_POST["panier"]);
br();
echo"🏁";print_r($_POST);
br();
echo "🐸" . implode(', ', $_POST['fruits']);
br();
?>
* 8. Créer un formulaire simple (un champ <input>) avec méthode GET ou POST, puis afficher la méthode utilisée avec $_SERVER['REQUEST_METHOD'].
*    Cela permet de savoir si l'utilisateur a utilisé un envoi GET ou POST.

<?php
br();
echo "EXO 8. method : ";
print_r($_SERVER['REQUEST_METHOD']);
br();

br();
br();
?>

* 9. Formulaire POST avec boutons radio <input type="radio"> (homme/femme/autre). Afficher le choix sélectionné.
<form action="" method="post">
    <input type="radio" name="h" id="">
    <input type="radio" name="f" id="">
    <input type="radio" name="autre" id="">

    inpu
</form>
<?php


br();
br();
?>
* 10. Créer un formulaire GET avec plusieurs champs (nom, email, âge) puis afficher toutes les données
*     reçues sous forme de tableau (utiliser print_r($_GET)). Ce formulaire permet de tester la récupération multiple.


<?php


br();
br();
?>


<?php


br();
br();
?>
</div>