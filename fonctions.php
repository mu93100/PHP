<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>*{ font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        ;}</style>
    <title>Document</title>
</head>
<body>
<h1>F O N C T I O N S</h1>
<h2>Fonctions natives/ prédéfinies ds PHP</h2>
<h3>strpos</h3>
<?php
function br(){
    echo "<br>"; 
}

$email= "prenom@mail.com";
$email1= "prenommail1.com";
echo strpos($email, "@"); // affiche la position (à partir de 0) du truc recherché et si il existe UTILE POUR MAIL par ex
br();
if (strpos($email1, "@")) {
    echo "mail correct";
    br();
}else {
    echo "mail manquant ou incorrect";
}
br();
?>
<h3>substr</h3>
<?php
$text = "              je suis un texte SUPER LONG et pas de place ds la div             ";
echo $text;
br();
$text_modif=substr($text,0,20); // coupe la chaine de caractères à 20 caractères
echo $text_modif . "...";
?>
<h3>strlen</h3>
<p>compte le nb de caractères</p>

<?php
echo "nb de caractères : " . strlen($text); br();
?>

<h3>trim</h3>
<p>efface les espaces au début et à la fin de chaines de caractères</p>
<?php
echo trim($text);br();
echo "nb de caractères qd on a enlever les espaces avec TRIM : " . strlen(trim($text)); br();
?>
<h3>is_array</h3>
<p>QUE POUR TAB.</p>
<?php
$tab = [
    "id" =>123,
    "email" => "gg@gmail.com",
    "names" => [
        "name1" => "gg",
        "name2" => "gustave",
        "name3" => "billie"
    ],
    "role" => "user"
];
    foreach ($tab as $cle => $valeur) {
        if (is_array($valeur)) {  // si $valeur est un tableau tu boucles
            foreach ($valeur as $value) {   // MAIS on met la cond. avant
                echo "$cle sont : $value, " ; 
            }
            br();
        }else {
            echo "$cle est $valeur";
            br();
        }
        }

?>
<h3>création d'une fonction</h3>
<p>les Fo st un morceau de code encapsulé ds accolades et portant un nom<br>
qu'on appelle au besoin pour exécuter un script</p>
<?php
function hr(){
    echo "<hr>";  // Fo affiche un trait en dessous--</hr>--> au dessus
}
echo "<h5>essai #création d'une fonction</h5>";
hr();
hr();

function hello(){
    return "H E L L O";
}
echo hello();
hr();
echo hello();
hr();

function hello2($qui){
    return "H E L L O" . " " . $qui;
}; 
$var= hello2("seckene");
echo $var; br();

$a=2;
$b=3;
function add($nb,$nb2){
    $result=($nb + $nb2); // on peut juste mettre return $nb + $nb2
    return $result;
}
echo add($a,$b);
?>
<p>on peut utiliser le résultat du return  pour un autre calcul</p>
<h3>variables locales et variables globales</h3>
<p>$var=6;  --> variable globale === en dehors d'une Fo</p>

<?php
$var=6;
function jour(){
$jour="mardi";  // var $jour est variable locale de la Fo
return $jour;
}
echo jour();
$jourMardi = jour(); //je stocke la variable de $jour (var. locale) ds Nlle var.
?>
<h3> de l'espace global au local </h3>

<?php
$pays="maroc"; //  var. globale
function afficherPays(){
    global $pays; // le mot clé global permet de récupérer une var. globale au sein d'une Fo
    echo $pays;  // affiche maroc
}
echo afficherPays();
?>
<?php
?>

<?php
br();
br();
br();
br();
echo "================ TABLEAUX =================\n\n";

// array_push() : Ajoute des éléments à la fin d'un tableau
$fruits = ["pomme", "banane"];
array_push($fruits, "orange");
echo "array_push : ajoute 'orange'\n";
print_r($fruits);

// array_pop() : Supprime le dernier élément
array_pop($fruits);
echo "array_pop : retire le dernier élément\n";
print_r($fruits);

// array_unshift() : Ajoute au début
array_unshift($fruits, "kiwi");
echo "array_unshift : ajoute 'kiwi' au début\n";
print_r($fruits);

// array_keys() : Renvoie les clés d’un tableau
$infos = ["nom" => "Alice", "email" => "alice@test.com"];
echo "array_keys : affiche les clés\n";
print_r(array_keys($infos));

// in_array() : Vérifie si une valeur est présente
echo "in_array : 'Alice' est-il dans les valeurs ? ";
echo in_array("Alice", $infos) ? "Oui\n" : "Non\n";

// count() : Compte le nombre d’éléments
echo "count : nombre de fruits = " . count($fruits) . "\n\n";
echo "================ CHAINES =================\n\n";

// strlen() : Longueur d’une chaîne
$txt = " Hello ";
echo "strlen : longueur de '$txt' = " . strlen($txt) . "\n";

// trim() : Supprime les espaces
echo "trim : sans espaces = '" . trim($txt) . "'\n";

// strtoupper() / strtolower()
echo "strtoupper : " . strtoupper("bonjour") . "\n";
echo "strtolower : " . strtolower("BObOUR") . "\n";

// ucfirst() : Majuscule à la 1re lettre
echo "ucfirst : " . ucfirst("salut") . "\n";

// explode() : Découpe une chaîne
echo "<br>";
$csv = "un,deux,trois";
echo "<pre>";
echo print_r($csv);
echo "</pre>";
echo "<br>";

echo "explode : découpe 'un,deux,trois'\n";
print_r(explode(",", $csv));
echo "<pre>";
echo print_r(explode(",",$csv));
echo "</pre>";

// implode() : Transforme un tableau en chaîne
$tab = ["PHP", "HTML", "CSS"];
echo "implode : ";
echo implode(" - ", $tab) . "\n\n";
echo "================ MATH =================\n\n";

// abs() : valeur absolue
echo "abs(-10) = " . abs(-10) . "\n";

// round() : arrondi standard
echo "round(4.6) = " . round(4.6) . "\n";

// floor() / ceil()
echo "floor(4.8) = " . floor(4.8) . "\n";
echo "ceil(4.1) = " . ceil(4.1) . "\n";

// rand() : nombre aléatoire
echo "rand(1, 10) = " . rand(1, 10) . "\n\n";
echo "================ DATES =================\n\n";

// date() : formatage de la date
echo "date : " . date("Y-m-d H:i:s") . "\n";

// time() : timestamp actuel
echo "time : " . time() . "\n";

// strtotime() : convertir une date en timestamp
$ts = strtotime("2025-01-01");
echo "strtotime('2025-01-01') = " . $ts . "\n";
echo "formaté = " . date("d/m/Y", $ts) . "\n\n";
echo "================ AUTRES =================\n\n";

// isset() : variable définie ?
$val = "test";
echo "isset(\$val) : " . (isset($val) ? "Oui\n" : "Non\n");

// empty() : variable vide ?
$vide = "";
echo "empty(\$vide) : " . (empty($vide) ? "Oui\n" : "Non\n");

// is_array()
echo "is_array(\$fruits) : " . (is_array($fruits) ? "Oui\n" : "Non\n");

// var_dump() : type + valeur
echo "var_dump de \$tab :\n";
var_dump($tab);

// print_r() : affiche un tableau
echo "print_r de \$infos :\n";
print_r($infos);

// die() : termine le script (commenté ici)
// die("Arrêt du script");
// include() : pour inclure un fichier PHP
echo "\ninclude() permet d'intégrer un fichier PHP externe.\n";
echo "\n🎉 Fin du script test des fonctions prédéfinies PHP 🎉\n";
?>

}


//array() --> Fo native de PHP
$tab = array("element0", 15, 12.5, false);

$tab2 = ["titi", "tata", "tutu"];
echo $tab[0] [2]; // ne marche pas
br();
echo $tab[0] . " "  . $tab[2];
br();
echo $tab2[2];
br();
var_dump($tab);
br();



<h2>Fonctions </h2>
<?php
?>
</body>
