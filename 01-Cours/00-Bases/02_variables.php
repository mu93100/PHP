<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Variables en PHP</title>
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
            height: auto; /* Ajusté pour que la hauteur s'adapte au contenu */
            min-height: 100px; /* Hauteur minimale pour plus de flexibilité */
            width: 100%;
            background: #ffe6e6;
            margin: 10px 0;
            padding: 10px; /* Ajouté pour centrer le texte verticalement */
            box-sizing: border-box; /* Inclut le padding dans la hauteur totale */
            overflow: auto; /* Pour s'assurer que le contenu dépasse le cadre si nécessaire */
        }

        pre p {
            font-size: 1.2em;
            color: #cc0000;
            margin: 0; /* Retiré les marges pour éviter des décalages inutiles */
        }

        .topnav {
            background: #b30000;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .topnav a {
            float: left;
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

        .texte p {
            color: #333;
            font-size: 1.3em;
            text-align: justify;
        }

        ul {
            margin-left: 20px;
            padding-left: 0;
        }

        ul li {
            margin-bottom: 10px;
            list-style-type: square;
            color: #cc0000;
            font-size: 1.2em;
        }

        .img_div {
            width: 200px;
            margin: auto;
        }

        .img_div img {
            width: 100%;
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
    echo '<h2> Variable : déclaration / affectation / types </h2>';
    //--------------------
    echo 'Définition : une variable est un espace mémoire qui porte un nom et permettant de conserver une valeur. En PHP on déclare une variable avec le signe $.<br>Par convention, un nom de variable commence par une lettre minuscule, puis on met une majuscule à chaque mot. Il peut contenir des chiffres (jamais au début), ou un "_" (jamais au début car signification particulière en objet, ni à la fin).<br>';

    echo 'gettype() est une fonction prédéfinie qui indique le type d\'une variable.';

    $a = 127; // affectation de la valeur 127 à la variable $a
    echo '<pre><p>$a = 127;<br>echo gettype($a);</p></pre>';
    echo gettype($a);  // gettype() est une fonction prédéfinie qui indique le type d'une variable. Ici il s'agit d'un integer (entier)

    echo '<br>';

    $a = 'une chaîne de caractères';
    echo '<pre><p>$a = \'une chaîne de caractères\';<br>echo gettype($a);</p></pre>';
    echo gettype($a);   // affiche string

    echo '<br>';

    $b = '127';
    echo '<pre><p>$b = \'127\';<br>echo gettype($b);</p></pre>';
    echo gettype($b); // affiche string car un nombre écrit entre quotes est interprété comme un string

    echo '<br>';

    $a = true;  // ou false
    echo '<pre><p>$a = true;<br>echo gettype($a);</p></pre>';
    echo gettype($a);   // affiche boolean
    ?>
</body>
</html>
