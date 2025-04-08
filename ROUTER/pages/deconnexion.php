<?php
    session_unset(); // supprime toutes les variables de session
    session_destroy(); // destroy session
    header("location: index"); // on met index.php SANS htaccess
    exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection

?>
