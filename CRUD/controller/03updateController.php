<?php

if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['modifier'])) {
    $id = (int) $_POST['id']; // (int) pour INT nb entier
    $nouveauNom = trim($_POST['nom']);

    // Requête SQL préparée pour modifier le nom
    $stmt = $pdo->prepare("UPDATE eleves SET nom = :nom WHERE id = :id");
    $stmt->execute([
        ':nom' => $nouveauNom,
        ':id' => $id
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ Élève ID $id mis à jour avec succès ! Nouveau nom : $nouveauNom</p>";
    } else {
        echo "<p style='color: red;'>❌ Aucun changement effectué.</p>";
    }
//Fo rowCount() renvoie le nb de lignes affectées par une instruction DELETE, INSERT ou UPDATE 
// print "Renvoie le nombre de lignes qui ont été supprimées :\n"; $count = $del->rowCount(); print "$count lignes supprimées.
}


include_once "view/03update.php";
?>


<!-- // UPDATE - Mise à jour du nom d'un élève
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {
    $id = (int) $_POST['id'];
    $nouveauNom = trim($_POST['nom']);

    // Requête SQL préparée pour modifier le nom
    $stmt = $pdo->prepare("UPDATE eleves SET nom = :nom WHERE id = :id");
    $stmt->execute([
        ':nom' => $nouveauNom,
        ':id' => $id
    ]);

    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>✅ Élève ID $id mis à jour avec succès ! Nouveau nom : $nouveauNom</p>";
    } else {
        echo "<p style='color: red;'>❌ Aucun changement effectué.</p>";
    }
} -->