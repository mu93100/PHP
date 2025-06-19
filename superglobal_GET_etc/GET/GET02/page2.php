page2

<?php
var_dump($_GET);

if (isset($_GET["nom"])) {
    echo $_GET["nom"];
}else {
    echo $_GET["article"];
}

if (array_key_exists("ville", $_GET)) {
    echo $_GET["ville"] . "🥨";
}else{
    echo "pas de villes rattachées🏁❤️‍🔥📛😶‍🌫️🫤🤪😱🥶🤢🐸🦄🐽👄👅🐛🎈🏳️‍🌈🏴‍☠️";
}
?>
<h5>La VERIF des données existantes ou pas est super importante pour traitement de données en nb
    avec :<br> if (isset($_GET["clé"]))      ou     if (array_key_exists("clé", $_GET))
</h5>