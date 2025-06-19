<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            color: #B22222; /* Rouge foncé */
            text-align: center;
        }

        p {
            color: #333;
            font-size: 16px;
            line-height: 1.6;
            margin: 20px;
            padding: 10px;
            border-left: 5px solid #B22222; /* Bordure rouge */
            background-color: #f9f9f9;
        }

        div.header-img {
            text-align: center;
            margin-top: 20px;
        }

        div.header-img img {
            max-width: 150px; /* Taille uniforme du logo */
            height: auto;
        }

        h2 {
            border-bottom: 2px solid #B22222; /* Ligne sous le titre en rouge */
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        h1 {
            background-color: #B22222; /* Arrière-plan rouge */
            color: white;
            padding: 20px;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #B22222; /* Bordure rouge */
            border-radius: 8px;
        }

        a {
            color: #B22222; /* Liens rouges */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #B22222; /* Arrière-plan rouge */
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <div class="header-img">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>
    <div class="container">
        <h1>Les Sessions</h1>
        <h2>1. Qu'est-ce qu'une session ?</h2>
        <p>Une session est un mécanisme qui permet de stocker des informations variables d'une page à l'autre pour un utilisateur précis.</p>
        <p>Lorsqu'une session est démarrée, PHP crée un fichier temporaire sur le serveur, associé à un identifiant unique (généralement stocké dans un cookie nommé 'PHPSESSID').</p>
        <p>Ce fichier contient les informations que l'on souhaite garder pendant toute la durée de la session (généralement le temps que l'utilisateur reste connecté).</p>

        <h2>2. Démarrer une session</h2>
        <p>Pour utiliser une session, la première chose à faire est de la démarrer. Pour cela, nous avons la fonction 'session_start()'. Cette fonction doit être appelée au tout début du script, avant que n'importe quel bout de code ne puisse être lû.</p>
        <p>NB : Si une session est déjà en cours, mettre 'session_start()' dans une nouvelle page ne créera pas de nouvelle session, mais réutilisera l'identifiant de la session déjà existante stockée sur le serveur.</p>

        <h2>3. Stocker les données dans une session</h2>
        <p>Les données sont stockées dans une session en utilisant la superglobale '$_SESSION', qui est comme $_POST ou $_GET, également un tableau associatif.</p>
        <?php
        // On va stocker quelques informations 
        $_SESSION['prenom'] = "Jeremy";
        $_SESSION['age'] = 32;
        $_SESSION['est_majeur'] = true;
        ?>
        <p>Les données stockées dans $_SESSION restent accessibles tant que la session reste active.</p>

        <h2>4. Récupérer les données de la session</h2>
        <p>Maintenant que nous avons stocké des informations dans notre session, nous allons les afficher sur le navigateur (cela ne fonctionnera que si 'session_start()' a été appelée).</p>
        <?php
        echo "Prénom : " . htmlspecialchars($_SESSION['prenom']) . "<br>";
        echo "Âge : " . htmlspecialchars($_SESSION['age']) . " ans";
        ?>

        <h2>5. Vérifier l'existence de données dans une session</h2>
        <p>Avant d'accéder à une donnée de session, les bonnes pratiques veulent que nous vérifions si elle existe déjà.</p>
        <?php
        if (isset($_SESSION['prenom'])) {
            echo "Mon prénom est : " . htmlspecialchars($_SESSION['prenom']) . "<br>";
        } else {
            echo "Le prénom n'est pas défini dans la session, la clé n'existe pas.";
        }

        // Vérification avec une fausse clé 
        if (isset($_SESSION['est_mineur'])) {
            echo "$_SESSION[est_mineur] existe bien <br>";
        } else {
            echo "$_SESSION[est_mineur] n'existe pas <br>";
        }
        ?>

        <h2>6. Modifier ou supprimer des données de session</h2>
        <h3>Modifier une session</h3>
        <p>Pour modifier les données d'une session, on va simplement récupérer la clé de la session qu'on souhaite modifier et lui attribuer une nouvelle valeur. Il faudra modifier chaque clé séparément si vous voulez changer toutes les données de session.</p>
        <p>Exemple : $_SESSION['prenom'] = "Antoine"</p>
        <?php
        $_SESSION['prenom'] = "Antoine";
        echo htmlspecialchars($_SESSION['prenom']);
        ?>

        <p>NB : Nous venons de réaffecter une valeur. L'ancien prénom restera inchangé dans l'affichage précédent, mais $_SESSION['prenom'] vaudra maintenant "Antoine" et non plus "Jeremy".</p>

        <h3>Supprimer une donnée de la session</h3>
        <p>Pour supprimer une seule donnée de la session, on visera encore une fois la clé du tableau associatif $_SESSION.</p>
        <p>On utilisera également la fonction unset() qui sert à détruire des variables de la manière suivante : unset($_SESSION['age']) par exemple.</p>
        <?php
        unset($_SESSION['age']);
        // On vérifie si on a accès à l'âge stocké dans la session 
        if (isset($_SESSION['age'])) {
            echo "L'âge est toujours présent";
        } else {
            echo "La clé âge a bien été supprimée";
        }
        ?>

        <h2>7. Détruire la session totalement</h2>
        <p>Pour détruire une session entière, y compris les données qu'elle conserve, on utilise la fonction 'session_destroy'.</p>
        <p>Cette commande ne prendra effet qu'à la fin du script, ce qui fait que vous devrez recharger la page pour voir si cela a bien fonctionné (cependant même si elle n'a d'effet qu'à la fin du script, les données de la session sont immédiatement rendues inaccessibles par le script).</p>
        <?php
        session_destroy();
        ?>
        <p>Testons ici : <a href="deconnexion.php">Vidage de session</a></p>
        <p>NB : Notons que session_destroy() ne supprimera pas automatiquement les cookies du client. Si vous voulez détruire le cookie associé à la session, vous devrez le faire manuellement.</p>
    </div>
</body>

</html>
