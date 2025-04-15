<h2 style="text-align: center;">I N S C R I P T I O N</h2>


<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    if (isset($_POST["form_inscription"])) {
        $nom     = $_POST['nom'];
        $mail    = $_POST['mail'];
        $password= password_hash($_POST['password'],PASSWORD_DEFAULT); 

        $sql="INSERT INTO users (prenom, nom, mail, password) VALUES (:prenom, :nom, :mail, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nom" => $nom, 
            ":mail" => $mail,
            ":password" => $password
        ]);
        echo " I N S C R I P T I O N    R E U S S I E" ;
    }
} else {
    echo "E R R O R";
}

?>

<form method="post" action=""> <!---action = sur la m^me p.--->

    <label for="nom">Nom</label>
    <input type="text" name="nom" required>

    <label for="email">Email</label>
    <input type="email" name="mail" required>

    <label for="password">Mot de passe</label>
    <input type="password" name="password" required>
    
    <button name="form_inscription" type="submit">S'incrire</button>
</form>
