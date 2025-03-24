<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{ font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        ;}
    </style>
    <title>Document</title>
</head>
<body>
    
<h1>tiit</h1>



<?php
echo "<p> TATATA</p>";
// <!-- // Exercice 9 : Catégoriser une personne selon son âge
// // *  Objectif : Ecrire une/des condition(s) qui classe une personnee 
// en 'enfant','adolescent','adulte' ou 'senior' selon son age

$age10=80;
switch ($age10){
    // case $age10<3 : 
    //     echo "<p>$age10 estBB</p>";
    //     break; 
    case ($age10 >0) && ($age10<13): 
        echo "<p>$age10 est ENFANT</p>";
        break;
    case ($age10>13) && ($age10<18): 
        echo "<p>$age10 est ADO</p>";
        break; 
    case ($age10 >= 18) && ($age10 <= 65): 
        echo "<p>$age10 est ADULTE</p>";
        break;
    case ($age10>65) && ($age10 < 70): 
        echo "<p>$age10 est SENIOR</p>";
        break;
    default: 
        echo "<p>$age10 n'est pas un âge</p>";
    break;
};


// // /** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
// // *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
// // *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur 
// se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
// // *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, 
// alors il retournera false

// XOR === soit
$user= "kiki";
$empreinte_digi="dfhyf,khj";
$mdp="password";

if (($user && $mdp) XOR ($user && $empreinte_digi)) {
    echo "<p>Connexion réussie</p>";
} else {
    echo "<p>mu return : false</p>";
}
//nawel

$motDPasse=true;
$empreinteDig=false;
if($motDPasse XOR $empreinteDig ){
    echo "<p> Nawel connexion réussie</p>";
}else{
    echo "<p> échec de connexion</p>";
}


// <!-- *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, 
// même si les deux le sont

// ** Exercice 3 : Afficher le jour de la semaine
// *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, 
// le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)/
// $jour=;
// switch ($jour){
//     case $jour=1 : 
//         echo "<p>$jour est lundi</p>";
//         break; 
//         case $jour=1 : 
//             echo "<p>$jour est lundi</p>";
//             break; 
//     case $jour=1 : 
//         echo "<p>$jour est lundi</p>";
//         break; 
//         default: 
//         echo "<p>$age10 n'est pas un âge</p>";
//     case $jour=1 : 
//         echo "<p>$jour est lundi</p>";
//         break; 
    
//     break;
// };
// /** Exercice 4 : Comparaison de chaines de caractères
//  *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, 
// la condition doit vérifier le type ET la valeur  -->


?>
// </body>
// </html>