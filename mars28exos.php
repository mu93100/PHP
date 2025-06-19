<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .multi{
            color: blue;
            /* display: flex ;
            flex-direction: row;
            justify-content: space-between; */
        }
        .thead1{
            border: 1px dotted orangered;
        }
    </style>
</head>
<body>

    
<p>/** Exercice 1 : Boucle while basique
*  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20</p>
<?php
$a=0;

while ($a <= 20) {
    echo "$a est un nb pair";
    $a +=2;
    echo "<br>";
}

while ($a <= 20) {
    if ($a%2==0){
        echo "$a est un nb pair";
        echo "<br>";
    }
    $a++;
}
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
$an=2000;
while ($an <= date("Y")) {
    echo "<ul>$annee</ul>";
    $an++;
}
?>





<p>/** Exercice 3 : Boucle do...while
*  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. 
S'assurer que le premier multiple est affiché même si la condition n'est pas remplie
</p>
<?php
// $nb=0;
// do {
//     echo $nb ."est un multiple de 3 <br>";
//     $nb += 3;  
// } while ($nb < 30);

$nbnb=0;
do {
    if ($nbnb % 3===0){
        
        echo $nbnb . "est un multiple de 3"."<br>";
    }
    $nbnb ++; 
    
} while ($nbnb <= 30);
?>

<p>/** Exercice 4 : Boucle for
*  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nb donné
</p>
<div class = "multi">
<?php

for ($nb1=1; $nb1 <=10 ; $nb1++) { 
    for ($i=1; $i <=10 ; $i++) { 
        echo "$nb1 x $i =" . $nb1*$i;
        echo "<br>";
    }
    echo "<br>";
}
?>
</div>

<p>/** Exercice 5 : Boucles imbriquées pour créer une grille
*  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
*  Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour 1ère cellule)
echo '<table><thead><th><?php echo "$h" ?></th></thead></table>';
</p>
<?php ?>

?>
<table style="border: 1px solid black; padding:5px">
   
        <?php
 
        for ($n=1; $n<=5; $n++){
            echo "<tr>";
            for($x=1; $x<=5; $x++){
                echo "<td style='border : 1px solid black'>$n$x</td>";
                }
            "</tr>";
        }
 
        ?>
 
</table>
 
<?php
$h=0;
$v=1;
for ($h=0; $h <=5 ; $h++){ 
    echo '<table border="1">';
        echo '<thead class="thead1">';
                echo '<th>';
                    echo '<tr>';
                        echo $h ;
                    echo '</tr>';
                echo '</th>';           
        echo "</thead>";

        echo "<tbody>";       
            echo '<tr></th>';
            echo '<th>';
            for ($v=1; $v <=5 ; $v++){
                // echo $v;
                echo "<td> $h . $v </td>";
            
                };
                // for ($h=0) { 
                //     echo $v;
                // }
            echo '</tr>';
        echo "</tbody>";
    echo "</table>";
    
};
?>
<!-- <table>
<caption>Exercice 5 : Boucles imbriquées pour créer une grille</caption>
<thead>
    <tr>
        <th scope="col">0</th>
        <th scope="col">h1</th>
        <th scope="col">h2</th>
        <th scope="col">h3</th>
    </tr>
</thead>
    <tbody>
        <tr>
            <th scope="row">v1</th>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
        </tr>
        <tr>
            <th scope="row">v2</th>
            <td>2.1</td>
            <td>2.2</td>
            <td>2.3</td>
        </tr>
        <tr>
            <th scope="row">v3</th>
            <td>3.1</td>
            <td>3.2</td>
            <td>3.3</td>
        </tr>
        <tr>
            <th scope="row">v4</th>
            <td>4.1</td>
            <td>4.2</td>
            <td>4.3</td>
        </tr>
    </tbody>
</table> -->
<p>/** Exercice 7 : Foreach avec des clés personnalisées
*  Objectif : Créer un tableau associatif représentant un menu de navigation, 
les clés seront les titres des pages ('accueil','produits','contact') et les valeurs, les liens correspondants.
* Afficher chaque element du menu sous forme de liens (<a>)</p>
<?php
$menu=[
    "accueil" => "https/page/accueil",
    "produits" => "https/page/produits",
    "contact" => "https/page/contact"
];
echo "<div>;
foreach ($menu as $cle => $valeur) {
    echo '<div> . <a href=".$cle.">$val</a> . </div>';
}</div>";

//najiba
$menu=[
    "accueil "=> "/page/accueil.php",
    " produits "=>"/page/produits.php",
    " contact "=> "/page/contact.php",
];

foreach($menu as $cle => $valeur  ){
echo "<a href=".$valeur.">$cle</a>";

}

?>

</body>
</html>
