
 <!-- // Démarrage de la session au début du script -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>>c o n n e x i o nEXOSESSION</h1>
<form method="post" action=""> <!--  on met ds post -->
        <input type="text"  name="prenom" placeholder="P R E N O M" required><br>
        
        <input type="text"  name="nom" placeholder="N O M" required><br>

        <input type="email" name="email" placeholder="E M A I L" required><br>

        <textarea name="story" rows="5" cols="33" placeholder=">racontes-toi" ></textarea><br>

        <input type="submit" value="V A L I D E R">
    </form> 
<?php   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['nom']=  $_POST['nom'];
    $_SESSION['email']=  $_POST['email'];
    $_SESSION['story']=  $_POST['story'];
        if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['story'] )){
            echo "H E L L O  " . $_SESSION['prenom'];
        }

        var_dump($_POST);
        var_dump($_SESSION);
        echo "prenom : ".$_SESSION['prenom']."<br>";
        echo "nom : ".$_SESSION['nom'];
        echo "story : " . $_SESSION['story'];
    // redirection vers page accueil
    header("Location: accueil.php");
    exit(); // TJRS appeler exit après une redirection
}
br();
echo "identification entrée formulaire : " . $_POST["prenom"]; // valeur de le clé prenom ici c'est facundo
?>
        <!-- <a href="./session1.php">test session</a>
    
</body>
</html> 
