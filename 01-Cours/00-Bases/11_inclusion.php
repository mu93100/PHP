<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusion de Fichiers PHP</title>
    <style>
        body {
            margin-bottom: 400px;
            padding: 60px;
            background-color: #fff;
            color: #333;
            font-family: Arial, sans-serif;
        }

        h2 {
            font-size: 2em;
            color: #cc0000;
            border-top: 1px solid #cc0000;
            border-bottom: 1px solid #cc0000;
            text-align: center;
            padding: 10px;
        }

        pre {
            border: 1px solid #cc0000;
            background: #ffe6e6;
            margin: 10px 0;
            padding: 10px;
            font-size: 1.1em;
            overflow: auto;
        }

        pre p {
            margin: 0;
            color: #cc0000;
        }

        .topnav {
            background: #b30000;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .topnav a {
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background: #fff;
            color: #cc0000;
        }

        .img_div {
            width: 200px;
            margin: auto;
            text-align: center;
        }

        .img_div img {
            width: 100%;
        }

        .texte p {
            color: #333;
            font-size: 1.3em;
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="img_div">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>
    <div class="topnav">
    <a href="01_bases.php">Bases</a>
        <a href="05_arithmetiques.php">Arithméthiques</a>
        <a href="08_boucles.php">Boucles</a>
        <a href="04_concatenation.php">Concaténation</a>
        <a href="06_conditions.php">Conditions</a>
        <a href="03_constantes.php">Constantes</a>
        <a href="09_dates.php">Dates</a>
        <a href="10_fonctions.php">Fonctions</a>
        <a href="11_inclusion.php">Inclusion</a>
        <a href="07_tableaux.php">Tableaux</a>
        <a href="02_variables.php">Variables</a>
    </div>

    <?php
    //--------------------
    echo '<h2> Inclusion de fichiers </h2>';
    //--------------------

    echo '<p>Première inclusion : </p>';
    echo '<pre><p>include \'exemple.inc.php\'; // le fichier dont le chemin est spécifié est inclus ici. En cas d\'erreur lors de l\'inclusion du fichier, include génère une erreur de type warning et continue l\'exécution du script</p></pre>';
    include 'exemple.inc.php';  // le fichier dont le chemin est spécifié est inclus ici. En cas d'erreur lors de l'inclusion du fichier, include génère une erreur de type warning et continue l'exécution du script

    echo '<p>Deuxième inclusion : </p>';
    echo '<pre><p>include_once \'exemple.inc.php\'; // le once vérifie si le fichier a déjà été inclus. Si c\'est le cas, il ne le ré-inclut pas.</p></pre>';
    include_once 'exemple.inc.php';  // le once vérifie si le fichier a déjà été inclus. Si c'est le cas, il ne le ré-inclut pas.

    echo '<p>Troisième inclusion : </p>';
    echo '<pre><p>require \'exemple.inc.php\'; // le fichier est "requis" donc obligatoire : en cas d\'erreur lors de l\'inclusion du fichier, require génère une erreur de type "fatal error" et stoppe l\'exécution du script</p></pre>';
    require 'exemple.inc.php';  // le fichier est "requis" donc obligatoire : en cas d'erreur lors de l'inclusion du fichier, require génère une erreur de type "fatal error" et stoppe l'exécution du script 

    echo '<p>Quatrième inclusion : </p>';
    echo '<pre><p>require_once \'exemple.inc.php\'; // le once vérifie si le fichier a déjà été inclus. Si c\'est le cas, il ne le ré-inclut pas.</p></pre>';
    require_once 'exemple.inc.php';   // le once vérifie si le fichier a déjà été inclus. Si c'est le cas, il ne le ré-inclut pas.

    echo '<p>NB : Le "inc" dans le nom du fichier inclus est indicatif pour préciser aux développeurs qu\'il s\'agit d\'un fichier d\'inclusion, et donc pas d\'une page à part entière. Ce n\'est pas obligatoire mais utile.</p>';
    ?>
</body>
</html>
