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
    
<h1>T A B L E A U X</h1>
<p>3 SORTES DE TAB :::<br>1. tableau indéxé<br>2. tableau associatif<br>3. tableau multidimensionnel</p>

<h2>1. tableau indéxé</h2>
<p>2 méthodes pour déclaration d'un tab.</p>
<?php 
function br(){
    echo "<br>"; 
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
?>
<h3>Fonction de débugage  var_dump  // print_r</h3>
<h4> var_dump</h4>
<p>pour connaitre longueur du tab (size=), les index, le type de chaque élément, long des strings (length=)<br> 
+ chemin pour fichier avec N° de ligne ds fichier php<br> A METTRE EN COMM</p>

<h4>print_r</h4>
<p>print_r() souvent acoompagné de la balise<pre></pre> pour + de lisibilité <br> affiche - d'infos que var_dump --> pour débugage rapide</p>
<?php
echo "<pre>";
print_r(($tab));
echo "</pre>";
?>



<h2>2. tableau associatif</h2>
<p> index remplacés par catégories cô colonnes dans table base de données //  un tableau associatif est un tableau dans laquel on choisit la dénomination des index
</p>
<p>=>   opérateur clé (=index) valeur</p>
<?php    

$user1=[
    "id"=>123,
    "name_username"=>"Nassuf",
    "email"=>"nassuf@gmail.com"
];
echo "<pre>";
print_r($user1);
echo "</pre>";
br();
echo $user1["email"];
//Ou
 
$user2=array(
    "id"=>999,
    "name_username"=>"Nono",
    "email"=>"nono@gmail.com"
);
br();
print_r($user2["id"]);
br();
echo $user2["id"];
br();
// echo $user2["id", "name_username","email"];
br();
var_dump($user2);

echo '<p>php ne fait pas la diff. entre tab indexé et tab. associatif qd on affiche le print_r() ou var_dump()<br>
affichage tab indexé en print_r() ou var_dump() = affichage print_r() tab associatif</p>'
 /// FACUNDO  //  pour afficher les erreurs
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
/// FACUNDO
?>

<h2>3. tableau multidimensionnel</h2>
<?php
$tab_multi=[
    "najiba",
    ["email", "password"],
    "seckene"
];

echo "email \$tab_multi : " . $tab_multi[1][0]; // --> email
br();

$users = [
    [
    "id" =>123,
    "username" => "nassuf",
    "email" => "nassuf@gmail.com",
    "données perso" =>[
        "age" => 35,
        "ville" => "Casablanca"
        ]
    ],
    [
        "id" =>333,
        "username" => "pppppu",
        "email" => "pppppu@gmail.com",
        "données perso" =>[
            "age" => 55,
            "ville" => "Montreuilm"
        ]
    ],
    [
        "id" =>111,
        "username" => "ggggege",
        "email" => "ggggege@gmail.com",
        "données perso" =>[
            "age" => 18,
            "ville" => "Paris"
            ]
        ],
];
echo "email ggggege \$users : " . $users [2]["id"];
br();
echo "ville nassuf \$users : " . $users [0]["données perso"]["ville"]
?>
<h3>PUSH   rajouter à la fin</h3>
<p>$variable[] = "ajout élément à la fin"</p>
<?php
$tab3 = ["element 0", "element 1", "element 2" ];
$tab3[] = "ajout élément à la fin";
echo "<pre>";
print_r($tab3);
echo "</pre>";
?>

<h3>REMPLACER</h3>
<p>$variable[i] = "remplace l'élément index i" </p>
<?php

$tab3[1] = "remplace l'élément index 1";
echo "<pre>";
print_r($tab3);
echo "</pre>";
?>

<h3>Ajouter 1 ou +sieurs éléments avec array_push</h3>
<p>array_push($tableauAmodifier, "élément à ajouter") </p>
<?php

array_push($tab3, "élément ajouté avec array_push", "2ème élément ajouté avec array_push");
echo "<pre>";
print_r($tab3);
echo "</pre>";
?>

<h3>Ajouter 1 ou +sieurs éléments avec tableau associatif <br> NE PAS UTILISER array_push</h3>
<p> </p>
<?php
$user2 = array(
    "id"=>999,
    "name_username"=>"Nono",
    "email"=>"nono@gmail.com"
);
$user2["password"] =  "123177";
var_dump($user2);

$user2["ville"] = "bagnolet";
echo "<pre>";
print_r($user2);
echo "</pre>";
?>

<h3>Connaitre la long. d'un tab.</h3>
<p>echo count($variable)<br>echo count($variable["tab. ds le tab."])</p>
<?php
$tab4 = ["element 0", "element 1", "element 2"];
echo "long. du \$tab5 : " . count($tab4);
br();

$usernassuf = [
    "id" =>123,
    "username" => "nassuf",
    "email" => "nassuf@gmail.com",
    "données perso" =>[
        "age" => 35,
        "année de naissance" =>1983,
        "ville" => "Casablanca"
        ]
];
br();
echo count($usernassuf);
br();
echo count($usernassuf ["données perso"]);
?>
</body>
</html>