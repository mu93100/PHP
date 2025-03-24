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
        height: auto; /* Hauteur ajustable pour le contenu */
        width: 100%;
        background: #ffe6e6;
        margin: 10px 0;
        padding: 10px;
        overflow: auto; /* Assurer le défilement pour les longues lignes */
    }

    pre p {
        font-size: 1.2em;
        padding-left: 20px;
        color: #cc0000;
        margin: 0;
    }

    .topnav {
        background: #b30000;
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
        color: #cc0000;
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
        color: #cc0000;
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
        border-top: 1px solid #cc0000;
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
echo '<h2> Constante </h2>';
//--------------------
// Une constante permet de conserver une valeur sauf que celle-ci ne peut pas être modifiée durant l'exécution du ou des scripts. Utile pour par exemple conserver les paramètres de connexion à la BDD sans pouvoir les modifier une fois définis.
echo 'Une constante permet de conserver une valeur sauf que celle-ci ne peut pas être modifiée durant l\'exécution du ou des scripts. Utile pour par exemple conserver les paramètres de connexion à la BDD sans pouvoir les modifier une fois définis.';

echo '<pre>';
    echo '<p style="color: #cc0000;">define(\'CAPITALE\', \'Paris\');</p>';
    echo '<p style="color: #cc0000;">echo CAPITALE;</p>';
echo '</pre>';

define('CAPITALE', 'Paris');   // On déclare une constante avec la fonction prédéfinie define() qui s'appelle CAPITALE et prend pour valeur "Paris". Par convention les constantes sont toujours écrites en majuscules.

echo CAPITALE . '<br>';  // Affiche Paris

//--------------------
echo '<h2> Constante magique </h2>';
//--------------------
// Deux constantes magiques :
echo '<pre>';
    echo '<p style="color: #cc0000;">echo __DIR__; // Affiche le chemin complet vers le dossier de notre fichier</p>';
echo '</pre>';
echo __DIR__ . '<br>';    // Affiche le chemin complet vers le dossier de notre fichier

echo '<pre>';
    echo '<p style="color: #cc0000;">echo __FILE__; // Affiche le chemin complet vers le fichier (dossier + nom du fichier)</p>';
echo '</pre>';
echo __FILE__ . '<br>';   // Affiche le chemin complet vers le fichier (dossier + nom du fichier)
