<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Tableaux en PHP</title>
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
            color: #cc0000;
            border-top: 1px solid #cc0000;
            border-bottom: 1px solid #cc0000;
            text-align: center;
            padding: 10px;
        }

        h4 {
            font-size: 1.5em;
            color: #cc0000;
            border-bottom: 1px solid #cc0000;
            padding-bottom: 10px;
        }

        pre {
            border: 1px solid #cc0000;
            background: #ffe6e6;
            margin: 10px 0;
            padding: 10px;
            font-size: 1.1em;
            overflow: auto;
        }

        pre p {
            margin: 0;
            color: #cc0000;
        }

        .topnav {
            background: #b30000;
            overflow: hidden;
            display: flex;
            justify-content: center;
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
            color: #cc0000;
        }

        .img_div {
            width: 200px;
            margin: auto;
            text-align: center;
        }

        .img_div img {
            width: 100%;
        }

        .texte p {
            color: #333;
            font-size: 1.3em;
            text-align: justify;
        }

        .debug {
            border: 1px solid #cc0000;
            background: #ffe6e6;
            padding: 10px;
            font-size: 1.1em;
            overflow: auto;
        }
    </style>
</head>
<body>
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
    echo '<h2> Les tableaux ou array </h2>';
    //--------------------
    echo '<p>Un tableau, ou array en anglais, est une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n\'importe quel type. Elles possèdent un indice dont la numérotation par défaut commence à 0.</p>';

    // Déclaration d'un array (méthode 1) :
    $liste = array('grégoire', 'nathalie', 'émilie', 'françois', 'georges');

    echo '<pre>';
        echo '<p>Déclaration d\'un array (méthode 1) :</p>';
        echo '<p>$liste = array(\'grégoire\', \'nathalie\', \'émilie\', \'françois\', \'georges\');</p>';
        echo '<p>echo \'Le type de $liste est : \' . gettype($liste);  // affiche le type array</p>';
        echo '<p>// echo $liste;// erreur de type "Array to string conversion" car on ne peut pas afficher directement un array avec un echo</p>';
        echo '<p>var_dump($liste);  // affiche le contenu du tableau plus certaines informations comme les types</p>';
    echo '</pre>';  // pre est une balise HTML qui permet de formater l'affichage du var_dump

    echo 'Le type de $liste est : ' . gettype($liste) . '<br>';  // affiche le type array
    // echo $liste;  // erreur de type "Array to string conversion" car on ne peut pas afficher directement un array avec un echo
    var_dump($liste);

    echo '<pre>';
        echo '<p>print_r($liste);  // print_r est plus synthétique que var_dump : il n\'affiche pas le type des éléments contenus dans l\'array</p>';
    echo '</pre>';

    echo print_r($liste);

    // fonction d'affichage d'un print_r avec balises pre :
    function debug($param) {
        echo '<pre class="debug">';
            print_r($param);
        echo '</pre>';
    }

    // Autre méthode de déclaration d'un array :
    echo '<pre>';
        echo '<p>$tab = [\'France\', \'Italie\', \'Espagne\', \'Portugal\'];</p>';
        echo '<p>$tab[] = \'Suisse\'; // les [] vides permettent d\'ajouter une valeur à la fin de notre array</p>';
        echo '<p>debug($tab); // Cette fonction a été créée</p>';
        echo '<p>echo $tab[1]; // Entre [] l\'indice de notre élément dans le tableau</p>';
    echo '</pre>';

    $tab = ['France', 'Italie', 'Espagne', 'Portugal'];
    $tab[] = 'Suisse';  // les [] vides permettent d'ajouter une valeur à la fin de notre array
    debug($tab);
    // Afficher "Italie" à partir de notre tableau $tab :
    echo $tab[1] . '<br>';

    //--------------  
    // Tableau associatif :
    echo '<h4>Tableau associatif</h4>';
    echo '<p>Un tableau associatif est un tableau dans lequel on choisit la dénomination des indices.</p>';

    $couleur = array(
        'j' => 'jaune',
        'b' => 'bleu',
        'v' => 'vert'
    );

    echo '<pre>';
        echo '<p>$couleur = array(</p>';
            echo '<p>    \'j\' => \'jaune\',<br>';
            echo '    \'b\' => \'bleu\',<br>';
            echo '    \'v\' => \'vert\'</p>';
        echo '<p>);</p>';
    echo '</pre>';

    // Pour accéder à un élément du tableau associatif :
    echo '<p>Pour accéder à un élément du tableau associatif :</p>';

    echo '<pre>';
        echo '<p>echo \'La seconde couleur de notre tableau est le \' . $couleur[\'b\'];</p>';
        echo '<p>echo "La seconde couleur de notre tableau est le $couleur[b]";// affiche bleu. Un array écrit entre des guillemets perd les quotes autour de son indice</p>';
    echo '</pre>';

    echo 'La seconde couleur de notre tableau est le ' . $couleur['b'] . '<br>';
    echo "La seconde couleur de notre tableau est le $couleur[b] <br>"; // affiche bleu. Un array écrit dans des guillemets ou des quotes perd les quotes autour de son indice

    // Mesurer la taille d'un array :
    echo '<p>Mesurer la taille d\'un array :</p>';

    echo '<pre>';
        echo '<p>echo \'Taille du tableau $couleur : \' . count($couleur);</p>';
        echo '<p>echo \'Taille du tableau $couleur : \' . sizeof($couleur);<br><br>// count() et sizeof() font la même chose : ils comptent le nombre d\'éléments contenus dans l\'array indiqué</p>';
    echo '</pre>';

    echo 'Taille du tableau $couleur : ' . count($couleur) . '<br>';
    echo 'Taille du tableau $couleur : ' . sizeof($couleur) . '<br>';  // count() et sizeof() font la même chose : ils comptent le nombre d'éléments contenus dans l'array indiqué

    //--------------------
    echo '<h2> Array multidimensionnel </h2>';
    //--------------------
    echo '<p>Nous parlons de tableau multidimensionnel quand un tableau est contenu dans un autre tableau. Chaque tableau représente une dimension.</p>';

    // création d'un array multidimensionnel :
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
    ); // il est possible de choisir le nom des indices dans cet array multidimensionnel

    echo '<pre>';
        echo '<p>// création d\'un array multidimensionnel :</p>';
        echo '<p>$tab_multi = array(</p>';
            echo '<p>    0 => array(</p>';
            echo '<p>        \'prenom\' => \'Julien\',</p>';
            echo '<p>        \'nom\'    => \'Dupon\',</p>';
            echo '<p>        \'telephone\' => \'0601020304\'</p>';
        echo '<p>    ),</p>';
            echo '<p>    1 => array(</p>';
            echo '<p>        \'prenom\' => \'Nicolas\',</p>';
            echo '<p>        \'nom\'    => \'Duran\',</p>';
            echo '<p>        \'telephone\' => \'0601020304\'</p>';
        echo '<p>    ),</p>';
            echo '<p>    2 => array(</p>';
            echo '<p>        \'prenom\' => \'Pierre\',</p>';
            echo '<p>        \'nom\'    => \'Dulac\'</p>';
        echo '<p>    )</p>';
        echo '<p>); // il est possible de choisir le nom des indices dans cet array multidimensionnel</p>';
    echo '</pre>';

    echo '<p>debug($tab_multi);// Affiche le tableau</p>';
    debug($tab_multi);

    // Accéder à la valeur "Julien" dans cet array :
    echo '<p>Accéder à la valeur "Julien" dans cet array :</p>';
    echo '<pre><p>echo $tab_multi[0][\'prenom\'];</p></pre>';
    echo $tab_multi[0]['prenom'];  // affiche Julien. Nous entrons d'abord à l'indice [0] de $tab_multi, pour ensuite aller à l'indice ['prenom'] dans le sous-tableau
    echo '<hr>';

    // Parcourir le tableau multidimensionnel avec une boucle for :
    echo '<p>Parcourir le tableau multidimensionnel avec une boucle for :</p>';

    echo '<pre>';
        echo '<p>...</p>';
    echo '</pre>';

    // Possible car les indices sont numériques.
    for ($i = 0; $i < count($tab_multi); $i++) {
        echo $tab_multi[$i]['prenom'] . '<br>';
    }
    echo '<hr>';
    ?>
</body>
</html>
