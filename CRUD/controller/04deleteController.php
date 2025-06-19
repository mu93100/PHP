<?php


// DELETE - Suppression d'un élève
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["sup"], $_POST['id'])) {
    $isUserSup = (int) $_POST['id']; // On caste l'ID en entier par sécurité

    $stmt = $pdo->prepare("DELETE FROM eleves WHERE id = :id"); // ou $stmt = $pdo->prepare("DELETE FROM eleves WHERE id = ?") AVEC  $stmt->execute([$isUserSup])
    $stmt->execute([':id' => $isUserSup]);
    // "DELETE FROM eleves WHERE id = :id"  ::: tu supp la ligne avec Id=
    // On vérifie si une ligne a bien été supprimée
    if ($stmt->rowCount() > 0) { // si var  $stmt a une ligne(entrée) :: si l'execute a été exécuté
        echo "🐸🐸🐸🐸🐸🐸🐸🐸<br>" . "👻👻👻👻👻👻👻👻👻<br>" . "<p style='color:green;'>✅ Élève ID {$isUserSup} supprimé avec succès.</p>" . "🐸🐸🐸🐸🐸🐸🐸🐸<br>" . "👻👻👻👻👻👻👻👻👻<br>";
    } else {
        echo "<p style='color:red;'>❌ Aucun élève supprimé. ID inexistant ?</p>";
    }
    header("Refresh: 5; url=" . $_SERVER['PHP_SELF']);
    exit;
}
include_once "view/04delete.php";
?>
