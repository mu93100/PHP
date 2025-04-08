<?php
function createCookie($cle, $val){
    setcookie("cookie__$cle", $val, time()+86400, "\PHP\ROUTER"); 
    // adresse du chemin du dossier ROUTER  depuis la racine C:\wamp64\www\PHP\ROUTER
}
?>

<!-- setcookie : cookie entre serveur et user -->