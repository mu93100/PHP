<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions Prédéfinies et Utilisateur</title>
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

        .output {
            font-size: 1.2em;
            margin: 10px 0;
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
    echo '<h2> Quelques fonctions prédéfinies </h2>';
    //--------------------
    // Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le langage PHP. 

    //---
    // strpos :
    $email1 = 'prenom@site.fr';
    echo '<pre>echo strpos($email1, \'@\'); // affiche la position 6 de l\'@ en comptant à partir de 0</pre>';
    echo '<div class="output">' . strpos($email1, '@') . '</div>';  // affiche la position 6 de l'@ en comptant à partir de 0

    echo '<pre>echo strpos($email2, \'@\'); // cette ligne n\'affiche rien, pourtant la fonction retourne bien quelque chose : false</pre>';
    $email2 = 'bonjour';
    echo '<div class="output">' . var_dump(strpos($email2, '@')) . '</div>';  // affiche false, car l'@ n'est pas trouvé

    //---
    // strlen :
    $phrase = 'mettez une phrase ici à cet endroit';
    echo '<pre>echo strlen($phrase); // strlen retourne la taille d\'une chaine (nombre d\'octets de cette chaîne)</pre>';
    echo '<div class="output">' . strlen($phrase) . '</div>'; // strlen retourne la taille de la chaîne

    //---
    // substr :
    $texte = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum aperiam maiores tenetur veritatis ipsum debitis nostrum, nobis, quo at id dolore optio maxime natus quis? Accusantium debitis minima dignissimos necessitatibus!';
    echo '<pre>echo substr($texte, 0, 20) . \' ... <a href="">lire la suite</a>\'; // substr retourne une partie du string de la position 0 et sur 20 caractères</pre>';
    echo '<div class="output">' . substr($texte, 0, 20) . ' ... <a href="#">lire la suite</a></div>';  // retourne les premiers 20 caractères du texte

    //---
    // trim :
    $message = '     Hello world     ';
    echo '<pre>echo strlen($message); // on compte la taille avec les espaces</pre>';
    echo '<div class="output">' . strlen($message) . '</div>';  // affiche la longueur avec les espaces

    echo '<pre>echo strlen(trim($message)); // on compte la taille une fois les espaces supprimés avec trim en début et fin de string</pre>';
    echo '<div class="output">' . strlen(trim($message)) . '</div>';  // affiche la longueur après suppression des espaces

    //---
    // die() et exit() :
    // exit('un message');    // quitte le script après avoir affiché le message
    // die('un message');    // fait la même chose : die() est un alias de exit()

    //--------------------
    echo '<h2> Fonctions utilisateur </h2>';
    //--------------------
    // Des fonctions sont des morceaux de codes encapsulés dans des accolades et portant un nom, qu'on appelle au besoin pour exécuter le code qui s'y trouve.

    // Déclaration d'une fonction :
    function separation() {  // déclaration d'une fonction sans paramètre
        echo '<hr>';
    }

    // Appel de la fonction :
    echo '<pre>function separation() { echo \'<hr>\'; }</pre>';
    separation();   // on appelle la fonction

    //---
    // Fonction avec paramètre et return :
    function bonjour($qui) {  // $qui est un paramètre
        return 'Bonjour ' . $qui . '<br>'; // return renvoie le string qui le suit
    }

    echo '<pre>function bonjour($qui) { return \'Bonjour \' . $qui . \'<br>\'; }</pre>';
    echo '<div class="output">' . bonjour('Pierre') . '</div>';  // affiche 'Bonjour Pierre'
    echo '<div class="output">' . bonjour('Sabuj') . '</div>';  // affiche 'Bonjour Sabuj'

    //---
    // Exercice :
    function appliqueTva($nombre) {
        return $nombre * 1.2;
    }

    // Ecrivez une fonction appliqueTva2 qui calcule un nombre multiplié par un taux donnés lors de l'appel de la fonction.
    function appliqueTva2($nombre, $taux = 1.2) {  // paramètre par défaut
        return $nombre * $taux;
    }

    echo '<pre>function appliqueTva2($nombre, $taux = 1.2) { return $nombre * $taux; }</pre>';
    echo '<div class="output">' . appliqueTva2(100, 1.196) . '</div>'; // avec taux personnalisé
    echo '<div class="output">' . appliqueTva2(100) . '</div>'; // avec taux par défaut

    //---
    // Exercice :
    function meteo($saison) {
        echo "Nous sommes en $saison. <br>";
    }

    echo '<pre>function meteo($saison) { echo "Nous sommes en $saison. <br>"; }</pre>';
    meteo('automne');
    meteo('printemps');

    // Au sein d'une nouvelle fonction exoMeteo, afficher l'article "au" ou "en" selon la saison (en été, en hiver, en automne, au printemps). 

    function exoMeteo($saison) {
        if ($saison === 'printemps') {
            $article = 'au';
        } else {
            $article = 'en';
        }
        echo "Nous sommes $article $saison <br>";
    }

    echo '<pre>function exoMeteo($saison) { if ($saison === \'printemps\') { $article = \'au\'; } else { $article = \'en\'; } echo "Nous sommes $article $saison <br>"; }</pre>';
    exoMeteo('été');
    exoMeteo('printemps');

    //--------------------
    // Variables locales et variables globales :

    // De l'espace local à l'espace global :
    function jourSemaine() {
        $jour = 'mardi';  // variable locale à la fonction
        return $jour;  // return permet de sortir une valeur de la fonction
    }

    echo '<pre>function jourSemaine() { $jour = \'mardi\'; return $jour; }</pre>';
    echo '<div class="output">' . jourSemaine() . '</div>';  // affiche 'mardi'

    echo '<br>';

    // De l'espace global à l'espace local :
    $pays = 'France';  // variable globale

    function affichePays() {
        global $pays; // le mot clé "global" permet de récupérer une variable globale au sein de l'espace local de la fonction
        echo $pays;  // affiche France
    }

    echo '<pre>function affichePays() { global $pays; echo $pays; }</pre>';
    affichePays();
    ?>
</body>
</html>
