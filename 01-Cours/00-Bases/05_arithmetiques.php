<style>
    body {
        margin-bottom: 400px;
        padding: 60px;
    }

    h2 {
        font-size: 2em;
        color: red;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        text-align: center;
    }

    pre {
        border: 1px solid red;
        height: auto;
        width: 100%;
        background: #f4f4f4;
    }

    pre p {
        font-size: 1.2em;
        padding-left: 20px;
        color: black;
    }

    .topnav {
        background: #8B0000; /* Rouge foncé */
        overflow: hidden;
        text-align: center; /* Centrer les éléments de navigation */
    }

    .topnav a {
        display: inline-block; /* Permet de centrer les éléments de navigation */
        color: #FFFFFF;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background: #ddd;
        color: black;
    }

    .texte p {
        color: black;
        font-size: 1.3em;
        text-indent: justify;
    }

    .img_div {
        text-align: center;
        margin-bottom: 20px;
    }

    .img_div img {
        width: 200px;
        height: auto;
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
echo '<h2> opérateurs arithmétiques </h2>';
//--------------------
$a = 10;
$b = 2;
echo '<pre>';
echo '<p>$a = 10;<br>$b = 2;</p>';
echo '<p>1. $a + $b;</p>';
echo '<p>2. $a - $b;</p>';
echo '<p>3. $a * $b;</p>';
echo '<p>4. $a / $b;</p>';
echo '<p>5. $a % $b;</p><br> NB: modulo = reste de la division entière. Exemple 3 % 2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main</p>';
echo '</pre><br>';

echo $a + $b . '<br>';   // affiche 12
echo $a - $b . '<br>';   // affiche 8
echo $a * $b . '<br>';   // affiche 20
echo $a / $b . '<br>';   // affiche 5
echo $a % $b . '<br>';   // affiche 0. modulo = reste de la division entière. Exemple 3%2 = si on a 3 billes réparties entre 2 personnes, il nous en reste 1 dans la main 

//------------------
// Opération et affectation combinées :
//--------------------
echo '<h2>Opération et affectation combinées</h2>';
//--------------------
$a = 10;
$b = 2;

$a += $b;    // équivaut à $a = $a + $b, $a vaut donc au final 12
$a -= $b;    // équivaut à $a = $a - $b, $a vaut donc au final 10
$a *= $b;    // équivaut à $a = $a * $b, $a vaut donc au final 20
$a /= $b;    // équivaut à $a = $a / $b, $a vaut donc au final 10
$a %= $b;    // équivaut à $a = $a % $b, $a vaut donc au final 0

echo '<pre>';
echo '<p>$a = 10;<br>$b = 2;</p>';
echo '<p>1. $a += $b;// équivaut à $a = $a + $b</p>';
echo '<p>2. $a -= $b;// équivaut à $a = $a - $b</p>';
echo '<p>3. $a *= $b;// équivaut à $a = $a * $b</p>';
echo '<p>4. $a /= $b;// équivaut à $a = $a / $b</p>';
echo '<p>5. $a %= $b;// équivaut à $a = $a % $b</p>';
echo '</pre><br>';

// Exemple d'utilisation : pratique pour faire des calculs de quantités dans les paniers d'achat (+= et -=)

//--------------------
echo '<h2>Incrémenter et décrémenter</h2>';
//--------------------
//------------------
// Incrémenter et décrémenter :
$i = 0;
$i++;    // on ajoute 1 à $i qui vaut au final 1
$i--;    // on retire 1 à $i qui vaut au final 0

$i = 0;
$k = ++$i; // la variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k

echo '<pre>';
echo '<p>$i = 0;</p>';
echo '<p>$i++;// on ajoute 1 à $i qui vaut au final 1</p>';
echo '<p>$i--;// on soustrait 1 à $i qui vaut au final 0</p>';
echo '<p></p>';
echo '<p>$i = 0</p>';
echo '<p>$k = ++$i;// la variable $i est incrémentée de 1, puis elle est retournée : on affecte donc 1 à $k</p>';
echo '</pre><br>';

echo '$i vaut ' . $i . '<br>'; // 1
echo '$k vaut ' . $k . '<br>'; // 1


$i = 0;
$k = $i++;   // la variable $i est d'abord retournée, puis elle est incrémentée de 1

echo '<pre>';
echo '<p>$i = 0;</p>';
echo '<p>$k = $i++;// la variable $i est d\'abord retournée, puis elle est incrémentée de 1</p>';
echo '</pre><br>';

echo '$i vaut ' . $i . '<br>'; // 1
echo '$k vaut ' . $k . '<br>'; // 0
?>
