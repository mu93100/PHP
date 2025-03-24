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
        color: #b30000; /* Rouge plus foncé */
        border-top: 1px solid #b30000;
        border-bottom: 1px solid #b30000;
        text-align: center;
        padding: 10px;
        margin: 0 0 20px;
    }

    pre {
        border: 1px solid #b30000; /* Rouge plus foncé */
        background: #ffe6e6;
        padding: 10px;
        margin: 10px 0;
        overflow: auto; /* Assurer le défilement pour les longues lignes */
    }

    pre p {
        font-size: 1.2em;
        padding-left: 20px;
        color: #b30000; /* Rouge plus foncé */
        margin: 0;
    }

    .topnav {
        background: #b30000; /* Rouge plus foncé */
        overflow: hidden;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
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
        color: #b30000; /* Rouge plus foncé */
    }

    .texte p {
        color: #333;
        font-size: 1.3em;
        text-align: justify;
        margin: 0 0 20px;
    }

    ul {
        margin-left: 20px;
        padding-left: 0;
        margin: 0 0 20px;
    }

    ul li {
        margin-bottom: 10px;
        list-style-type: square;
        color: #b30000; /* Rouge plus foncé */
        font-size: 1.2em;
    }

    .img_div {
        width: 200px;
        margin: 0 auto 20px;
    }

    .img_div img {
        width: 100%;
    }

    hr {
        border: 0;
        border-top: 1px solid #b30000; /* Rouge plus foncé */
        margin: 20px 0;
    }
</style>
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
echo '<h2> Concaténation </h2>';
//--------------------

$x = 'Bonjour ';
$y = 'tout le monde';

echo '<pre>';
    echo '<p>$x = "Bonjour ";<br>$y = "tout le monde";</p>';
    echo '<p>echo $x . $y; // le point de concaténation peut être traduit par \'suivi de\'</p>';
echo '</pre><br>';
echo $x . $y . '<br>';   // le point de concaténation peut être traduit par 'suivi de'

echo '<pre>';
    echo '<p>$x = "Bonjour ";<br>$y = "tout le monde";</p>';
    echo '<p>echo $x, $y; // dans l\'instruction echo on peut séparer les éléments à afficher par une virgule. Cette syntaxe est spécifique à echo, et ne marche pas avec print.</p>';
echo '</pre><br>';
// Remarque sur echo :
echo $x, $y, '<br>';  // dans l'instruction echo on peut séparer les éléments à afficher par une virgule. Cette syntaxe est spécifique à echo, et ne marche pas avec print.

//--------
// Concaténation lors de l'affectation :
echo '<pre>';
    echo '<p>$prenom1 = "Bruno ";<br>$prenom1 = "Claire";</p>';
    echo '<p>echo $prenom1; // Affiche Claire</p>';
echo '</pre><br>';
$prenom1 = 'Bruno';  
$prenom1 = 'Claire';
echo $prenom1 . '<br>';  // affiche Claire

echo '<pre>';
    echo '<p>$prenom2 = "Nicolas ";<br>$prenom2 .= "Marie";</p>';
    echo '<p>echo $prenom2; // Affiche "Nicolas Marie" grâce à l\'opérateur combiné ".=", la valeur "Marie" vient se concaténer à la valeur "Nicolas" sans la remplacer</p>';
echo '</pre><br>';
$prenom2 = 'Nicolas';
$prenom2 .= ' Marie';
echo $prenom2 . '<br>';   // affiche "Nicolas Marie" grâce à l'opérateur combiné ".=", la valeur "Marie" vient se concaténer à la valeur "Nicolas" sans la remplacer

//--------------------
echo '<h2> Guillemets et quotes </h2>';
//--------------------
echo 'En PHP, lorsque l\'on travaille avec des chaînes de caractères qui contiennent des guillemets et/ou des apostrophes, il est nécessaire de les échapper pour que ces dernières puissent apparaître, ou sinon varier les quotes simples et doubles.';

echo '<pre>';
    echo '<p>$message = "Aujourd\'hui";</p>';
    echo '<p>$message = \'Ici c "cool"\';</p>';
    echo '<p>$message = \'Aujourd\'hui\';</p>';
    echo '<p>$message = "Ici c \"cool\"";</p>';
    echo '<p>$message = \'Aujourd\'hui\';</p>';
    echo '<p>$txt = \'Bonjour\';</p>';
    echo '<p>echo "$txt tout le monde"; // dans les guillemets, la variable est évaluée : c\'est son contenu qui est affiché, ici "Bonjour"</p>';
    echo '<p>echo \'$txt tout le monde\'; // dans des quotes simples, la variable n\'est pas évaluée, elle est traitée comme du texte brut. Affiche $txt</p>';
echo '</pre><br>';

$message = "aujourd'hui";  // ou bien :
$message = 'aujourd\'hui'; // on échappe les apostrophes dans les quotes simples avec \ (altGr + 8)

$txt = 'Bonjour';
echo "$txt tout le monde <br>"; // dans les guillemets, la variable est évaluée : c'est son contenu qui est affiché, ici "Bonjour"
echo '$txt tout le monde <br>'; // dans des quotes simples, la variable n'est pas évaluée, elle est traitée comme du texte brut. Affiche '$txt'.
?>
