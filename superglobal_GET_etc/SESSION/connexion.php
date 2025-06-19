<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['story'] = $_POST['story'] ?? '';

    // Redirection vers la page d'accueil
    header("Location: accueil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>> c o n n e x i o n EXOSESSION</h1>
    <form method="post" action="">
        <input type="text"  name="prenom" placeholder="P R E N O M" required><br>
        <input type="text"  name="nom" placeholder="N O M" required><br>
        <input type="email" name="email" placeholder="E M A I L" required><br>
        <textarea name="story" rows="5" cols="33" placeholder="> racontes-toi"></textarea><br>
        <input type="submit" value="V A L I D E R">
    </form>
</body>
</html>
