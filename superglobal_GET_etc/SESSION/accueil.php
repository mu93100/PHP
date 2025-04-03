<h1 style="color:tomato">a c c u e i l</h1>

<?php
session_start();  // OBLIGATORY pour signifier que l'on est dans la SESSION
var_dump($_SESSION);


// <!--action="deconnexion.php" === renvoyer sur fichier deconnexion.php les infos qu'on récolte avec POST-->


    if(isset($_SESSION['prenom']) && isset($_SESSION['nom'])){
        echo "H E L L O  " . $_SESSION['prenom'];
        echo '<form action="deconnexion.php" method="post"><button type="submit" name="logout">d é c o n n e x i o n</button></form>';
        header("Location: deconnexion.php");
        exit(); // TJRS appeler exit après une redirection
    } else {
        echo '<button type="submit" name="login">c o n n e x i o n</button>';
    }
?>
<!-- <form action="connexion.php" method="post"><button type="submit" name="login">c o n n e x i o n</button></form>'; -->


