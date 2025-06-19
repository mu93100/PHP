q<style>
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

    pre {
        border: 1px solid #cc0000;
        height: 50px;
        width: 100%;
        background: #ffe6e6;
        margin: 10px 0;
    }

    pre p {
        font-size: 1.2em;
        padding-left: 20px;
        color: #cc0000;
    }

    .topnav {
        background: #8B0000; /* Rouge foncé */
        overflow: hidden;
        display: flex;
        justify-content: center;
    }

    .topnav a {
        float: left;
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

    .texte p {
        color: #333;
        font-size: 1.3em;
        text-align: justify;
    }

    ul {
        margin-left: 20px;
        padding-left: 0;
    }

    ul li {
        margin-bottom: 10px;
        list-style-type: square;
        color: #cc0000;
        font-size: 1.2em;
    }

    .img_div {
        width: 200px;
        margin: auto;
    }

    .img_div img {
        width: 100%;
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
// Pour ouvrir un passage en PHP, on utilise la balise précédente
//--------------------
echo '<h2> Les balises PHP </h2>';
//--------------------
// Pour fermer un passage en PHP, on utilise la balise suivante :
?>

<div class="texte">
	<p>
		Pour exécuter un script PHP, il faut l'écrire dans un fichier ayant l'extension .php et dans un passage PHP. Pour ouvrir un passage en PHP on utilise : < ?php pour le refermer on utilise ?>.
		En dehors des balises d'ouverture et de fermeture du PHP, il est possible d'écrire du HTML.
	</p>
</div>
<!-- En dehors des balises d'ouverture et de fermeture du PHP, nous pouvons écrire du HTML quand on est dans un fichier ayant l'extension .php -->

<?php
// Vous n'êtes pas obligé de fermer un passage en PHP en fin de script

//--------------------
echo '<h2> Affichage </h2>';
//--------------------
echo '<pre><p>echo "Bonjour";</p></pre>';
echo 'Bonjour <br>';  // echo est une instruction qui permet d'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML.
?>
<div class="texte">
	<p>
		echo est une instruction qui permet d'afficher dans le navigateur. Toutes les instructions se terminent par un ";". Dans un echo, nous pouvons mettre aussi du HTML.
	</p>
</div>
<?php
echo '<pre><p>print "Nous sommes mardi";</p></pre>';
print 'Nous sommes mardi <br>';   // print est une autre instruction d'affichage. Peu de différence avec echo.
?>
<div class="texte">
	<p>
		print est une autre instruction d'affichage. Elle a peu (ou pas) de différence avec echo.
	</p>

	<p>
		Autres instructions d'affichage que nous verrons plus loin :
	</p>
	<ul>
		<li>print_r();</li>
		<li>var_dump();</li>
	</ul>
</div>
<?php
// Pour faire un commentaire sur une seule ligne

/*
   Pour faire un commentaire sur plusieurs lignes
*/

# Autre syntaxe de commentaire sur une seule ligne
?>
