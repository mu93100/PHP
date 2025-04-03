<?php
session_start(); /// ATTENTION A METTRE OBLIGATORY

function br() {
    echo "<br>";
    
}
// var_dump($_SERVER);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom']=  $_POST['nom'];
    $_SESSION['email']=  $_POST['email'];
    if(isset($_POST['story'])){
        $_SESSION['story']=  $_POST['story'];
        echo "story : " . $_SESSION['story'];
    }

    var_dump($_POST);
    var_dump($_SESSION);
    echo "prenom : ".$_SESSION['prenom']."<br>";
    echo "nom : ".$_SESSION['nom'];
    echo "story : " . $_SESSION['story'];
    // redirection vers page accueil
    header("Location: accueil.php");
    exit(); // TJRS appeler exit après une redirection
}
br();
// echo "identification entrée formulaire : " . $_POST["prenom"]; // valeur de le clé prenom ici c'est facundo


?>

<!-- // Démarrage de la session au début du script -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>c o n n e x i o n</h1>
<form method="post" action=""> <!--  on met ds post -->
            <label for="prenom">Prénom:</label>
            <input type="text"  name="prenom" required><br>
            
            <label for="nom">nom</label>
            <input type="text"  name="nom" required><br>

            <label for="email">email</label>
            <input type="email" name="email" required><br>

            <label for="demande">racontes-toi</label>
            <textarea name="story" rows="5" cols="33">racontes-toi</textarea><br>

            <input type="submit" value="valider">
        </form>

        <!-- <a href="./session1.php">test session</a> -->
    
</body>
</html>
