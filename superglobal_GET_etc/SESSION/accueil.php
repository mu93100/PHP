<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>
    <h1 style="color:tomato">a c c u e i l EXOSESSION</h1>

    <?php
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        echo "<p>HELLO " . htmlspecialchars($_SESSION['prenom']) . " 👋</p>";
        // echo "<p>Nom : " . htmlspecialchars($_SESSION['nom']) . "</p>";
        // echo "<p>Email : " . htmlspecialchars($_SESSION['email']) . "</p>";
        // echo "<p>Histoire : " . nl2br(htmlspecialchars($_SESSION['story'])) . "</p>";

        echo '<form action="deconnexion.php" method="post">
            <button type="submit" name="logout">D É C O N N E X I O N</button>
        </form>';
    } else {
        echo "<p>Tu n'es pas connecté. Retour à la connexion :</p>";
        echo '<form action="connexion.php" method="get">
            <button type="submit">C O N N E X I O N</button>
        </form>';
    }
    ?>
</body>
</html>
