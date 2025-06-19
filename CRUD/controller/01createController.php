<?php
include_once "view/01create.php";

// CREATE : ajouter 1 élève

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajouter'])) {
    $nom = trim($_POST['nom']);              //trim() Fo qui enlève les espaces
    $pc = trim($_POST['ordinateur_numero']);

    $stmt = $pdo->prepare("INSERT INTO eleves (nom, ordinateur_numero) VALUES (:nom, :ordinateur_numero)");
    $stmt -> execute([
        ':nom' => $nom,
        ':ordinateur_numero' => $pc
    ]);
    echo "<p style='color:green;'>✅ Élève ajouté avec succès !</p>";

    header("Refresh: 2; url=" . $_SERVER['PHP_SELF']);
    exit;
}

//     (((autre syntaxe :::
//     ((($stmt = $pdo->prepare("INSERT INTO eleves (nom, ordinateur_numero) VALUES (?, ?)");
//     ((($stmt->execute([$nom, $pc]);

?>






