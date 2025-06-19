<h1>c o n n e x i o n</h1>


<?php
// var_dump($_POST);
// visio de la superglobal POST
// array (size=3)
//   'prenom' => string 'mu' (length=2)
//   'nom' => string 'ehlib' (length=5)
//   'connexion' => string 's e c o n n e c t e r' (length=21)
//connexion est un button submit MAIS CREE UNELIGNE DE TAB --> qui permet de l'utiliser avec if (isset($_POST['connexion']))


if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    if (isset($_POST['connexion'])){
        if (isset($_POST["prenom"]) && isset($_POST["nom"])) {
            $_SESSION["prenom"]=$_POST["prenom"]; // attention !!! cô ajout d'une ligne ds tab multidimensionnel (avec clés et val.)
            $_SESSION["nom"]=$_POST["nom"];
            $_SESSION["connected"]=true; // on rentre manuellement la ligne connected ds tab $_SESSION // on reprend connected ds header
            
            // setcookie('cookie__prenom', $_POST["prenom"], time()+86400, "/PHP/ROUTER/pages/connexion", "", false, true); 
            createCookie("prenom", $_POST["prenom"]);
            createCookie("nom", $_POST["nom"]);
// 'cookie_name' on donne un nom /PHP/...time()+(86400*30):::date/heure+ combien de tps on garde l'info en seconde. 
// adresse ou on chope le cookie(formulaire) ::: chemin doss copié ds URL si il y a
        }
    }
    header("Location: index"); // redirection header exit
    exit();
}
// var_dump($_POST);
// var_dump($_SESSION);
// var_dump($_SERVER);

$formNom=htmlspecialchars($_POST['nom'] ?? $_COOKIE['cookie__nom'] ?? '');
$formPrenom=htmlspecialchars($_POST['prenom'] ?? $_COOKIE['cookie__prenom'] ?? '');
//   ?? ::: si var existe et n'est pas null--> (affiche)est ce qu'il y a avant les ?? 
// SINON si pas null et existe, (affiche)soit, correspond à ce qu'il y a après ?? SINON...
// ?? remplacent un if else + isset et echo

// var_dump($_COOKIE);
?>
<form action="" method="post"> <!-- on peut mettre post en minuscule -->
    <label for="">p r é n o m</label>
    <input type="text" value="<?= $formPrenom; ?>" name="prenom" >
    
    <label for="">n o m</label>
    <input type="text" value="<?= $formNom; ?>" name="nom">

    <input type="submit" name="connexion" value="s e c o n n e c t e r">
</form>