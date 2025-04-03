<?php
session_start(); 

var_dump($_POST);
var_dump($_SESSION);

if (isset($_POST['logout'])) {
    session_unset();   // supprime les variables de session
    session_destroy(); //  détruit la session
    header("Location: connexion.php");
}
?>
<h1 style="color:blue">d é c o n n e x i o n</h1>
