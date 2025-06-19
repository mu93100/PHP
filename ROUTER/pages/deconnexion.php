<?php

    setcookie('cookie__nom', '', time() - 3600, '\PHP\ROUTER');
    setcookie('cookie__prenom', '', time() - 3600, '\PHP\ROUTER');
    setcookie('cookie__langueChoisie', '', time() - 3600, '\PHP\ROUTER');

    // pour supprimer un cookies par exemple à la deconnexion utiliser : 
//   setcookie('nom', '', time() - 3600, '/')  date de vie du cookies sera nagetive -3600 (secondes) et rajouter le lieu de stockage des cookies
// on est pas obligé de mettre  les setcookies négatifs ET les sessions unset et destroy
    session_unset(); // supprime toutes les variables de session
    session_destroy(); // destroy session
    header("location: index"); // on met index.php SANS htaccess
    exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection

?>
