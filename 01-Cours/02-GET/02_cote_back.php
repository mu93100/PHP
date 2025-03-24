<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détail du produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        h1 {
            color: #cc0000;
            text-align: center;
        }
        .details {
            background: #fff;
            border: 1px solid #cc0000;
            border-radius: 5px;
            padding: 20px;
            margin: 20px auto;
            max-width: 600px;
        }
        .details p {
            font-size: 1.2em;
            color: #333;
        }
        .error {
            color: #cc0000;
            font-size: 1.5em;
            text-align: center;
        }
        pre {
            background: #ffe6e6;
            border: 1px solid #cc0000;
            padding: 10px;
            overflow-x: auto;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 200px; /* Ajuste la taille de l'image si nécessaire */
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>
    <?php
    //--------------------------
    // La superglobale $_GET
    //--------------------------
    // $_GET représente l'url. Il s'agit d'une superglobale, et comme toutes les superglobales, il s'agit d'un array. Superglobale signifie que ce tableau est disponible dans tous les contextes du script, y compris dans l'espace local des fonctions. 

    // Dans notre exemple, les informations transitent dans l'url de la manière suivante :     ?article=jean&couleur=bleu&prix=30
    // La syntaxe de l'url est donc :   page.php?indice1=valeur1&indiceN=valeurN
    // La superglobale $_GET transforme les informations passées dans l'url en cet array : $_GET = array('incide1' => 'valeur1', 'indiceN' => 'valeurN');  

    echo '<pre>';
        var_dump($_GET);
    echo '</pre>';

    if (isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) {  // si existent les indices "article" et "couleur" et "prix", alors on peut afficher leur valeur :
        echo '<div class="details">';
        echo '<h1>Détail du produit</h1>';
        echo '<p>Article : ' . htmlspecialchars($_GET['article']) . '</p>';
        echo '<p>Couleur : ' . htmlspecialchars($_GET['couleur']) . '</p>';
        echo '<p>Prix : ' . htmlspecialchars($_GET['prix']) . '€</p>';
        echo '</div>';
    } else {
        // sinon, on met un message à l'internaute :
        echo '<p class="error">Ce produit n\'existe pas !</p>';
    }
    ?>
</body>
</html>
