<h1>données du formulaire </h1>
<a href="front.php"> aller formulaire </a>
<hr>

<?php



// print '<pre>';
// print_r($_POST);
// print '<pre>';

var_dump($_GET); // array vide car pas de GET
var_dump($_POST); // array 'pseudo' => string 'ff' (length=2) // 'email' => string '' (length=0)

if(empty($_POST["pseudo"]) || empty($_POST["email"]))
{
    echo "erreur tous les champs doivent être remplis<br>" ;
}else{
    echo "prenom posté :  $_POST[pseudo] <br> " ;
    echo "email posté :  $_POST[email] <br> " ;
}
//  ************* autre possibilité****************

if(empty( $_POST['pseudo'] )){ 
    echo " 🤬🤬🤬🤬ERREUR pseudo champs oligatoire";
}
else{
        echo "🐸🐸🐸🐸Prénom posté :  $_POST[pseudo] <br>";
    }


if(empty( $_POST['email']) ){ 
        echo " 🏴‍☠️🏴‍☠️🏴‍☠️ERREUR email champs oligatoire";
    }
else{
        echo "🏳️‍🌈🏳️‍🌈🏳️‍🌈🏳️‍🌈email posté : $_POST[email] <hr>";
    }   