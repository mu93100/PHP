<?php
session_start(); 

var_dump($_POST);
var_dump($_SESSION);

if (isset($_POST['logout'])) {   // logout --> c'est nous qu'on appelle log out
    session_unset();   // supprime les variables de session
    session_destroy(); //  détruit la session
    header("Location: accueil.php");
}
// ?>
<!-- // <h1 style="color:blue">d é c o n n e x i o nEXOSESSION</h1> -->
