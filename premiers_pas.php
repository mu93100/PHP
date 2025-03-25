
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{ font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        ;}
    </style>
</head>
<body>
    <h1> Premiers pas en PHP</h1>
    <p>// COMMENTAIRES --> command /  ou   // 
    <br>
    /*COMMEN<br>
    TAIRES
    */
    <br>

    // POUR ECRIRE $var ds DOM mettre \ avant $ ou '' ISO ""
    <br>
    EX echo"<paragraphe>\$varA </paragraphe>" OU '<paragraphe>$varA </paragraphe>'
    </p>

    <p>$varC; --> déclaration de variable <br>$varC=1; --> affectation /initialisation</p>
    <?php   

    echo "<h2> echo = affiche (un h2)</h2>";
    echo "<p> A T T E N T I O N   ne pas oublier le ; à la fin chaque ligne   S A U F   dernière ligne</p>";

    $ma_premiere_variable; // déclaration d'une variable
    $ma_premiere_variable = "tutu";
    echo $ma_premiere_variable;
    echo "<p class='tonton' style=color:blue>$ma_premiere_variable pourrait s'appeler titi $ma_premiere_variable </p>";
    echo '<p style=color:blue> $ma_premiere_variable . pourrait s\'appeler titi ESSAI AVEC . </p>';
    ?>

<h2>L E S   <span style=color:blue>V A R I A B L E S</span> </h2>
<p>une variable est un espace mémoire qui porte un nom et permet de conserver une valeur + ESPACE DE STOCKAGE DE DONN2ES: string, num ...</p>
<p> var ne commence jamais par chiffre ou Maj</p>
<?php 
$a=123;  // integer
$b="je suis une phrase";  // string
$c=true;  // boolean
$d=123.50; // double = float (décimale)
echo gettype($a)."<br>";
echo gettype($b)."<br>";
echo gettype($c)."<br>";
echo gettype($d)."<br>";
echo "gettype = typeof en JS"."<br>";

$content="<div>";
$content .="valeur de \$a est : $a";  //  \ devant $ --> pour affichage de caractere spécial
$content .="</div>";
echo "$content";
?>

<h2>L E S <span style=color:blue>C O N S T A N T E S </span>E T  <span style=color:lightskyblue>C O N S T A N T E</span>  MA G I Q U E</h2>

<P>une constante se déclare TJRS en MAJ</P>
<P>constante ne peut etre changée diff. de variable ($variable)</P>

<?php
define ("ORDI", "je suis un ordi");
define ("ROOT", "https://github.com/PoleS-dev/premier_jour");
// DEFINE ::: déclarer une constante et on dit ce qu'il y a à l'intérieur 
// utilisée pour ce qui ne change pas et que l'on met dans un fichier ou doss spécial CONFIG 
// (ex adresse URL ETC config avec Fo utilisées)


echo ORDI."<br>";
echo ROOT;

const APICONST="tatata"; // généralement utilisé ds class PHP
?>


<h2>constantes magiques</h2>

<?php
echo __LINE__."<br>"; // affiche le N° de ligne
echo __FILE__."<br>"; // affiche chemin complet vers fichier
echo __DIR__."<br>"; // affiche chemin complet vers doss
// ex matthieu
// include_once __DIR__ . "/../component/header.php";
// include_once __DIR__ . "/../component/footer.php";

?>


<!-- ligne de code pour visualiser les erreurs sur page navigateur
// Debug des erreurs PHP
ini_set('display_errors', 1);
//display error est activé en mettant valeur 1
ini_set('display_startup_errors', 1);
// doit être activé pour afficher les erreur
error_reporting(E_ALL);
// configure PHP pour signaler tous les types d'erreurs
    -->


    <h2>L A   <span style=color:blue> C O N C A T E N A T I O N</span></h2>
<?php
$hello = "H E L L O";
$qui = "tout le monde";
echo $hello . " " . $qui . "<br>";

//  on peut écrire aussi :
echo "$hello" . " " . "$qui" . "<br>";
// ça ça ne va pas --> variable lue comme 1 string
echo '$hello' . ' ' . '$qui';
?>  

    <h2>La concaténation lors des affectations</h2>
<?php
$prenom = "she";
$prenom = "SECK";
echo $prenom . "<br>";

$prenom = "she";
$prenom .= "SECK" . "<br>";
echo $prenom;

$aa=12;
$bb=13;
echo $aa . $bb ;// 1213 et non pas 25
echo "<br>";

//OPERATEUR COMBINé  .=
$prenom = "she";
$prenom .= ' ';
$prenom .= "SECK";
echo $prenom
?>

<h2>O P E R A T E U R S  <span style=color:blue> A R I T H M E T I Q U E S</span> </h2>
<?php

function br(){
    echo "<br>"; 
}

$a=12;
$b=13;
echo $a + $b; br();
echo $a - $b; br();
echo $a / $b; br();
echo $a * $b; br();
echo $a % $b; br();
echo $a % $b . "\n";
echo $a % $b;
?>

<h2>O P E R A T i O N S  <span style=color:blue>  E T </span> A F F E C T A T i O N S  <span style=color:blue>C O M B I N é E S</span> </h2>

<?php
$j=10;
$g=2;

echo $j += $g; br(); // $j + $g  12
echo $j -= $g; br(); // nouveau $j - $g  10
echo $j /= $g; br(); // nouveau $j / $g  5
echo $j *= $g; br(); // nouveau $j * $g  10
echo $j %= $g; br(); // nouveau $j + $g  0
?>

<h2>I N C R E M E N T E R  <span style=color:blue>D E C R E M E N T E R</span> </h2>
<p>++   --> ça incrémente de 1</p>
<?php
$i=0;
echo $i;
br();
echo $i++;// ça affiche $i PUIS ça incrémente de 1 --> on ne voit pas le 1
br();
echo $i; // ça affiche $i incrémenté de 1 --> 1
br(); 

$s=0;
br();
echo $s;
br();
echo ++$s; // ça affiche DIRECT $i incrémenté de 1 --> 1
br();
?>

<p>--   --> ça décrémente de 1</p>
<?php
$six=6;
br();
echo $six--;// --> 6
br();
echo $six;// --> 5
br();
$sept=7;
echo --$sept; // ça affiche DIRECT $sept incrémenté de 1 --> 6
br();
?>

<h2>S T U C T U R E S <span style=color:blue>C O N D I T I O N N E L L E S</span> </h2>
<h3> if    else if   else</h3>
<p>else if  --> pour 2nde cond.</p>

<?php
$a=25;
$b=20;
$c=2;

if ($a>$b){
    echo "<p>a est + grand que b</p>";
} else{
    echo "<p>b est + grand que a</p>";
}

// opé&rateur ET ::: &&

if ($a>$c && $b>$c){
    echo "<p>\$c est + petit que b et a";
} else{
    echo '<p>\$c est + GRAND que b et a';
}

// === strictement égal en type et en val (int, boolean, string et val.)
if ($a===8) {
    echo "<p>a est EGAL à 8</p>";
} elseif ($a!=10) {
    echo "<p>\$a est DIFFERENT de 10</p>";
}else {
    "<p>les 2 cond. sont FAUSSES</p>";
}
?>

<h3>opérateur XOR</h3>
<p>XOR = SOIT, mais pas plusieurs entrées</p>
<?php
$username = "user123";
$email = "";
$password = "password123";

if (($username && $password) XOR ($email && $password)) {
    echo "<p>Connexion réussie</p>";
} else {
    echo "<p>Veuillez fournir soit un nom d'utilisateur et un mot de passe, soit une adresse e-mail et un mot de passe, mais pas les deux.</p>";
}
?>
<p>Voici un exemple d'utilisation réelle de l'opérateur XOR dans un contexte de formulaire de connexion. 
Supposons que vous ayez un formulaire où l'utilisateur peut se connecter soit avec un nom d'utilisateur et un mot de passe, 
soit avec une adresse e-mail et un mot de passe, mais pas les deux en même temps.
Explication de l'utilité
Dans cet exemple :
Si l'utilisateur fournit un nom d'utilisateur et un mot de passe, mais pas d'adresse e-mail, la connexion est réussie.
Si l'utilisateur fournit une adresse e-mail et un mot de passe, mais pas de nom d'utilisateur, la connexion est réussie.
Si l'utilisateur fournit à la fois un nom d'utilisateur et une adresse e-mail, ou s'il ne fournit ni l'un ni l'autre, un message d'erreur est affiché.
L'opérateur XOR est utile ici pour s'assurer que l'utilisateur ne peut se connecter qu'avec une seule méthode d'authentification à la fois, 
garantissant ainsi une logique de validation correcte pour le formulaire de connexion.</p>

<h3>opérateur ||  OU</h3>

<?php
// TOUJOURS : $a=25; $b=20; $c=2;
if ($a===9 || $b>$c) {
    echo"<p>OK pour au - 1 des 2 cond.</p>";
}else{
    echo"<p>les 2 cond. sont fausses</p>";
}
?>


<h3>comparaisons en == et ===</h3>
<p>= signe d'affectation initialisation<br> == signe comparaison en val <br>=== signe de comparaison en val. et type</p>

<?php
$varA=1;
$varB="1";


echo gettype($varA); br(); //INT
echo gettype($varB); br(); //string

echo '$varA=1';
echo '$varB="1"';

if ($varA==$varB) echo"<p>ATTENTION echo SS ACCOLADES possible mais ne se fait pas trop//  \$varA est égal à \$varB EN VALEUR</p>";

if ($varA===$varB) {
    echo"<p>\$varA est égal à \$varB EN VALEUR ET EN TYPE</p>";
}else {
    echo"<p>\$varA n'est pas STRICTEMENT égal à \$varB EN VALEUR ET EN TYPE</p>";
}
?>

<h3>isset()   et   empty()</h3>
<p>utilisés pour formulaires par ex.</p>

<p>isset() vérifie si une var est définie ( si elle existe) <br>
isset() --> est ce que la variable est définie <br>
if isset(){} --> SI la variable est définie/existe, {} </p>
<p>
empty() vérifie si une var est vide = a une val NULL ou non définie<br>
if empty(){} --> SI la variable est vide, {} </p>

<p>est considéré cô vide mais PAS NULL<br>
$varC= ""; --> string vide<br>
$varC= 0; --> integer 0<br>
$varC= null; --> null<br>
$varC= false; --> boolean false<br>
$varC= 0.0; --> float 0.0<br>
$varC= []; --> array vide<br>
et aussi var non définie<br>

<p>est considéré cô NULL<br>
$var = null<br>
ou variable non définie
<?php
$varD = 1;
$varDD = 0;
$varE = "";
$varF = null;
$varG = false;

// Évaluée à vrai car $var est vide
if (empty($varDD)) {
    echo '$varDD vaut soit 0, vide, ou pas définie du tout';
}
br();
// Évaluée à vrai car $var est définie
if (isset($varDD)) {
    echo '$varDD est définie même si elle est vide';
}
br();
// Vérifie si la variable $mail est définie (isset()).
// Vérifie si $mail est non vide (!empty()).
// Affiche :
// ✅ "Mail valide" si la variable est définie et non vide.
// ⚠️ "Mail vide" si elle est définie mais vide.
// ❌ "Mail non défini" si elle n’existe pas.

// $mail n'existe pas --> est non definie et null car n'existe pas
if (isset($mail)) {
    echo "✅ Mail valide";
} else {
    echo "❌ Mail non défini";
} 
br();
if (!empty($mail)) {
    echo "✅ Mail PAS VIDE /PAS NULL";
} else {
    echo "⚠️ Mail vide NULL";
}
br();

// $mail existe  --> est defini et PAS NULL 
$mail="mmmu@gmail.com";
// echo "$mail";
br();
if (isset($mail)) {
    echo "✅ Mail valide";
} else {
    echo "❌ Mail non défini";
} 
br();
if (!empty($mail)) {
    echo "✅ Mail PAS VIDE /PAS NULL";
} else {
    echo "⚠️ Mail vide NULL";
}
br();
if (isset($mail)) {
    if (!empty($mail)) {
        echo "✅✅✅ Mail non vide";
} else {
    echo "❌❌❌ Mail est vide";
    }
    
}
else{
    echo "*-* n'est pas défini";
} // essai avec mail = 0, et " " : XXX mail est vide
br();
// Vérifier la validité d'un âge
// *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)  
// *  Afficher un message indiquant si l'âge est valide ou non 
$age;
if (isset($age) && $age>0 && $age<120) {
    echo "✅ age valide";
} else {
    echo "⚠️ recommence";
}
br();
?>
<h2>switch</h2>
<p>la cond SWITCH est une autre syntaxe du if/else qd on veut comparer une var. à des val. multiples<br> ATTENTION ::: ne pas mélanger les types de var / int et string</p>

<?php
$coul="rouge";
// on compare la var $coul avec les valeurs  des cases
switch($coul){
    case "rouge": 
        echo "<p>la couleur est rouge</p>";
        break; // break obligatoire pour quitter la cond. une fois la case executée
    case "bleu": 
        echo "<p>la couleur est bleu</p>";
        break;
    case "jaune": 
        echo "<p>la couleur est jaune</p>";
        break;
    default : 
        echo "<p>la couleur n'est PAS rouge, ni bleu, ni jaune</p>";
        break;
    
}
?>
<h3>Fonction de débugage  var_dump et print_r</h3>
<p>pour connaitre longueur du tab (size=), les index, le type de chaque élément, long des strings (length=)<br> 
+ chemin pour fichier avec N° de ligne ds fichier php<br> A METTRE EN COMM</p>
<?php 
//array() --> Fo native de PHP
$tab = array("element0", 15, 12.5, false);

var_dump($tab);
?>
<p>affiche C:\wamp64\www\PHP\premiers_pas.php:420:
array (size=4)
  0 => string 'element0' (length=8)
  1 => int 15
  2 => float 12.5
  3 => boolean false</p>