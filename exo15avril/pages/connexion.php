<h1>C O N N E X I O N</h1>
<?php
 var_dump($_POST);
// visio de la superglobal POST
// array (size=3)
//   'prenom' => string 'mu' (length=2)
//   'nom' => string 'ehlib' (length=5)
//   'connexion' => string 's e c o n n e c t e r' (length=21)
//connexion est un button submit MAIS CREE UNELIGNE DE TAB --> qui permet de l'utiliser avec if (isset($_POST['connexion']))

echo __DIR__;
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    if (isset($_POST['connexion'])){
        if (isset($_POST["mail"]) && isset($_POST["password"])) {
            $_SESSION["mail"]=$_POST["mail"];
            $_SESSION["password"]=$_POST["password"];
            $_SESSION["connected"]=true; 
                
            setcookie("cookie__mail", $_POST["mail"], time()+86400, "/PHP/exo15avril"); 
            }
        }
        header("Location: index"); // redirection header exit
        exit();
    }


// var_dump($_POST);
// var_dump($_SESSION);
// var_dump($_SERVER);

$formMail=htmlspecialchars($_POST['mail'] ?? $_COOKIE['cookie__mail'] ?? ''); // le '' rien concerne juste la value="<?= $formMail; " 

// var_dump($_POST);
// var_dump($_COOKIE);
// echo "\formMail $formMail";
?>
<form action="" method="post"> <!-- on peut mettre post en minuscule -->
    <label for="">m a i l</label>
    <input type="text" value="<?= $formMail ?>" name="mail">

    <label for="">password</label>
    <input type="password" name="password">

    <input type="submit" name="connexion" value="s e c o n n e c t e r\s e c o n n e c t e r">
</form>