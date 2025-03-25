<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>*{ font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: blue;}</style>
    <title>Document</title>
</head>
<body>

<?php
function br(){
    echo "<br>"; 
}

/** Exercice 3 : Créer et afficher un tableau associatif
*   Objectif : Travaillez avec un tableau associatif.
*   Instructions :
*   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
*   Affichez chaque information avec une phrase descriptive.
*/
$tab = [
    "prénom" => "lydia", 
    "nom" => "przybylski", 
    "âge" => 77
];
// echo $tab;
echo "<pre>";
echo "renseigner votre prénom : " . $tab["prénom"];
br();
echo "renseigner votre nom : " . $tab ["nom"];
br();
echo "renseigner votre âge : " . $tab["âge"];
br();
echo "</pre>";
echo "renseigner vos noms, prénoms, age : " . $tab["prénom"] . ", " . $tab ["nom"]  . ", "  . $tab["âge"]. " ans";
br();

echo "<p> ton prenom cest :"." ". $tab["prénom"]." "."ton nom c'est :"." ". $tab["nom"]." "."ton âge c'est :"." ".$tab["âge"]."</p>";
echo "<p> tu t'appelles {$tab["prénom"]} {$tab["nom"]}, et tu as {$tab["âge"]} ans</p>";
/**Exercice 4 : Compter les éléments d'un tableau
*  Objectif : Utilisez les fonctions count() et sizeof().
*  Instructions :
*  Créez un tableau avec plusieurs villes.
*  Affichez le nombre d'éléments dans le tableau.*/

$villes = ["pantin", "aubervilliers", "la courneuve", "romainville"];
echo count($villes);
br();

/** Exercice 5 : Créer un tableau multidimensionnel
*   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
*   Instructions :
*   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
*   Affichez la note du premier étudiant.*/
$classe134 = [
    "user1" => [
                "prénom" => "albert",
                "nom" => "laji",
                "note" => 15
    ],
    "user2" => [
                "prénom" => "renée",
                "nom" => "chamois",
                "note" => 12.5
    ],
    "user3" => [
                "prénom" => "claude",
                "nom" => "mirzat",
                "note" => 18
    ],
];
echo "La note d'albert : " . $classe134 ["user1"]["note"] . "/20";

// ajouter un 4eme users et affiché le résultat dans faite un echo d'une phrase ajoutant le nom de nina et son mail 
$users = [
    [
        "prenom" => "Julien",
        "email" => "julien@example.com"
    ],
    [
        "prenom" => "Nina",
        "email" => "nina@example.com"
    ],
    [
        "prenom" => "Samir",
        "email" => "samir@example.com"
    ]
];
echo "<pre>";
print_r($users);
echo "</pre>";
$users[]= ["prenom"=>"Renée", "email" =>"renee@example.com"];

echo "<pre>";
print_r($users);
echo "</pre>";

// ****
// Vérifier si la variable $tab4 est définie (isset) et non vide (!empty).
// Si c’est le cas, ajouter un nouvel élément (une personne) dans $tab4.
// Sinon, initialiser $tab4 avec le tableau $tab_multi qui contient une liste d’utilisateurs.

// ***
$tab_multi = array(
        0 => array(
            'prenom' => 'Julien',
            'nom'    => 'Dupon',
            'telephone' => '0601020304'
        ),
        1 => array(
            'prenom' => 'Nicolas',
            'nom'    => 'Duran',
            'telephone' => '0601020304'
        ),
        2 => array(
            'prenom' => 'Pierre',
            'nom'    => 'Dulac'
        )
)
if (isset($tab4) && !empty($tab4)) {
    $tab4[]= ['prenom'=>'Nawel', 'nom'=>'Nuponet'];
} else {
    $tab4=$tab_multi;
    if (!isset('telephone')||empty('telephone')) {
        $tab4[2]['telephone'] = '0601020304'
    }
}

?>
</body>
</html>