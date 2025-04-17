<?php
// READ - Récupération de tous les élèves avec fetchAll
$sqlAll = "SELECT * FROM eleves";
$stmtAll = $pdo->prepare($sqlAll);
$stmtAll->execute();
$eleves = $stmtAll->fetchAll(PDO::FETCH_ASSOC); 
// On récupère les résultats sous forme de tableau associatif ([clé] => valeur)
// OU on écrit $eleves = $stmtAll->fetchAll() QD on a mis ds bdd (try catch)
// PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

include_once "view/02read.php";  // include once à mettre en bas pour que  
// le html prenne en compte les var définies dans php controller


?>