<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des dates</title>
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
            overflow: auto;
            font-size: 1.1em;
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
    echo '<h2> Gestion des dates </h2>';
    //--------------------
    echo '<pre>';
        echo 'echo date(\'d/m/Y H:i:s\');// date() retourne la date de maintenant selon le format indiqué. d pour jour, m pour mois, Y pour année sur 4 chiffres, y pour année sur 2 chiffres, H pour heure sur 24h, h pour heure sur 12h, i pour minute et s pour seconde;';
    echo '</pre>';
    echo '<p>' . date('d/m/Y H:i:s') . '</p>';  // date() retourne la date de maintenant selon le format indiqué. d pour jour, m pour mois, Y pour année sur 4 chiffres, y pour année sur 2 chiffres, H pour heure sur 24h, h pour heure sur 12h, i pour minute et s pour seconde.   

    echo '<pre>';
        echo 'echo date(\'Y-m-d\');// on peut changer l\'ordre des paramètres ainsi que le séparateur';
    echo '</pre>';
    echo '<p>' . date('Y-m-d') . '</p>';  // on peut changer l'ordre des paramètres ainsi que le séparateur

    //----
    // Le timestamp :
    // Le timestamp est le nombre de secondes écoulées entre une certaine date et le 1er janvier 1970 à 00:00:00. Cette date correspond à la création du système UNIX.
    // Ce système de timestamp est utilisé par de nombreux langages de programmation dont le PHP et le JavaScript. 

    //----
    echo '<p>Le timestamp: Le timestamp est le nombre de secondes écoulées entre une certaine date et le 1er janvier 1970 à 00:00:00. Cette date correspond à la création du système UNIX. Ce système de timestamp est utilisé par de nombreux langages de programmation dont le PHP et le JavaScript.</p>';
    echo '<pre>';
        echo 'echo time();// retourne l\'heure actuelle en timestamp';
    echo '</pre>';
    echo '<p>' . time() . '</p>';   // retourne l'heure actuelle en timestamp

    //----
    // Changer le format d'une date (méthode procédurale) :
    echo '<p>Changer le format d\'une date (méthode procédurale):</p>';
    echo '<pre>';
        echo '$dateJour = strtotime(\'27-09-2018\');// transforme la date exprimée en string en timestamp';
        echo 'echo $dateJour;// affiche le timestamp du jour';
    echo '</pre>';

    $dateJour = strtotime('27-09-2018'); // transforme la date exprimée en string en timestamp
    echo '<p>' . $dateJour . '</p>';  // affiche le timestamp du jour

    echo '<pre>';
    echo 'var_dump(strtotime(\'13-13-2018\'));// ici retourne false car la date fournie n\'est pas valide. Cette fonction permet donc de valider une date.';
    echo '</pre>';
    var_dump(strtotime('13-13-2018')); // ici retourne false car la date fournie n'est pas valide. Cette fonction permet donc de valider une date.

    echo '<pre>';
    echo '$dateFormat = date(\'Y-m-d\', $dateJour);// transforme un timestamp en une date formatée en année-mois-jour';
    echo 'echo $dateFormat;';
    echo '</pre>';
    $dateFormat = date('Y-m-d', $dateJour);

    echo $dateFormat; // Affiche "2018-09-27"
    echo '<p>' . $dateFormat . '</p>';

    //----
    // Changer le format d'une date (méthode objet) :
    echo '<p>Changer le format d\'une date (méthode objet) :</p>';
    echo '<pre>';
        echo '$date = new DateTime(\'11-04-2017\');// $date est un objet date qui représente le 11-04-2017';
        echo 'echo $date->format(\'Y-m-d\'); // on peut formater cet objet date en appelant sa méthode format() et en lui indiquant les paramètres du format, ici Y-m-d. Affiche 2017-04-11.';
    echo '</pre>';

    $date = new DateTime('11-04-2017'); // $date est un objet date qui représente le 11-04-2017
    echo '<p>' . $date->format('Y-m-d') . '</p>'; // on peut formater cet objet date en appelant sa méthode format() et en lui indiquant les paramètres du format, ici 'Y-m-d'. Affiche '2017-04-11'.
    ?>
</body>
</html>
