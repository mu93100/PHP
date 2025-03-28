<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>/** Exercice 1 : Boucle while basique
*  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20</p>
<?php
$a=0;
while ($a <= 20 && $a%2==0) {
    echo "$a est un nb pair";
    $a++;
};
?>
<p>Exercice 2 : Générer une liste d'années avec une boucle while
*  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) 
dans une liste non ordonnée (<ul>)</p>
<?php
$annee=2000;
while ($annee <= 2025) {
    echo "<ul>$annee</ul>";
    $annee++;
}
?>

<p>/** Exercice 3 : Boucle do...while
*  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. 
S'assurer que le premier multiple est affiché même si la condition n'est pas remplie
</p>
<?php
do {
    # code...
} while ($a <= 10);
?>

</body>
</html>
