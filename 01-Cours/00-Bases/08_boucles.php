<style>
    body {
        margin: 0;
        padding: 60px;
        background-color: #fff;
        color: #333;
        font-family: Arial, sans-serif;
    }

    .img_div {
        width: 200px;
        margin: 0 auto 20px;
    }

    .img_div img {
        width: 100%;
    }

    .topnav {
        background: #b30000; /* Rouge plus foncé */
        overflow: hidden;
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .topnav a {
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

    h2 {
        font-size: 2em;
        color: #b30000; /* Rouge plus foncé */
        border-top: 1px solid #b30000;
        border-bottom: 1px solid #b30000;
        text-align: center;
        padding: 10px;
        margin: 0 0 20px;
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
        color: #b30000; /* Rouge plus foncé */
        margin: 0;
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
echo '<h2> Structures itératives : les boucles </h2>';
//--------------------
// Les boucles sont destinées à répéter des lignes de codes de façon automatique.
echo 'Les boucles sont destinées à répéter des lignes de codes de façon automatique.';

// Boucle while :
//--------------------
echo '<h4>La boucle: while </h4>';
//--------------------
echo '<pre>';
echo '<p>$i = 0;// valeur de départ de la boucle</p>';
echo '<p>while ($i < 3) {// tant que $i est inférieur à 3, nous entrons dans la boucle</p>';
echo '<p> echo "$i---";// affiche 0---1---2---</p>';
echo '<p> $i++;// on n\'oublie pas d\'incrémenter à chaque tour de boucle pour ne pas avoir une boucle infinie</p>';
echo '<p>}</p>';
echo '<p>// Note : pas de ";" à la fin des structures itératives</p>';
echo '</pre>';

$i = 0;    // valeur de départ de la boucle
while ($i < 3) {   // tant que $i est inférieur à 3, nous entrons dans la boucle
    echo "$i---";  // affiche 0---1---2---
    $i++;          // on n'oublie pas d'incrémenter à chaque tour de boucle pour ne pas avoir une boucle infinie
} // Note : pas de ";" à la fin des structures itératives
echo '<br>';

// Boucle do while :
//--------------------
echo '<h4>La boucle do..while </h4>';
//--------------------
// La boucle do while a la particularité de s'exécuter au moins une fois (correspondant à "do"), puis tant que la condition while est vraie.
echo '<p>La boucle do while a la particularité de s\'exécuter au moins une fois (correspondant à "do"), puis tant que la condition while est vraie.</p>';

echo '<pre>';
echo '<p>$j = 1;</p>';
echo '<p> do {</p>';
echo '<p>     echo \'Je fais un tour de boucle\';</p>';
echo '<p>     $j++;</p>';
echo '<p>} while ($j > 10);// la condition renvoie false ici, pourtant la boucle a bien tourné une fois. Attention au ";" après le while de cette boucle</p>';
echo '</pre>';

$j = 1;
do {
    echo 'Je fais un tour de boucle <br>';
    $j++;
} while ($j > 10);  // la condition renvoie false ici, pourtant la boucle a bien tourné une fois. Attention au ";" après le while de cette boucle

// Exemple d'utilisation : poser une question à l'internaute une première fois avec le "do", puis tant qu'il n'a pas répondu avec le "while".
echo '<p>Exemple d\'utilisation : poser une question à l\'internaute une première fois avec le "do", puis tant qu\'il n\'a pas répondu avec le "while".</p>';

//----------
// Boucle for :
//--------------------
echo '<h4> La boucle: for </h4>';
//--------------------
// La boucle for est une autre syntaxe de la boucle while.
echo '<p>La boucle for est une autre syntaxe de la boucle while.</p>';

echo '<pre>';
echo '<p>for ($i = 0; $i < 10; $i++) {// on trouve dans les parenthèses du for: valeur de départ; condition d\'entrée dans la boucle; variation de $i(incrémentation décrémentation ou autre chose)
	</p>';
echo '<p> echo $i;  // affiche 0 à 9 en 10 tours</p>';
echo '<p>}</p>';
echo '</pre>';

for ($i = 0; $i < 10; $i++) { // on trouve dans les parenthèses du for : valeur de départ; condition d'entrée dans la boucle; variation de $i (incrémentation décrémentation ou autre chose)
    echo $i . '<br>';  // affiche 0 à 9 en 10 tours
}

// Rappel : si on veut faire varier $i de 10 en 10, on écrit $i += 10 à la place de $i++
/**
 *echo '<table border="1">';
 *	echo '<tr>';
 *		for ($chiffre = 0; $chiffre < 10; $chiffre++) {
 *			echo "<td> $chiffre </td>";	
 *		}
 *	echo '</tr>';
 *echo '</table>';
 **/

echo '<hr>';
//--------------------
echo '<h4> Boucle foreach </h4>';
//--------------------
// La boucle foreach est un moyen simple de passer en revue un tableau ou un objet. Elle retourne une erreur si vous tentez de l'utiliser sur autre chose.
echo '<p>La boucle foreach est un moyen simple de passer en revue un tableau ou un objet. Elle retourne une erreur si vous tentez de l\'utiliser sur autre chose.</p>';

echo '<pre>';
echo '<p>$tab = [\'azertyuiop\', \'AZERTYUIOP\', true, 2.09];';
echo '<p>print_r($tab);</p>';
echo '</pre>';

$tab = ['azertyuiop', 'AZERTYUIOP', true, 2.09];
print_r($tab);

foreach ($tab as $valeur) { // le mot clé "as" fait partie de la structure syntaxique de la foreach : il est obligatoire. $valeur vient parcourir la colonne des valeurs de l'array. Notez qu'on peut l'appeler comme on veut : c'est sa place après "as" qui détermine qu'elle parcourt les valeurs.
    echo $valeur . '<br>';    // on affiche successivement les éléments du tableau à chaque tour de boucle. La foreach s'arrête automatiquement à la fin du tableau.
}

foreach ($tab as $indice => $valeur) {  // quand il y a 2 variables après "as", la première parcourt la colonne des indices (quelque soit son nom), et la seconde parcourt la colonne des valeurs (quelque soit son nom)
    echo $indice . ' correspond à ' . $valeur . '<br>';
}


// BOUCLE FOREACH 

//EXERCICE : Parcourir/afficher toutes les infos de mes tableaux imbriqués ($multi) : grâce aux boucles foreach :
    $multi = array( 
        0 => array( 'prenom'=>'marco', 'nom'=>'polo' ), 
        1 => array( 'prenom'=>'jean', 'nom'=>'jacques' ), 
        2 => array( 'prenom'=>'bob', 'nom'=>'dylan' ) 
    );


    foreach( $multi as $indice => $sous_tableau ){

        foreach( $sous_tableau as $cle => $valeur ){
    
            echo "$valeur <br>";
        }
    }
    
    echo "<hr>";
    //----------------------------------------------
    foreach( $multi as $sous_tableau ){
    
        foreach ($sous_tableau as $valeur ) {
    
            echo "$valeur <br>";
        }
    }

