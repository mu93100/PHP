<h1>c o n n e x i o n</h1>
<form action="" method="post">
    <label for="">p r é n o m</label>
    <input type="text" name="prenom" >
    
    <label for="">n o m</label>
    <input type="text" name="nom">

    <input type="submit" name="connexion" value="s e c o n n e c t e r">
</form>

<?php
var_dump($_POST);
// visio de la superglobal POST
// array (size=3)
//   'prenom' => string 'mu' (length=2)
//   'nom' => string 'ehlib' (length=5)
//   'connexion' => string 's e c o n n e c t e r' (length=21)
//connexion est un button submit MAIS CREE UNELIGNE DE TAB --> qui permet de l'utiliser avec if (isset($_POST['connexion']))


if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    if (isset($_POST['connexion'])){
        $_SESSION["prenom"]=$_POST["prenom"]; // attention !!! cô ajout d'une ligne ds tab multidimensionnel (avec clés et val.)
        $_SESSION["nom"]=$_POST["nom"];
        $_SESSION["connected"]=true; // on rentre manuellement la ligne connected ds tab $_SESSION
    }
}
var_dump($_POST);
var_dump($_SESSION);
// var_dump($_SERVER);
?>