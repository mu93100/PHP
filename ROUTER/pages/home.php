<h1>home</h1>
<?php
// var_dump($_COOKIE);


if (isset($_COOKIE['cookie__langueChoisie']) && !empty($_COOKIE['cookie__langueChoisie'])) {
    if (isset($_COOKIE['cookie__prenom']) && !empty($_COOKIE['cookie__langueChoisie'])) {   
    $traduire_welcome = translate($_COOKIE['cookie__langueChoisie'], 'Welcome');
    $traduire_text = translate($_COOKIE['cookie__langueChoisie'], 'text');
    $traduire_name = translate($_COOKIE['cookie__langueChoisie'], 'name');

    $cookie_name = $_COOKIE['cookie__prenom'];
    $cookie_langue = $_COOKIE['cookie__langueChoisie'];
    $cookie_surname = $_COOKIE['cookie__nom'];
    ?> 
    <h2> <?= $traduire_welcome . " " . $cookie_name ;?></h2>
    <h3> <?= $traduire_text . " le " . $_COOKIE['cookie__langueChoisie'] ;?> </h3> 
    <h3> <?= $traduire_name . " est " . $_COOKIE['cookie__nom'] ;?> </h3>
    <?php
    } else {
        echo 'veuillez vous connecter';
    }
} else {
    echo '<h2> Veuillez choisir une langue</h2>';

}
?>