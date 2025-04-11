<h1>C O N N E X I O N</h1>


<?php
if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    if (isset($_POST['connexion']) && isset($_POST["identifiant"])){
        $_SESSION["identifiant"] = $_POST["identifiant"];
        $_SESSION["mot_de_passe"] = $_POST["mot_de_passe"];
        if ( ($_POST["identifiant"]=== $_SESSION["identifiant"]) && ($_POST["mot_de_passe"]=== $_SESSION["mot_de_passe"])) {
            $identifiant =( $_SESSION["identifiant"] = $_POST["identifiant"]); 
            $_SESSION["connexionOK"] = true; 
            
            setcookie("cookie__ID", $identifiant, time()+86400, "/PHP/exo11avril/connexion"); // est ce que c'est bien la p connexion qu'il faut viser ???
            header("Location: index"); 
            exit();
            echo "H E L L O " . $identifiant;
        }else {
            echo '<script> alert("identifiant ou mot de passe I N C O R R E C T");</script>';}
        
    }
    } 
var_dump($_POST);
var_dump($_SESSION);
// var_dump($_SERVER);

$formID = htmlspecialchars($_POST['identifiant'] ?? $_COOKIE['cookie__ID'] ?? '');
?>
<form action="" method="post"> 
    <input type="text" value="<?= $formID; ?>" name="identifiant" placeholder="i d e n t i f i a n t">
    
    <input type="text" name="mot_de_passe" placeholder="p a s s w o r d">

    <input type="submit" name="connexion" value="s e   c o n n e c t e r">
</form>