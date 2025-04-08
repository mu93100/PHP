<h1>home</h1>
<?php
var_dump($_COOKIE);
$trad_welcome = translate($_COOKIE['cookie__langueChoisie'], 'Welcome');
$trad_text = translate($_COOKIE['cookie__langueChoisie'], 'text');
$trad_name = translate($_COOKIE['cookie__langueChoisie'], 'name');

$cookie_name =$_COOKIE['cookie__prenom'];
?>

<h2> <?= $trad_welcome . " " . $cookie_name ;?></h2>
<h3> <?= $trad_text . " le " . $_COOKIE['cookie__langueChoisie'] ;?> </h3>
<h3> <?= $trad_name . " est " . $_COOKIE['cookie__nom'] ;?> </h3>