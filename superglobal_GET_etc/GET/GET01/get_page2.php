<style>
*{
    color: tomato;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}</style>
<h1>jean R O U G E</h1>
<p>$_GET affiche ds URL de la p. 2 ::: superglobal_GET_etc/GET/GET01/get_page2?article=jean&couleur=rouge&prix=123</p>
<?php
var_dump($_GET);

echo "<p>article : " . $_GET['article'] . "</p>";
echo "<p>couleur : " . $_GET['couleur'] . "</p>";
echo "<p>prix : " . $_GET['prix'] . " £</p>";
?>
