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
        float: left;
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
echo '<h2> Structures conditionnelles - opérateurs de comparaison </h2>';
//--------------------

$a = 10;
$b = 5;
$c = 2;

//-----
// if ... else :
if ($a > $b) {  // si la condition est évaluée à TRUE, on exécute les accolades qui suivent :
    echo '$a est supérieur à $b <br>';
} else {  // sinon... si la condition est évaluée à false, on exécute le else :
    echo 'Non, c\'est $b qui est supérieur ou égal à $a <br>';
}


//-----
// L'opérateur AND écrit && :
if ($a > $b && $b > $c) {  // si $a est supérieur à $b ET que dans le même temps $b est supérieur à $c, alors on entre dans les accolades :
    echo 'OK pour les 2 conditions <br>';
}

//-----
// L'opérateur OR écrit || :
if ($a == 9 || $b > $c) {  // si $a est égal à 9 (opérateur ==) OU que $b est supérieur à $c, alors on entre dans les accolades :
    echo 'OK pour au moins une des 2 conditions <br>';
}

//-----
// if ... elseif ... else :
$a = 10;
$b = 5;
$c = 2;

if ($a == 8) {
    echo '$a est égal à 8 <br>';
} elseif ($a != 10) {
    echo '$a est différent de 10 <br>';
} else {
    echo 'Les 2 conditions précédentes sont fausses <br>';
}

// Notes : on ne fait jamais suivre un else par une condition (sinon utiliser un elseif). On ne met pas de ";" à la fin d'une condition car il s'agit d'une structure. 



//-----
// L'opérateur XOR :
$question1 = 'mineur';
$question2 = 'je vote';  // exemple d'un questionnaire statistique

if ($question1 == 'mineur' XOR $question2 == 'je vote') {  // XOR ou OU exclusif : seulement une des 2 conditions doit être vraie (soit l'une ou soit l'autre). Si les 2 conditions sont vraies, alors l'expression complète est fausse : c'est le cas ici, on entre donc dans le else
    echo 'Vos réponses sont cohérentes <br>';
} else {
    echo 'Vos réponses ne sont pas cohérentes <br>';
}


//------
// Forme contractée de la condition, dite ternaire :
echo ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10 <br>';  // dans la ternaire, le "?" remplace if, et le ":" remplace else. Ici, si $a égale 10, je fais echo du 1er string, sinon du second

// ou encore :
$resultat = ($a == 10) ? '$a est égal à 10 <br>' : '$a est différent de 10 <br>';
echo $resultat;


//------
// Comparaison en == et en ===
$varA = 1;  // integer 
$varB = '1';  // string

if ($varA == $varB) echo '$varA est égal à $varB en valeur uniquement <br>';

if ($varA === $varB) {
    echo '$varA est égal à $varB en valeur ET en type <br>';
} else {
    echo '$varA est différent de $varB en valeur ou en type <br>';
}

/*
  = signe d'affectation
  == signe de comparaison en valeur
  === signe de comparaison en valeur et en type
*/


//------
// isset() et empty() :
// Définitions :
// isset() teste si c'est défini (si existe) et a une valeur non NULL
// empty() teste si c'est vide, c'est-à-dire 0, string vide '', NULL, false ou non défini

$var1 = 0;
$var2 = '';

if (empty($var1)) echo '0, vide, NULL, false ou non défini <br>';  // ici la condition est vraie car $var1 est vide au sens de empty (voir la définition ci-dessus)
if (isset($var2)) echo 'existe et non NULL <br>';  // la condition est vraie car $var2 existe bien (et est non NULL)

// Si on ne déclare pas les variables $var1 et $var2 lignes 279 et 280, la condition avec empty reste vraie (car non définie), mais la condition avec isset devient fausse (car la variable ne serait pas définie)

// Exemples d'utilisation : empty pour vérifier qu'un champ de formulaire est vide. isset qu'une variable existe bien avant de l'utiliser.



//-------
// L'opérateur NOT écrit "!" :
$var3 = 'une chaîne de caractères';

if (!empty($var3)) echo '$var3 n\'est pas vide <br>';  // ! pour NOT. Il s'agit d'une négation qui transforme false en true et inversement (!false vaut true et !true vaut false). Littéralement on teste ici si $var3 N'est PAS vide.


//-------
// phpinfo();   // pour vérifier la version de PHP sur notre serveur local

// PHP7 : entrer une valeur dans une variable si elle existe :
$var1 = $variableInconnue ?? $varAutre ?? 'valeur par défaut';  //  l'opérateur "??" indique qu'il faut prendre la première variable ou valeur qui existe : $variableInconnue n'existant pas, on passe à $varAutre qui n'existe pas non plus, donc on prend la 'valeur par défaut' pour l'affecter à $var1
echo $var1; // affiche 'valeur par défaut'

// Utilisation : pour pré-remplir les values des formulaires quand l'internaute aura saisi et envoyé des valeurs.




//--------------------
echo '<h2> Condition switch </h2>';
//--------------------
// La condition switch est une autre syntaxe du if / elseif / else quand on veut comparer une variable à une multitude de valeurs.

$couleur = 'jaune';

switch ($couleur) {
    case 'bleu' : // on compare $couleur à la valeur des "case" et exécute le code qui suit les ":" si elle correspond
        echo 'Vous aimez le bleu <br>';
    break;  // break est obligatoire pour quitter la condition une fois le case exécuté
    
    case 'rouge' :
        echo 'Vous aimez le rouge <br>';
    break;  

    case 'vert' :
        echo 'Vous aimez le vert <br>';
    break; 

    default:  // cas par défaut si on n'entre pas dans les cases précédents (équivalent du else)
        echo 'Vous n\'aimez aucune de ces couleurs <br>';
    break;    
}
