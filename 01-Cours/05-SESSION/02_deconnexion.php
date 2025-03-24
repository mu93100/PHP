<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style pour l'image dans l'en-tête */
        .header-img {
            text-align: center;
            margin: 20px auto;
        }

        .header-img img {
            max-width: 150px;
            /* Ajustez la largeur maximale de l'image */
            height: auto;
        }

        /* Style pour la section de données de session */
        .session-data {
            background-color: #f4f4f4;
            /* Fond légèrement gris pour bien contraster */
            padding: 10px;
            border: 1px solid #B22222;
            /* Bordure rouge pour cohérence */
            border-radius: 5px;
            /* Coins arrondis pour un look uniforme */
            margin-top: 20px;
            /* Espacement au-dessus de la section */
            overflow-x: auto;
            /* Permet le défilement horizontal si nécessaire */
        }

        /* Style pour la section de code */
        .code-section {
            background-color: #f4f4f4;
            /* Fond légèrement gris pour bien contraster */
            padding: 10px;
            border: 1px solid #B22222;
            /* Bordure rouge pour cohérence */
            border-radius: 5px;
            /* Coins arrondis pour un look uniforme */
            margin-top: 20px;
            /* Espacement au-dessus de la section */
            overflow-x: auto;
            /* Permet le défilement horizontal si nécessaire */
            white-space: pre;
            /* Préserve les espaces et les retours à la ligne du code */
        }
    </style>
</head>

<body>
    <div class="header-img">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>

    <?php
    if (isset($_SESSION)) {
        echo '<div class="session-data">';
        print_r($_SESSION); // Affiche les données de la session
        echo '</div>';
    } else {
        echo '<div class="session-data">La session n\'existe plus</div>';
    }
    ?>


</body>

</html>