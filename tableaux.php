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

<h4>var_export</h4>
<p>var_export affiche false si pas de val.</p>
<?php
echo "<pre>";
var_export($tab);
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
<p>tableaux ds tableau</p>
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

<h3>Ajouter 1 ou +sieurs éléments à la fin avec array_push</h3>
<p>array_push($tableauAmodifier, "élément à ajouter") </p>
<h3>array_push peut rajouter un autre tab. à tab. multidimensionnel</h3>
<p>array_push($tableauAmodifier, ["clé à ajouter"=>"val. à ajouter"]);</p>

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
array_push($usernassuf,["aaa"=>"bbbb"]); // écrit comme ça array_push rajoute un autre tableau
var_dump( $usernassuf);
$usernassuf["hhh"]="gggg";// écrit comme ça array_push rajoute une autre ligne --> clé + valeur
var_dump(  $usernassuf);

?>

<h1>B O U C L E S</h1>

<H2>for()</H2>
<p>uniquement pour tab. indéxés</p>
<h4>avec boucle for() : + de contrôle sur l'index (i)</h4>
<p>((ex : on peut commencer par l'index que l'on veut (on peut commncer à element 10 si on a 50éléments ds tab) 
<br> $i+2 --> on boucle pas ts les éléments)) </p>
    
<?php   
$tab6=["123", "124", "125"];
for($i=0; $i<count($tab6); $i++){
    echo $tab6[$i];
    br();
}
?>
<h4>boucle for() ds tableau associatif ::: MARCHE PAS <br>
MARCHE UNIQUEMENT SI ON MET DES INDEX </h4> 
<P>$tab7=[
    "id"=>789,
    "email"=>"gg@gmail.com",
    "age"=>30
];   --> MARCHE PAS</P>   
<P>$tab7=[
    0=>789,
    1=>"gg@gmail.com",
    2=>30
];   --> MARCHE </P> 

<?php   
$tab7=[
    0=>789,
    1=>"gg@gmail.com",
    2=>30
];

for ($i=0; $i <count($tab7) ; $i++) { 
    echo $tab7[$i];
    br();
}
?>

<H2>foreach()</H2>
<p> pour tab. indéxés multidimensionnels et associatifs</p>
<p>La boucle foreach() fonctionne uniquement sur tableaux ou objets, 
    ERREUR si on boucle sur une variable non array (tableau)</p>
    <p>le mot clé AS est OBLIGATOIRE</p>
    <p>2 façon d'écrire la boucle foreach() ::
        foreach ($variable as $key => $value) {
            # code...
            }

            OU  !! PAS CLAIR !!
        

        </p>

<?php   
$userfor=[
    "id" => 123,
    "email" => "mu@gmail.com",
    "âge" => 25
];
foreach ($userfor as $valeur) {
    echo "je suis la valeur : " . $valeur ;
    br();
}
br();
echo "<p>Pour afficher la clé ET la valeur</p>";
foreach ($userfor as $clé => $valeur) {
    echo  "je suis la clé : " . $clé .  " et je suis la valeur : " . $valeur ;
    br();
}

$ville = ["marseille", "bruay en artois", "paris"];
br();
foreach ($ville as $index) {
    echo "ma ville est : " . $index;
    br();
}
foreach ($ville as $index => $valeur) {
    echo "ma ville est : " . $valeur  . "et son index est " . $index;
    br();
}
br();
$dept = [
    "nom" => "ain",
    "nb" => "01",
    "ville" =>[
        "ville 1"=> "montreuil",
        "ville2" => "pantin",
    ]
    ];
foreach ($dept["ville"] as $key => $value) {
    echo "on boucle le tab. ds le tab." . $key . " : " . $value;
    br();
}
foreach ($dept["ville"] as  $value) {
    echo "on boucle le tab. ds le tab. résultat val. uniquement". " : "  . $value;
    br();
}
echo "<hr>\$tab8</hr>";
$tab8 = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
foreach ($tab8 as $tab8index) {
    foreach ($tab8index as $nb) {
        
        echo "$nb, ";
    }br();
};

foreach ($tab8 as $index=>$tab8index) {
    echo "tableau index $index : ";
    foreach ($tab8index as $nb) {
        echo " $nb, ";
    }br();
};
?>   


<H2>while()</H2>
<p>avec boucle while() : </p>
<p> i --> val de départ de la boucle <br> while($i <= 5)  ça veut dire ::: tant que $i est < à 5 --> tu boucles(nous entrons ds la boucle)
<br>echo "$i - - - " --> tu affiches la val de $i (+ des tirets SANS CONCATENATION !!!)
<br>$i++ --> ON N'OUBLIE PAS D'INCREMENTER DE 1 à chaque tour de boucle pour ne pas avoir une boucle infinie!!!</p>
    
<?php   
$i=0; 
while ($i <= 5) {
    echo "$i - - - ";
    $i++;
}
br();
while ($i <= 10) {
    if ($i==10) {
    echo "$i F I N de la boucle";
    } else {
    echo "$i - - - ";
    }
    $i++;
}
?> 
<H2>do{} while()</H2>
<?php 
$j=11;
do {
    echo $j++ ."je fais tour de boucle";
    br();
} while ($j>10 && $j<15);


?>

</body>
</html>







/** Exercice 6 : foreach pour un tableau associatif
*  Objectif : 
    Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
* Afficher chaque information sous la forme clé : valeur dans des paragraphes, 
l'email doit être dans un lien (<a>)

/** Exercice 7 : Foreach avec des clés personnalisées
*  Objectif : Créer un tableau associatif représentant un menu de navigation, 
les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
* Afficher chaque element du menu sous forme de liens (<a>)

* /** Exercice 8 : Boucles imbriquées et conditions
*  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nb aléatoire entre 1 et 100. 
*  Mettre un background vert sur les cellules contenant un nombre pair

/** Exercice 9 : Generation d'un calendrier
*  Objectif : Utiliser une boucle for pour générer un calendrier mensuel (de 1 à 31), 
puis y afficher les jours dans un tableau HTML, les week ends devront être en rouge

/** Exercice 10 : Tableau de tableaux
*  Objectif : Créer un tableau contenant trois sous tableaux, 
chacun représentera une personne avec les clés 'prenom','nom','age'. 
*  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), 
    où chaque personne a sa propre sous-liste (<ul>)
*  Résultat attendu : 

*  <ol> 

*  <li> Personne 1 </li>
*  <ul> 
*  <li> prénom : prenom </li>
*  <li> nom : nom </li>
*  <li> age: age </li>
*  </ul>
*  <li> Personne 2 </li>



*/
